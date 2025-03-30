@extends('dashboard.layout')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Service Providers</h1>

    <!-- Display Success Message -->
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Add New Service Provider Button -->
    <a href="{{ route('admin.service-providers.create') }}" class="btn btn-primary mb-3">Add New Service Provider</a>

    <!-- Service Providers Table -->
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($serviceProviders as $serviceProvider)
                <tr>
                    <td>{{ $serviceProvider->name }}</td>
                    <td>{{ $serviceProvider->email }}</td>
                    <td>{{ $serviceProvider->phone }}</td>
                    <td>
                        <a href="{{ route('admin.service-providers.edit', $serviceProvider->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('admin.service-providers.destroy', $serviceProvider->id) }}" method="POST" style="display:inline;">
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
