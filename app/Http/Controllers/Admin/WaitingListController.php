<?php

namespace App\Http\Controllers\Admin;

use App\Models\WaitingList;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WaitingListController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Fetch all waiting list entries and pass them to the view
        $waitingLists = WaitingList::all();
        return view('admin.waiting-list.index', compact('waitingLists'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.waiting-list.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:waiting_lists,email',
            'phone' => 'nullable|string|max:15',
        ]);

        WaitingList::create($request->all());

        return redirect()->route('admin.waiting-list.index')->with('success', 'Successfully added to the waiting list!');
    }

    /**
     * Display the specified resource.
     */
    public function show(WaitingList $waitingList)
    {
        return view('admin.waiting-list.show', compact('waitingList'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(WaitingList $waitingList)
    {
        return view('admin.waiting-list.edit', compact('waitingList'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, WaitingList $waitingList)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:waiting_lists,email,' . $waitingList->id,
            'phone' => 'nullable|string|max:15',
        ]);

        $waitingList->update($request->all());

        return redirect()->route('admin.waiting-list.index')->with('success', 'Waiting list entry updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(WaitingList $waitingList)
    {
        $waitingList->delete();

        return redirect()->route('admin.waiting-list.index')->with('success', 'Successfully removed from the waiting list!');
    }
}
