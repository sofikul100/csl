<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\FooterSetting;
use App\Models\PageSetting;
use App\Models\Project;
use App\Models\Service;
use App\Models\Team;
use App\Models\Testimonial;
use App\Models\WorkingProcess;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $pageSetting = PageSetting::first();
        $testimonials = Testimonial::with('image')->orderBy('id','DESC')->get();
        $footerSetting = FooterSetting::first();
        $about = About::first();
        $services = Service::with('image')->get();
        $team_mumbers = Team::with('designation','image')->get();
        $working_process = WorkingProcess::with('image')->get();
        $projects = Project::with('image')->orderBy('id','DESC')->get();
        return view('csl',compact('pageSetting','testimonials','footerSetting','about','services','team_mumbers','working_process','projects'));
    }
}
