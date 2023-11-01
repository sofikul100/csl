<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Models\Image;
class ServiceController extends Controller
{
    public function index (Request $request){
        if($request->ajax()){
            $service = Service::with('image')->find($request->id);
            return response()->json($service);
        }
        $services = Service::with('image')->get();
        return view('adminpanel.service.service',compact('services'));
    }


    public function addForm (){
        return view('adminpanel.service.service_add_form');
    }


    public function addService (Request $request){
         
        $request->validate([
            'name'=>'required',
            'content'=>'required',
            'image'=>'image|required|mimes:png,jpg,jpeg'
        ]);

         $service = new Service();
         $service->name = $request->name;
         $service->content = $request->content;
         $service->save();

         if ($request->hasFile('image')) {
            
            $location_name = 'images/services/'; //change folder name according to the MODEL

            $file = $request->file('image');
            $name = time() . '.' . $file->getClientOriginalExtension();
            $destinationPath = env('PUBLIC_FILE_LOCATION') ? public_path('../'.$location_name ) : public_path($location_name );
            $file->move($destinationPath, $name);
            $location = $location_name . $name;

            $image = new Image();
            $image->url = $location;
            $image->type = $file->getClientOriginalExtension();
            $image->parentable_id = $service->id;     //change varibale according to the MODEL
            $image->parentable_type = Service::class; //change class name according to the MODEL
            $image->save();


            return redirect()->route('service.index')->with('message','Service Added Successfully');
            
        }


    }


    public function editService($service_id){
        $service = Service::with('image')->find($service_id);

        return view('adminpanel.service.service_edit_form',compact('service'));
    }


    public function updateService (Request $request,$service_id){
        $request->validate([
            'name'=>'required',
            'content'=>'required',
            'image'=>'image|mimes:png,jpg,jpeg'
        ]);

          $service = Service::with('image')->find($service_id);
          $service->name = $request->name;
          $service->content = $request->content; 

          if ($request->hasFile('image')) {

            $location_name = 'images/services/'; //change folder name according to the MODEL

            $file = $request->file('image');
            $name = time() . '.' . $file->getClientOriginalExtension();
            $destinationPath = env('PUBLIC_FILE_LOCATION') ? public_path('../'.$location_name) : public_path($location_name);
            $file->move($destinationPath, $name);
            $location = $location_name . $name;
            
            if ($service->image) {
                
                if (file_exists(public_path($service->image->url))) {
                    unlink(public_path($service->image->url));
                }
                
                $service->image->url = $location;
                $service->image->save();
            } else {
                $image = new Image();
                $image->url = $location;
                $image->type = $file->getClientOriginalExtension();
                $image->parentable_id = $service->id;
                $image->parentable_type = Service::class;
                $image->save();
            }
        }

        $service->save();
        return redirect()->route('service.index')->with('message','Service Updated Successfully');

    }






    public function deleteService($service_id){
        $service = Service::with('image')->find($service_id);
        if (file_exists(public_path($service->image->url))) {
            unlink(public_path($service->image->url));
        }

        $service->delete();
        return redirect()->route('service.index')->with('message','Service Deleted Successfully');
    }



}
