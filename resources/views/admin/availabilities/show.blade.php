@extends('dashboard.layout')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Availability Details</h1>

    <p><strong>Day:</strong> {{ $availability->day }}</p>
    <p><strong>Start Time:</strong> {{ $availability->start_time }}</p>
    <p><strong>End Time:</strong> {{ $availability->end_time }}</p>

    <a href="{{ route('admin.availabilities.index') }}" class="btn btn-secondary">Back to List</a>
</div>
@endsection
