<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $testmonial = Testimonial::with('image')->find($request->id);
            return response()->json($testmonial);
        }
        $testimonials = Testimonial::all();
        return view('adminpanel.testimonial.testimonial', compact('testimonials'));
    }


    public function addForm()
    {
        return view('adminpanel.testimonial.testimonial_add');
    }


    public function addTestimonial(Request $request)
    {
        $request->validate([
            'client_name' => 'required',
            'email' => 'required|email',
            'contact' => 'required',
            'designation'=>'required',
            'quote'=>'required',
            'image' => 'required|image|mimes:png,jpg,jpeg'
        ]);

        $testimonial = new Testimonial();
        $testimonial->client_name = $request->client_name;
        $testimonial->email = $request->email;
        $testimonial->contact = $request->contact;
        $testimonial->designation = $request->designation;
        $testimonial->quote = $request->quote;
        $testimonial->save();
        if ($request->hasFile('image')) {

            $location_name = 'images/testimonial_images/'; //change folder name according to the MODEL

            $file = $request->file('image');
            $name = time() . '.' . $file->getClientOriginalExtension();
            $destinationPath = env('PUBLIC_FILE_LOCATION') ? public_path('../' . $location_name) : public_path($location_name);
            $file->move($destinationPath, $name);
            $location = $location_name . $name;

            $image = new Image();
            $image->url = $location;
            $image->type = $file->getClientOriginalExtension();
            $image->parentable_id = $testimonial->id;     //change varibale according to the MODEL
            $image->parentable_type = Testimonial::class; //change class name according to the MODEL
            $image->save();


            return redirect()->route('testimonial.index')->with('message', 'Testimonial Added Successfully');
        }
    }


    public function editTestimonial($testimonial_id)
    {
        $testimonial = Testimonial::with('image')->find($testimonial_id);
        return view('adminpanel.testimonial.testimonial_edit', compact('testimonial',));
    }


    public function updateTestimonial(Request $request, $testimonial_id)
    {
        $request->validate([
            'client_name' => 'required',
            'email' => 'required|email',
            'contact' => 'required',
            'designation'=>'required',
            'image' => 'image|mimes:png,jpg,jpeg'
        ]);


        $testimonial = Testimonial::with('image')->find($testimonial_id);
        if (!$testimonial) {
            abort('Team not found', 404);
        }
        $testimonial->client_name = $request->client_name;
        $testimonial->email = $request->email;
        $testimonial->contact = $request->contact;
        $testimonial->designation = $request->designation;
        $testimonial->quote = $request->quote;
        if ($request->hasFile('image')) {

            $location_name = 'images/testimonial_images/'; //change folder name according to the MODEL

            $file = $request->file('image');
            $name = time() . '.' . $file->getClientOriginalExtension();
            $destinationPath = env('PUBLIC_FILE_LOCATION') ? public_path('../' . $location_name) : public_path($location_name);
            $file->move($destinationPath, $name);
            $location = $location_name . $name;

            if ($testimonial->image) {

                if (file_exists(public_path($testimonial->image->url))) {
                    unlink(public_path($testimonial->image->url));
                }

                $testimonial->image->url = $location;
                $testimonial->image->save();
                dd('with image');
            } else {
                $image = new Image();
                $image->url = $location;
                $image->type = $file->getClientOriginalExtension();
                $image->parentable_id = $testimonial->id;
                $image->parentable_type = Testimonial::class;
                $image->save();
                dd('without image');
            }
            dd('last update');
            $testimonial->save();
            return redirect()->route('testimonial.index')->with('message', 'Testimonial Updated Successfully');
        }else{
            $testimonial->save();
            return redirect()->route('testimonial.index')->with('message', 'Testimonial Updated Successfully');
        }
    }


    public function deleteTestimonial($testimonial_id)
    {
        $testimonial = Testimonial::with('image')->find($testimonial_id);
        if (!$testimonial) {
            abort('Testimonial not found', 404);
        }
        if (file_exists(public_path($testimonial->image->url))) {
            unlink(public_path($testimonial->image->url));
        }

        $testimonial->delete();
        return redirect()->route('testimonial.index')->with('message', 'Testimonial Deleted Successfully');
    }
}
