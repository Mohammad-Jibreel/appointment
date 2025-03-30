@extends('dashboard.layout')

@section('content')
    <div class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800">Waiting List Entry Details</h1>

        <div class="card">
            <div class="card-body">
                <p><strong>Name:</strong> {{ $waitingList->name }}</p>
                <p><strong>Email:</strong> {{ $waitingList->email }}</p>
                <p><strong>Phone:</strong> {{ $waitingList->phone }}</p>
            </div>
        </div>

        <a href="{{ route('admin.waiting-list.index') }}" class="btn btn-secondary mt-3">Back to Waiting List</a>
    </div>
@endsection
