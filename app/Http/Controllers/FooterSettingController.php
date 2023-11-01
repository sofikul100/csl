<?php

namespace App\Http\Controllers;

use App\Models\FooterSetting;
use Illuminate\Http\Request;

class FooterSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $footer_setting=FooterSetting::latest()->first();
        return view('adminpanel.footersetting.index',compact('footer_setting'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view('adminpanel.footersetting.create');


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'company_brief' => 'required',
        //     'facebook_url' => 'required',
        //     'twitter_url' => 'required',
        //     'instagram_url' => 'required',
        //     'pinterest_url' => 'required',
        //     'linkedin_url' => 'required',

        // ]);

        // $footersetting = new FooterSetting();
        // $footersetting->company_brief = $request->company_brief;
        // $footersetting->facebook_url = $request->facebook_url;
        // $footersetting->twitter_url = $request->twitter_url;
        // $footersetting->instagram_url = $request->instagram_url;
        // $footersetting->pinterest_url = $request->pinterest_url;
        // $footersetting->linkedin_url = $request->linkedin_url;


        // $footersetting->save();
        // return redirect()->route('footer_setting_index')->with('success', 'You have successfully added user!');

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
        $footersetting = FooterSetting::find($id);
        return view('adminpanel.footersetting.edit',compact('footersetting'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $footersetting_id=$request->footersetting_id;
        $request->validate([
            'company_brief' => 'required',
            'facebook_url' => 'required',
            'twitter_url' => 'required',
            'instagram_url' => 'required',
            'pinterest_url' => 'required',
            'linkedin_url' => 'required',

        ]);
        FooterSetting::findOrFail($footersetting_id)->update([
            'company_brief'=>$request->company_brief,
            'facebook_url'=>$request->facebook_url,
            'twitter_url'=>$request->twitter_url,
            'instagram_url'=>$request->instagram_url,
            'pinterest_url'=>$request->pinterest_url,
            'linkedin_url'=>$request->linkedin_url,


        ]);
        return redirect()->route('footer_setting_index')->with('message','Footer Setting Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
    }
}
