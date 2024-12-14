<?php

namespace App\Http\Controllers;
use App\Models\Job; 
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {
        // Paginate the jobs and display 6 items per page
        $jobs = Job::orderBy('id', 'desc')->paginate(6);
        
        // Pass the paginated job data to the view
        return view('main.job', compact('jobs'));
    }

    public function detail($id)
    {
        // Fetch the job by its ID
        $jobs = Job::where('id', $id)->first();
    
        // Check if the job exists
        if (!$jobs) {
            // Optionally, you can return an error or redirect if the job is not found
            return redirect()->route('home')->with('error', 'Job not found');
        }
        // dd($jobs);
        // Pass the job data to the view
        return view('main.jobdetail', compact('jobs'));
    }
}
