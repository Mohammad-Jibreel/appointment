@extends('dashboard.layout')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Create Coupon</h1>

    <form action="{{ route('admin.coupons.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="code">Coupon Code</label>
            <input type="text" name="code" class="form-control" id="code" value="{{ old('code') }}" required>
        </div>
        <div class="form-group">
            <label for="discount">Discount (%)</label>
            <input type="number" name="discount" class="form-control" id="discount" value="{{ old('discount') }}" min="1" max="100" required>
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <select name="status" class="form-control" id="status" required>
                <option value="active" {{ old('status') == 'active' ? 'selected' : '' }}>Active</option>
                <option value="inactive" {{ old('status') == 'inactive' ? 'selected' : '' }}>Inactive</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
@endsection
