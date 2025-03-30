@extends('dashboard.layout')

@section('content')
    <div class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800">Edit Appointment</h1>

        <!-- Edit Appointment Form -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Appointment Details</h6>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.appointments.update', $appointment->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="user_id">User</label>
                        <select class="form-control" id="user_id" name="user_id" required>
                            <option value="">Select User</option>
                            @foreach($users as $user)
                                <option value="{{ $user->id }}" @if($user->id == $appointment->user_id) selected @endif>{{ $user->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="service_provider_id">Service Provider</label>
                        <select class="form-control" id="service_provider_id" name="service_provider_id" required>
                            <option value="">Select Service Provider</option>
                            @foreach($serviceProviders as $serviceProvider)
                                <option value="{{ $serviceProvider->id }}" @if($serviceProvider->id == $appointment->service_provider_id) selected @endif>{{ $serviceProvider->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="appointment_date">Appointment Date</label>
                        <input type="datetime-local" class="form-control" id="appointment_date" name="appointment_date" value="{{ \Carbon\Carbon::parse($appointment->appointment_date)->format('Y-m-d\TH:i') }}" required>
                    </div>

                    <div class="form-group">
                        <label for="status">Status</label>
                        <select class="form-control" id="status" name="status" required>
                            <option value="pending" @if($appointment->status == 'pending') selected @endif>Pending</option>
                            <option value="confirmed" @if($appointment->status == 'confirmed') selected @endif>Confirmed</option>
                            <option value="completed" @if($appointment->status == 'completed') selected @endif>Completed</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Update Appointment</button>
                </form>
            </div>
        </div>
    </div>
@endsection
