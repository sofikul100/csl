<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Image;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $project = Project::with('image', 'categorie')->find($request->id);
            return response()->json($project);
        }
        $projects = Project::with('image', 'categorie')->orderBy('id', 'DESC')->get();
        return view('adminpanel.project.project', compact('projects'));
    }


    public function addForm()
    {
        $categories = Categorie::orderBy('id', 'DESC')->get();
        return view('adminpanel.project.project_add', compact('categories'));
    }


    public function addProject(Request $request)
    {
        $request->validate([
            'categorie_id' => 'required',
            'title' => 'required',
            'content' => 'required',
            'image' => 'required|image|mimes:png,jpg,jpeg',
            'start_date' => 'required',
            'end_date' => 'required'
        ]);

        $project = new Project();
        $project->category_id = $request->categorie_id;
        $project->title = $request->title;
        $project->content = trim($request->content);
        $project->start_date = $request->start_date;
        $project->end_date = $request->end_date;

        $project->save();

        if ($request->hasFile('image')) {

            $location_name = 'images/projects/'; //change folder name according to the MODEL

            $file = $request->file('image');
            $name = time() . '.' . $file->getClientOriginalExtension();
            $destinationPath = env('PUBLIC_FILE_LOCATION') ? public_path('../' . $location_name) : public_path($location_name);
            $file->move($destinationPath, $name);
            $location = $location_name . $name;

            $image = new Image();
            $image->url = $location;
            $image->type = $file->getClientOriginalExtension();
            $image->parentable_id = $project->id;     //change varibale according to the MODEL
            $image->parentable_type = Project::class; //change class name according to the MODEL
            
        }
            $image->save();
            return redirect()->route('project.index')->with('message', 'Project Added Successfully');
    }


    public function editProject($project_id)
    {
        $project = Project::with('image')->findOrFail($project_id);

        if (!$project) {
            abort(404);
        }
        $categories = Categorie::all();
        return view('adminpanel.project.project_edit', compact('project', 'categories'));
    }


    public function updateProject(Request $request, $project_id)
    {
        $request->validate([
            'categorie_id' => 'required',
            'title' => 'required',
            'content' => 'required',
        ]);


        $project = Project::with('image')->find($project_id);
        $project->category_id = $request->categorie_id;
        $project->title = $request->title;
        $project->content = trim($request->content);
        $project->start_date = $request->start_date;
        $project->end_date = $request->end_date;

        if ($request->hasFile('image')) {

            $location_name = 'images/projects/'; //change folder name according to the MODEL

            $file = $request->file('image');
            $name = time() . '.' . $file->getClientOriginalExtension();
            $destinationPath = env('PUBLIC_FILE_LOCATION') ? public_path('../' . $location_name) : public_path($location_name);
            $file->move($destinationPath, $name);
            $location = $location_name . $name;

            if ($project->image) {

                if (file_exists(public_path($project->image->url))) {
                    unlink(public_path($project->image->url));
                }

                $project->image->url = $location;
                $project->image->save();
            } else {
                $image = new Image();
                $image->url = $location;
                $image->type = $file->getClientOriginalExtension();
                $image->parentable_id = $project->id;
                $image->parentable_type = Project::class;
                $image->save();
            }
        }

        $project->save();
        return redirect()->route('project.index')->with('message', 'Project Updated Successfully');
    }



    public function deleteProject($project_id)
    {
        $project = Project::with('image')->findOrFail($project_id);

        if (!$project) {
            abort(404);
        }

        if (file_exists(public_path($project->image->url))) {
            unlink(public_path($project->image->url));
        }

        $project->delete();
        return redirect()->route('project.index')->with('message', 'Project Deleted Successfully');
    }
}
