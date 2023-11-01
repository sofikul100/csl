<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\WorkingProcess;
use Illuminate\Http\Request;

class WorkingProcessController extends Controller
{
    public function index(Request $request)
    {
        $working_process = WorkingProcess::with('image')->get();
        return view('adminpanel.working_process.working_process', compact('working_process'));
    }


    public function addForm()
    {
        return view('adminpanel.working_process.workking_process_add');
    }


    public function addWorking_process(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required|image|mimes:png,jpg,jpeg'
        ]);

        $working_process = new WorkingProcess();
        $working_process->title = $request->title;
        $working_process->save();
        if ($request->hasFile('image')) {

            $location_name = 'images/working_process_images/'; //change folder name according to the MODEL

            $file = $request->file('image');
            $name = time() . '.' . $file->getClientOriginalExtension();
            $destinationPath = env('PUBLIC_FILE_LOCATION') ? public_path('../' . $location_name) : public_path($location_name);
            $file->move($destinationPath, $name);
            $location = $location_name . $name;

            $image = new Image();
            $image->url = $location;
            $image->type = $file->getClientOriginalExtension();
            $image->parentable_id = $working_process->id;     //change varibale according to the MODEL
            $image->parentable_type = WorkingProcess::class; //change class name according to the MODEL
            $image->save();


            return redirect()->route('working_process.index')->with('message', 'Working Process Added Successfully');
        }
    }


    public function editWorking_process($working_process_id)
    {
        $working_process = WorkingProcess::with('image')->find($working_process_id);
        return view('adminpanel.working_process.working_process_edit', compact('working_process'));
    }


    public function updateWorking_process(Request $request, $working_process_id)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'image|mimes:png,jpg,jpeg'
        ]);


        $working_process = WorkingProcess::with('image')->find($working_process_id);
        if (!$working_process) {
            abort('Team not found', 404);
        }
        $working_process->title = $request->title;
        if ($request->hasFile('image')) {

            $location_name = 'images/working_process_images/'; //change folder name according to the MODEL

            $file = $request->file('image');
            $name = time() . '.' . $file->getClientOriginalExtension();
            $destinationPath = env('PUBLIC_FILE_LOCATION') ? public_path('../' . $location_name) : public_path($location_name);
            $file->move($destinationPath, $name);
            $location = $location_name . $name;

            if ($working_process->image) {

                if (file_exists(public_path($working_process->image->url))) {
                    unlink(public_path($working_process->image->url));
                }

                $working_process->image->url = $location;
                $working_process->image->save();
            } else {
                $image = new Image();
                $image->url = $location;
                $image->type = $file->getClientOriginalExtension();
                $image->parentable_id = $working_process->id;
                $image->parentable_type = WorkingProcess::class;
                $image->save();
            }
            $working_process->save();
            return redirect()->route('working_process.index')->with('message', 'Working Process Updated Successfully');
        }else{
            $working_process->save();
            return redirect()->route('working_process.index')->with('message', 'Working Process Updated Successfully');
        }
    }


    public function deleteWorking_process($working_process_id)
    {
        $working_process = WorkingProcess::with('image')->find($working_process_id);
        if (!$working_process) {
            abort('Testimonial not found', 404);
        }
        if (file_exists(public_path($working_process->image->url))) {
            unlink(public_path($working_process->image->url));
        }

        $working_process->delete();
        return redirect()->route('working_process.index')->with('message', 'Working Process Deleted Successfully');
    }
}
