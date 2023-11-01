<?php

namespace App\Http\Controllers;

use App\Models\PageSetting;
use App\Models\Subscription;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    public function index (){
        $subscriptions = Subscription::orderBy('id','DESC')->get();
        return view('adminpanel.subscription.subscription',compact('subscriptions'));
    }



    public function deleteSubscription ($id){
        $subscription = Subscription::findwOrFail($id);
        if(!$subscription){
            abort('subscription not found',404);
        }
        $subscription->delete();
    }


    //=================== page setting routes willl be here============//

    public function pageSettingIndex (){
        $page_setting = PageSetting::first();
        return view('adminpanel.pageSetting.pageSetting',compact('page_setting'));
    }


    public function pageSettingEdit ($id){
        $page_setting = PageSetting::find($id);
        if(!$page_setting){
            abort(404);
        }
        return view('adminpanel.pageSetting.pageSetting_edit',compact('page_setting'));
    }

    public function pageSettingUpdate (Request $request,$id){
        $request->validate([
            'happy_clients'=>'min:1',
            'experience'=>'min:1',
            'products'=>'min:1',
            'team_mumbers'=>'min:1'
        ]);


          $page_setting = PageSetting::find($id);
          $page_setting->banner_title = $request->banner_title;
          $page_setting->banner_heading = $request->banner_heading;
          $page_setting->banner_heading = $request->banner_heading; 
          $page_setting->banner_bief = $request->banner_bief; 
          $page_setting->happy_clients = $request->happy_clients; 
          $page_setting->experience = $request->experience; 
          $page_setting->products = $request->products; 
          $page_setting->team_mumbers = $request->team_mumbers; 
          $page_setting->company_address = $request->company_address;
          $page_setting->company_email = $request->company_email; 
          $page_setting->company_contact = $request->company_contact; 
          $page_setting->working_hour_start = $request->working_hour_start; 
          $page_setting->working_hour_end = $request->working_hour_end; 
          
          if ($request->hasFile('logo')) {

            $location_name = 'logo/'; //change folder name according to the MODEL

            $file = $request->file('logo');
            $name = time() . '.' . $file->getClientOriginalExtension();
            $destinationPath = env('PUBLIC_FILE_LOCATION') ? public_path('../'.$location_name) : public_path($location_name);
            $file->move($destinationPath, $name);

            
            if ($page_setting->logo) {
                
                if (file_exists(public_path($page_setting->logo))) {
                    unlink(public_path($page_setting->logo));
                }
                $page_setting->logo = $name;
            } 
        }

        $page_setting->save();
        return redirect()->route('page_setting.index')->with('message','Page Setting Updated Successfully');


          


    }
}
