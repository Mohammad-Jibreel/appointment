@extends('dashboard.layout')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Payment Details</h1>

    <p><strong>User:</strong> {{ $payment->user->name }}</p>
    <p><strong>Amount:</strong> {{ $payment->amount }}</p>
    <p><strong>Payment Method:</strong> {{ $payment->payment_method }}</p>
    <p><strong>Status:</strong> {{ $payment->status }}</p>

    <a href="{{ route('admin.payments.index') }}" class="btn btn-secondary">Back to List</a>
</div>
@endsection
