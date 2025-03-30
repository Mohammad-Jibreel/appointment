@extends('dashboard.layout')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Coupons List</h1>

    <a href="{{ route('admin.coupons.create') }}" class="btn btn-primary mb-3">Add Coupon</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Coupon Code</th>
                <th>Discount</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($coupons as $coupon)
                <tr>
                    <td>{{ $coupon->code }}</td>
                    <td>{{ $coupon->discount }}%</td>
                    <td>{{ $coupon->status }}</td>
                    <td>
                        <a href="{{ route('admin.coupons.show', $coupon->id) }}" class="btn btn-info">View</a>
                        <a href="{{ route('admin.coupons.edit', $coupon->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('admin.coupons.destroy', $coupon->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
