<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\JobType;
use App\Models\Project;

class HomeController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    public function index()
    {
       
        $Jobs = Job::all();
        $myjobs = auth()->user()->jobs;
        $jobtypes = JobType::all();

        return view('home', compact('Jobs', 'myjobs', 'jobtypes'));


        //this for testing 
        // -----------------------------------
        // $projects = Project::with('users')->get();
        // return view('testing_pivot', compact('projects'));
    }
}
