@extends('dashboard.layout')

@section('content')
    <div class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800">Notification Details</h1>

        <div class="card">
            <div class="card-header">
                <h5>{{ $notification->title }}</h5>
            </div>
            <div class="card-body">
                <p><strong>Message:</strong> {{ $notification->message }}</p>
                <p><strong>Type:</strong> {{ ucfirst($notification->type) }}</p>
                <p><strong>Created At:</strong> {{ $notification->created_at->format('d M Y H:i') }}</p>
            </div>
        </div>

        <a href="{{ route('notifications.index') }}" class="btn btn-secondary mt-3">Back to Notifications List</a>
    </div>
@endsection
