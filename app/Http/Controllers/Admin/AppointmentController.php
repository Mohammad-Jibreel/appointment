<?php

namespace App\Http\Controllers\Admin;

use App\Models\Appointment;
use App\Models\ServiceProvider;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Fetch all appointments from the database
        $appointments = Appointment::all(); // Or use pagination: ->paginate(10)

        return view('admin.appointments.index', compact('appointments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Fetch necessary data for creating an appointment (e.g., users, service providers)
        $users = User::all();
        $serviceProviders = ServiceProvider::all();

        return view('admin.appointments.create', compact('users', 'serviceProviders'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the input data
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'service_provider_id' => 'required|exists:service_providers,id',
            'appointment_date' => 'required|date',
            'status' => 'required|string',
        ]);

        // Create a new appointment record in the database
        Appointment::create([
            'user_id' => $request->user_id,
            'service_provider_id' => $request->service_provider_id,
            'appointment_date' => $request->appointment_date,
            'status' => $request->status,
        ]);

        // Redirect back to the appointments list with success message
        return redirect()->route('admin.appointments.index')->with('success', 'Appointment created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Appointment $appointment)
    {
        // Show the details of the specified appointment
        return view('admin.appointments.show', compact('appointment'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Appointment $appointment)
    {
        // Fetch necessary data for editing an appointment
        $users = User::all();
        $serviceProviders = ServiceProvider::all();

        return view('admin.appointments.edit', compact('appointment', 'users', 'serviceProviders'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Appointment $appointment)
    {
        // Validate the input data
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'service_provider_id' => 'required|exists:service_providers,id',
            'appointment_date' => 'required|date',
            'status' => 'required|string',
        ]);

        // Update the appointment details
        $appointment->update([
            'user_id' => $request->user_id,
            'service_provider_id' => $request->service_provider_id,
            'appointment_date' => $request->appointment_date,
            'status' => $request->status,
        ]);

        // Redirect back to the appointments list with success message
        return redirect()->route('admin.appointments.index')->with('success', 'Appointment updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Appointment $appointment)
    {
        // Delete the specified appointment
        $appointment->delete();

        // Redirect back to the appointments list with success message
        return redirect()->route('admin.appointments.index')->with('success', 'Appointment deleted successfully.');
    }
}
