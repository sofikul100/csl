<?php

namespace App\Http\Controllers;

use App\Models\Designation;
use Illuminate\Http\Request;

class DesignationController extends Controller
{
    public function index(){
        $designations = Designation::all();
        return view('adminpanel.designation.designation',compact('designations'));
    }



    public function addForm(){
        return view('adminpanel.designation.designation_add');
    }

    public function addDesignation(Request $request){
        $request->validate([
            'name'=>'required',
            'details'=>'required'
        ]);

        $designation  = new Designation();
        $designation->name = $request->name;
        $designation->details = trim($request->details);
        $designation->save();

        return redirect()->route('designation.index')->with('message','Designation Added Successfully');
    }


    public function editDesignation ($designation_id){
        $designation = Designation::findOrFail($designation_id);
        if(!$designation){
            abort('Designation Not Found',404);
        }

        return view('adminpanel.designation.designation_edit',compact('designation'));
    }


    public function updateDesignation(Request $request,$designation_id){
        $request->validate([
            'name'=>'required',
            'details'=>'required'
        ]);
        $designation = Designation::findOrFail($designation_id);
        if(!$designation){
            abort('Designation Not Found',404);
        }

        $designation->name = $request->name;
        $designation->details = trim($request->details);
        $designation->save();
        return redirect()->route('designation.index')->with('message','Designation Updated Successfully');

        
    }




    public function deleteDesignation($designation_id){
        $designation = Designation::findOrFail($designation_id);
        if(!$designation){
            abort('Designation Not Found',404);
        }

        $designation->delete();
        return redirect()->route('designation.index')->with('message','Designation Deleted Successfully');
    }
}
