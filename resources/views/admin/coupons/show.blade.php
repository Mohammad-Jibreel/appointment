@extends('dashboard.layout')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Coupon Details</h1>

    <table class="table table-bordered">
        <tr>
            <th>Coupon Code</th>
            <td>{{ $coupon->code }}</td>
        </tr>
        <tr>
            <th>Discount</th>
            <td>{{ $coupon->discount }}%</td>
        </tr>
        <tr>
            <th>Status</th>
            <td>{{ $coupon->status }}</td>
        </tr>
    </table>

    <a href="{{ route('admin.coupons.index') }}" class="btn btn-secondary">Back to List</a>
</div>
@endsection
