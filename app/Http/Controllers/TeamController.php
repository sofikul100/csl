<?php

namespace App\Http\Controllers;

use App\Models\Designation;
use App\Models\Image;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $team = Team::with('designation', 'image')->find($request->id);
            return response()->json($team);
        }
        $teams = Team::with('designation')->get();
        return view('adminpanel.team.team', compact('teams'));
    }


    public function addForm()
    {
        $designations = Designation::all();
        return view('adminpanel.team.team_add', compact('designations'));
    }


    public function addTeam(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'designation_id' => 'required',
            'facebook_url' => 'required',
            'image' => 'required|image|mimes:png,jpg,jpeg'
        ]);

        $team = new Team();
        $team->name = $request->name;
        $team->designation_id = $request->designation_id;
        $team->facebook_url = $request->facebook_url;
        $team->twitter_url = $request->twitter_url;
        $team->linkedin_url = $request->linkedin_url;
        $team->instagram_url = $request->instagram_url;
        $team->pinterest_url = $request->pinterest_url;
        $team->save();
        if ($request->hasFile('image')) {

            $location_name = 'images/employee_images/'; //change folder name according to the MODEL

            $file = $request->file('image');
            $name = time() . '.' . $file->getClientOriginalExtension();
            $destinationPath = env('PUBLIC_FILE_LOCATION') ? public_path('../' . $location_name) : public_path($location_name);
            $file->move($destinationPath, $name);
            $location = $location_name . $name;

            $image = new Image();
            $image->url = $location;
            $image->type = $file->getClientOriginalExtension();
            $image->parentable_id = $team->id;     //change varibale according to the MODEL
            $image->parentable_type = Team::class; //change class name according to the MODEL
            $image->save();


            return redirect()->route('team.index')->with('message', 'Team Added Successfully');
        }
    }


    public function editteam($team_jd)
    {
        $team = Team::with('designation', 'image')->find($team_jd);
        $designations = Designation::all();
        return view('adminpanel.team.team_edit', compact('team', 'designations'));
    }


    public function updateteam(Request $request, $team_id)
    {
        $request->validate([
            'name' => 'required',
            'designation_id' => 'required',
            'facebook_url' => 'required',
            'image' => 'image|mimes:png,jpg,jpeg'
        ]);


        $team = Team::with('image')->find($team_id);
        $team->name = $request->name;
        $team->designation_id = $request->designation_id;
        $team->facebook_url = $request->facebook_url;
        $team->twitter_url = $request->twitter_url;
        $team->linkedin_url = $request->linkedin_url;
        $team->instagram_url = $request->instagram_url;
        $team->pinterest_url = $request->pinterest_url;
        if ($request->hasFile('image')) {

            $location_name = 'images/employee_images/'; //change folder name according to the MODEL

            $file = $request->file('image');
            $name = time() . '.' . $file->getClientOriginalExtension();
            $destinationPath = env('PUBLIC_FILE_LOCATION') ? public_path('../' . $location_name) : public_path($location_name);
            $file->move($destinationPath, $name);
            $location = $location_name . $name;

            if ($team->image) {

                if (file_exists(public_path($team->image->url))) {
                    unlink(public_path($team->image->url));
                }

                $team->image->url = $location;
                $team->image->save();
            } else {
                $image = new Image();
                $image->url = $location;
                $image->type = $file->getClientOriginalExtension();
                $image->parentable_id = $team->id;
                $image->parentable_type = Team::class;
                $image->save();
                return redirect()->route('team.index')->with('message', 'Team Updated Successfully');
            }
            $team->save();
            return redirect()->route('team.index')->with('message', 'Team Updated Successfully');
        }else{
            $team->save();
            return redirect()->route('team.index')->with('message', 'Team Updated Successfully');
        }
    }


    public function deleteteam($team_id)
    {
        $team = Team::with('image')->find($team_id);
        if (!$team) {
            abort('Team not found', 404);
        }
        if (file_exists(public_path($team->image->url))) {
            unlink(public_path($team->image->url));
        }

        $team->delete();
        return redirect()->route('team.index')->with('message', 'Team Deleted Successfully');
    }
}
