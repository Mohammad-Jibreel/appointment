@extends('dashboard.layout')

@section('content')
    <div class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800">Service Details</h1>

        <!-- Service Details -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Service Information</h6>
            </div>
            <div class="card-body">
                <p><strong>Name:</strong> {{ $service->name }}</p>
                <p><strong>Description:</strong> {{ $service->description }}</p>
                <p><strong>Price:</strong> ${{ $service->price }}</p>
            </div>
        </div>

        <a href="{{ route('admin.services.index') }}" class="btn btn-secondary">Back to Services</a>
    </div>
@endsection
