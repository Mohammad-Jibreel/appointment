@extends('dashboard.layout')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Service Provider Details</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Name: {{ $serviceProvider->name }}</h5>
            <p class="card-text">Email: {{ $serviceProvider->email }}</p>
            <p class="card-text">Phone: {{ $serviceProvider->phone }}</p>
            <p class="card-text">Address: {{ $serviceProvider->address }}</p>
        </div>
    </div>

    <a href="{{ route('admin.serviceProviders.index') }}" class="btn btn-secondary mt-3">Back to List</a>
</div>
@endsection
