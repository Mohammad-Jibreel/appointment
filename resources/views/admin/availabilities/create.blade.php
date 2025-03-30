@extends('dashboard.layout')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Create Availability</h1>

    <form action="{{ route('admin.availabilities.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="day">Day</label>
            <input type="text" class="form-control" id="day" name="day" value="{{ old('day') }}" required>
        </div>

        <div class="form-group">
            <label for="start_time">Start Time</label>
            <input type="time" class="form-control" id="start_time" name="start_time" value="{{ old('start_time') }}" required>
        </div>

        <div class="form-group">
            <label for="end_time">End Time</label>
            <input type="time" class="form-control" id="end_time" name="end_time" value="{{ old('end_time') }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Save Availability</button>
    </form>
</div>
@endsection
