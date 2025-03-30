<?php

namespace App\Http\Controllers\Admin;

use App\Models\ServiceProvider;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceProviderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Fetch all service providers
        $serviceProviders = ServiceProvider::all();

        // Return the view with the list of service providers
        return view('admin.service-providers.index', compact('serviceProviders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Return the view to create a new service provider
        return view('admin.service-providers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:service_providers,email',
            'phone' => 'required|string|max:15',
            'address' => 'required|string',
        ]);

        // Create a new service provider
        ServiceProvider::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
        ]);

        // Redirect with success message
        return redirect()->route('admin.service-providers.index')->with('success', 'Service Provider created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(ServiceProvider $serviceProvider)
    {
        // Show the details of the selected service provider
        return view('admin.service-providers.show', compact('serviceProvider'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ServiceProvider $serviceProvider)
    {
        // Return the view to edit the service provider
        return view('admin.service-providers.edit', compact('serviceProvider'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ServiceProvider $serviceProvider)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:service_providers,email,' . $serviceProvider->id,
            'phone' => 'required|string|max:15',
            'address' => 'required|string',
        ]);

        // Update the service provider data
        $serviceProvider->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
        ]);

        // Redirect with success message
        return redirect()->route('admin.service-providers.index')->with('success', 'Service Provider updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ServiceProvider $serviceProvider)
    {
        // Delete the service provider
        $serviceProvider->delete();

        // Redirect with success message
        return redirect()->route('admin.service-providers.index')->with('success', 'Service Provider deleted successfully!');
    }
}
