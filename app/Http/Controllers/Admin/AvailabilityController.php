<?php

namespace App\Http\Controllers\Admin;

use App\Models\Availability;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AvailabilityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Retrieve all availability records
        $availabilities = Availability::all();

        dd($availabilities);
        return view('admin.availabilities.index', compact('availabilities'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.availabilities.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'day' => 'required|string|max:255',
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'required|date_format:H:i',
        ]);

        // Store new availability
        Availability::create([
            'day' => $request->day,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
        ]);

        return redirect()->route('admin.availabilities.index')->with('success', 'Availability created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Availability $availability)
    {
        return view('admin.availabilities.show', compact('availability'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Availability $availability)
    {
        return view('admin.availabilities.edit', compact('availability'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Availability $availability)
    {
        // Validate the request data
        $request->validate([
            'day' => 'required|string|max:255',
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'required|date_format:H:i',
        ]);

        // Update availability
        $availability->update([
            'day' => $request->day,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
        ]);

        return redirect()->route('admin.availabilities.index')->with('success', 'Availability updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Availability $availability)
    {
        $availability->delete();
        return redirect()->route('admin.availabilities.index')->with('success', 'Availability deleted successfully.');
    }
}
