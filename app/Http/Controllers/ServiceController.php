<?php

namespace App\Http\Controllers;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        // Paginate the jobs and display 6 items per page
        $services = Service::orderBy('id', 'desc')->paginate(6);
        
        // Pass the paginated job data to the view
        return view('main.service', compact('services'));
    }
}
