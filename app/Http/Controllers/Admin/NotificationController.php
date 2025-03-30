<?php

namespace App\Http\Controllers\Admin;

use App\Models\Notification;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Get all notifications
        $notifications = Notification::all();
        return view('admin.notifications.index', compact('notifications'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.notifications.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'title' => 'required|string|max:255',
            'message' => 'required|string',
            'type' => 'required|string', // e.g., 'info', 'warning', 'error'
        ]);

        // Create a new notification
        Notification::create([
            'title' => $request->title,
            'message' => $request->message,
            'type' => $request->type,
        ]);

        // Redirect with success message
        return redirect()->route('admin.notifications.index')->with('success', 'Notification created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Notification $notification)
    {
        // Return the view for showing a specific notification
        return view('admin.notifications.show', compact('notification'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Notification $notification)
    {
        // Return the view for editing a specific notification
        return view('admin.notifications.edit', compact('notification'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Notification $notification)
    {
        // Validate the request data
        $request->validate([
            'title' => 'required|string|max:255',
            'message' => 'required|string',
            'type' => 'required|string',
        ]);

        // Update the notification data
        $notification->update([
            'title' => $request->title,
            'message' => $request->message,
            'type' => $request->type,
        ]);

        // Redirect with success message
        return redirect()->route('admin.notifications.index')->with('success', 'Notification updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Notification $notification)
    {
        // Delete the notification
        $notification->delete();

        // Redirect with success message
        return redirect()->route('admin.notifications.index')->with('success', 'Notification deleted successfully!');
    }
}
