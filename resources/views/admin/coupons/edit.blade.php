@extends('dashboard.layout')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Edit Coupon</h1>

    <form action="{{ route('admin.coupons.update', $coupon->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="code">Coupon Code</label>
            <input type="text" name="code" class="form-control" id="code" value="{{ old('code', $coupon->code) }}" required>
        </div>
        <div class="form-group">
            <label for="discount">Discount (%)</label>
            <input type="number" name="discount" class="form-control" id="discount" value="{{ old('discount', $coupon->discount) }}" min="1" max="100" required>
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <select name="status" class="form-control" id="status" required>
                <option value="active" {{ old('status', $coupon->status) == 'active' ? 'selected' : '' }}>Active</option>
                <option value="inactive" {{ old('status', $coupon->status) == 'inactive' ? 'selected' : '' }}>Inactive</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
