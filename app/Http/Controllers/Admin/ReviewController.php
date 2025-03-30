<?php

namespace App\Http\Controllers\Admin;

use App\Models\Review;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Display a listing of the reviews.
     */
    public function index()
    {
        // Retrieve all reviews from the database
        $reviews = Review::all();

        // Return the view with the reviews
        return view('admin.reviews.index', compact('reviews'));
    }

    /**
     * Show the form for creating a new review.
     */
    public function create()
    {
        // Return the view for creating a new review
        return view('admin.reviews.create');
    }

    /**
     * Store a newly created review in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'user_id' => 'required|exists:users,id', // Assuming there's a relationship with the user
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'nullable|string|max:500',
            'service_id' => 'required|exists:services,id', // Assuming there's a relationship with the service
        ]);

        // Create a new review and save to the database
        Review::create($validatedData);

        // Redirect back to the reviews index page with success message
        return redirect()->route('admin.reviews.index')->with('success', 'Review created successfully!');
    }

    /**
     * Display the specified review.
     */
    public function show(Review $review)
    {
        // Return the view with the specific review
        return view('admin.reviews.show', compact('review'));
    }

    /**
     * Show the form for editing the specified review.
     */
    public function edit(Review $review)
    {
        // Return the view for editing the review
        return view('admin.reviews.edit', compact('review'));
    }

    /**
     * Update the specified review in storage.
     */
    public function update(Request $request, Review $review)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'user_id' => 'required|exists:users,id', // Assuming there's a relationship with the user
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'nullable|string|max:500',
            'service_id' => 'required|exists:services,id', // Assuming there's a relationship with the service
        ]);

        // Update the review with the validated data
        $review->update($validatedData);

        // Redirect back to the reviews index page with success message
        return redirect()->route('admin.reviews.index')->with('success', 'Review updated successfully!');
    }

    /**
     * Remove the specified review from storage.
     */
    public function destroy(Review $review)
    {
        // Delete the review from the database
        $review->delete();

        // Redirect back to the reviews index page with success message
        return redirect()->route('admin.reviews.index')->with('success', 'Review deleted successfully!');
    }
}
