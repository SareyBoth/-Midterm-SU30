<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class PostServiceController extends Controller
{
    // Define the postService method
    public function index()
    {
        $services = Service::orderBy('id', 'desc')->paginate(10);
        return view('service.index', compact('services'));
    }

    public function create()
    {
        return view('service.create');
    }


    public function store(Request $request)
{
    // Validate the incoming data
    $request->validate([
        'logo' => 'required|string|max:255',
        'service_name' => 'required|string|max:255',
        'location' => 'required|string|max:255',
        'price' => 'required|numeric',
        'country' => 'required|string|max:255',
        'detail' => 'required|string',
    ]);

    // Handle the file upload
    // if ($request->hasFile('logo')) {
    //     $logoPath = $request->file('logo')->store('logos', 'public');
    // }

    // Create the new service
    Service::create([
        'logo' => $request->input('logo'),
        'service_name' => $request->input('service_name'),
        'location' => $request->input('location'),
        'price' => $request->input('price'),
        'country' => $request->input('country'),
        'detail' => $request->input('detail'),
    ]);

    // Redirect back with success message
    return redirect()->route('services.index')->with('success', 'Service created successfully!');
}
    public function destroy($id)
    {
        // Find the service by its ID
        $service = Service::findOrFail($id);

        // Delete the service
        $service->delete();

        // Redirect with a success message
        return redirect()->route('services.index')->with('success', 'Service deleted successfully.');
    }
}
