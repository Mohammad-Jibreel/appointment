@extends('dashboard.layout')

@section('content')
    <div class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800">Appointment Details</h1>

        <!-- Appointment Details -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Appointment Information</h6>
            </div>
            <div class="card-body">
                <p><strong>User:</strong> {{ $appointment->user->name }}</p>
                <p><strong>Service Provider:</strong> {{ $appointment->serviceProvider->name }}</p>
                <p><strong>Appointment Date:</strong> {{ $appointment->appointment_date }}</p>
                <p><strong>Status:</strong> {{ ucfirst($appointment->status) }}</p>
            </div>
        </div>

        <a href="{{ route('admin.appointments.index') }}" class="btn btn-secondary">Back to Appointments</a>
    </div>
@endsection
