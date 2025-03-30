@extends('dashboard.layout')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Edit Availability</h1>

    <form action="{{ route('admin.availabilities.update', $availability->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="day">Day</label>
            <input type="text" class="form-control" id="day" name="day" value="{{ old('day', $availability->day) }}" required>
        </div>

        <div class="form-group">
            <label for="start_time">Start Time</label>
            <input type="time" class="form-control" id="start_time" name="start_time" value="{{ old('start_time', $availability->start_time) }}" required>
        </div>

        <div class="form-group">
            <label for="end_time">End Time</label>
            <input type="time" class="form-control" id="end_time" name="end_time" value="{{ old('end_time', $availability->end_time) }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update Availability</button>
    </form>
</div>
@endsection
