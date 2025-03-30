<?php

namespace App\Http\Controllers\Admin;

use App\Models\Report;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Fetch all reports from the database
        $reports = Report::all();

        // Return view with reports data
        return view('admin.reports.index', compact('reports'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Return the form for creating a new report
        return view('admin.reports.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'date' => 'required|date',
        ]);

        // Create the report using validated data
        Report::create([
            'title' => $request->title,
            'description' => $request->description,
            'date' => $request->date,
        ]);

        // Redirect with success message
        return redirect()->route('admin.reports.index')->with('success', 'Report created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Fetch the specific report by ID
        $report = Report::findOrFail($id);

        // Return the show view with report data
        return view('admin.reports.show', compact('report'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Fetch the specific report by ID for editing
        $report = Report::findOrFail($id);

        // Return the edit form with the report data
        return view('admin.reports.edit', compact('report'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Fetch the specific report by ID
        $report = Report::findOrFail($id);

        // Validate the incoming request
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'date' => 'required|date',
        ]);

        // Update the report with validated data
        $report->update([
            'title' => $request->title,
            'description' => $request->description,
            'date' => $request->date,
        ]);

        // Redirect with success message
        return redirect()->route('admin.reports.index')->with('success', 'Report updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Fetch the specific report by ID
        $report = Report::findOrFail($id);

        // Delete the report from the database
        $report->delete();

        // Redirect with success message
        return redirect()->route('admin.reports.index')->with('success', 'Report deleted successfully');
    }
}
