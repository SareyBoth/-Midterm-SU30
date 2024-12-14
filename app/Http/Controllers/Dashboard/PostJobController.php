<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Job;
use Illuminate\Http\Request;

class PostJobController extends Controller
{
    public function index() 
    {
        $index = Job::orderBy('id', 'desc')->paginate(10);
        return view('job.index', compact('index'));
    }

    public function destroy($id)
    {
        $user = Job::findOrFail($id);
        $user->delete();

        return redirect()->route('jobs.index')->with('success', 'User deleted successfully.');
    }

    public function create() 
    {
        return view('job.create');
    }

    public function store(Request $request)
    {
        // Validate the incoming data
        $validated = $request->validate([
            'logo' => 'required|string|max:255',
            'company' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'about_job' => 'required|string',
            'requirement' => 'required|string',
            'salary' => 'required|numeric',
            'contact_name' => 'required|string|max:255',
            'contact_email' => 'required|email|max:255',
            'contact_phone' => 'required|string|max:20',
            'detail_job' => 'required|string',
            'detail_company' => 'required|string',
        ]);

        // Create the job record
        Job::create([
            'logo' => $validated['logo'],
            'company' => $validated['company'],
            'location' => $validated['location'],
            'title' => $validated['title'],
            'city' => $validated['city'],
            'country' => $validated['country'],
            'about_job' => $validated['about_job'],
            'requirement' => $validated['requirement'],
            'salary' => $validated['salary'],
            'contact_name' => $validated['contact_name'],
            'contact_email' => $validated['contact_email'],
            'contact_phone' => $validated['contact_phone'],
            'detail_job' => $validated['detail_job'],
            'detail_company' => $validated['detail_company'],
        ]);

        return redirect()->route('jobs.index')->with('success', 'Job created successfully.');
    }
}
