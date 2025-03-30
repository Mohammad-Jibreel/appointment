@extends('dashboard.layout')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">User Details</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Name: {{ $user->name }}</h5>
            <p class="card-text">Email: {{ $user->email }}</p>
            <p class="card-text">Created At: {{ $user->created_at }}</p>
        </div>
    </div>

    <a href="{{ route('admin.users.index') }}" class="btn btn-secondary mt-3">Back to List</a>
</div>
@endsection
