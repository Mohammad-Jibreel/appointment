@extends('dashboard.layout')

@section('content')
    <div class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800">Create Appointment</h1>

        <!-- Create Appointment Form -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Appointment Details</h6>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.appointments.store') }}" method="POST">
                    @csrf

                    <div class="form-group">
                        <label for="user_id">User</label>
                        <select class="form-control" id="user_id" name="user_id" required>
                            <option value="">Select User</option>
                            @foreach($users as $user)
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="service_provider_id">Service Provider</label>
                        <select class="form-control" id="service_provider_id" name="service_provider_id" required>
                            <option value="">Select Service Provider</option>
                            @foreach($serviceProviders as $serviceProvider)
                                <option value="{{ $serviceProvider->id }}">{{ $serviceProvider->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="appointment_date">Appointment Date</label>
                        <input type="datetime-local" class="form-control" id="appointment_date" name="appointment_date" required>
                    </div>

                    <div class="form-group">
                        <label for="status">Status</label>
                        <select class="form-control" id="status" name="status" required>
                            <option value="pending">Pending</option>
                            <option value="confirmed">Confirmed</option>
                            <option value="completed">Completed</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Create Appointment</button>
                </form>
            </div>
        </div>
    </div>
@endsection
