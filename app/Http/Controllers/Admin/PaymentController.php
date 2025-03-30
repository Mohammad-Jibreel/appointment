<?php

namespace App\Http\Controllers\Admin;

use App\Models\Payment;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Retrieve all payments from the database
        $payments = Payment::all();

        // Return the view and pass the payments data
        return view('admin.payments.index', compact('payments'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Payment $payment)
    {
        // Return the show view and pass the specific payment record
        return view('admin.payments.show', compact('payment'));
    }
}
