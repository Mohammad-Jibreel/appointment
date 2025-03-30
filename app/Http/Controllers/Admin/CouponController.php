<?php

namespace App\Http\Controllers\Admin;

use App\Models\Coupon;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Retrieve all coupons from the database
        $coupons = Coupon::all();

        // Return the view and pass the coupons data
        return view('admin.coupons.index', compact('coupons'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Return the create view
        return view('admin.coupons.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'code' => 'required|unique:coupons,code',
            'discount' => 'required|numeric|min:1|max:100',
            'status' => 'required|in:active,inactive',
        ]);

        // Create a new coupon using the validated data
        Coupon::create([
            'code' => $request->code,
            'discount' => $request->discount,
            'status' => $request->status,
        ]);

        // Redirect back with a success message
        return redirect()->route('admin.coupons.index')->with('success', 'Coupon created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Coupon $coupon)
    {
        // Return the show view and pass the coupon data
        return view('admin.coupons.show', compact('coupon'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Coupon $coupon)
    {
        // Return the edit view and pass the coupon data
        return view('admin.coupons.edit', compact('coupon'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Coupon $coupon)
    {
        // Validate the incoming request data
        $request->validate([
            'code' => 'required|unique:coupons,code,' . $coupon->id,
            'discount' => 'required|numeric|min:1|max:100',
            'status' => 'required|in:active,inactive',
        ]);

        // Update the coupon data
        $coupon->update([
            'code' => $request->code,
            'discount' => $request->discount,
            'status' => $request->status,
        ]);

        // Redirect back with a success message
        return redirect()->route('admin.coupons.index')->with('success', 'Coupon updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Coupon $coupon)
    {
        // Delete the coupon from the database
        $coupon->delete();

        // Redirect back with a success message
        return redirect()->route('admin.coupons.index')->with('success', 'Coupon deleted successfully.');
    }
}
