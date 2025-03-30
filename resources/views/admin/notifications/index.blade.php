@extends('dashboard.layout')

@section('content')
    <div class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800">Notifications</h1>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('admin.notifications.create') }}" class="btn btn-primary mb-3">Create Notification</a>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Message</th>
                    <th>Type</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($notifications as $notification)
                    <tr>
                        <td>{{ $notification->id }}</td>
                        <td>{{ $notification->title }}</td>
                        <td>{{ Str::limit($notification->message, 50) }}</td>
                        <td>{{ $notification->type }}</td>
                        <td>
                            <a href="{{ route('admin.notifications.show', $notification->id) }}" class="btn btn-info btn-sm">View</a>
                            <a href="{{ route('admin.notifications.edit', $notification->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('admin.notifications.destroy', $notification->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
