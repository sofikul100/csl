<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Image;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $about=About::with('image')->first();
        return view('adminpanel.about.index',compact('about'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $abouts=About::find($id);
        return view('adminpanel.about.edit',compact('abouts'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $abouts_id=$request->abouts_id;
        $request->validate([
            'heading' => 'required',
            'content' => 'required',
        ]);
        $about = About::with('image')->find($abouts_id);
        if(!$about){
            abort(404);
        }
        $about->heading = $request->heading;
        $about->content = $request->content;
        if ($request->hasFile('image')) {

            $location_name = 'images/about_images/'; //change folder name according to the MODEL

            $file = $request->file('image');
            $name = time() . '.' . $file->getClientOriginalExtension();
            $destinationPath = env('PUBLIC_FILE_LOCATION') ? public_path('../' . $location_name) : public_path($location_name);
            $file->move($destinationPath, $name);
            $location = $location_name . $name;

            if ($about->image) {

                if (file_exists(public_path($about->image->url))) {
                    unlink(public_path($about->image->url));
                }

                $about->image->url = $location;
                $about->image->save();
            } else {
                $image = new Image();
                $image->url = $location;
                $image->type = $file->getClientOriginalExtension();
                $image->parentable_id = $about->id;
                $image->parentable_type = About::class;
                $image->save();
            }
        }

        $about->save();
        return redirect()->route('about.index')->with('message','About Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
