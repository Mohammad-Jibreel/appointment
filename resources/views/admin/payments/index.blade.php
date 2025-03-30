@extends('dashboard.layout')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Payments List</h1>


    <table class="table table-bordered">
        <thead>
            <tr>
                <th>User</th>
                <th>Amount</th>
                <th>Payment Method</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($payments as $payment)
            <tr>
                <td>{{ $payment->user->name }}</td>
                <td>{{ $payment->amount }}</td>
                <td>{{ $payment->payment_method }}</td>
                <td>{{ $payment->status }}</td>
                <td>
                    <a href="{{ route('admin.payments.show', $payment->id) }}" class="btn btn-info btn-sm">View</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
