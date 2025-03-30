@extends('dashboard.layout')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Availability List</h1>

    <a href="{{ route('admin.availabilities.create') }}" class="btn btn-primary mb-3">Add Availability</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Day</th>
                <th>Start Time</th>
                <th>End Time</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($availabilities as $availability)
            <tr>
                <td>{{ $availability->day }}</td>
                <td>{{ $availability->start_time }}</td>
                <td>{{ $availability->end_time }}</td>
                <td>
                    <a href="{{ route('admin.availabilities.edit', $availability->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('admin.availabilities.destroy', $availability->id) }}" method="POST" style="display:inline;">
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
