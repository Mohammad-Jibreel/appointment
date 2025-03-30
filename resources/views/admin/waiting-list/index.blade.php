@extends('dashboard.layout')

@section('content')
    <div class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800">Waiting List</h1>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('admin.waiting-list.create') }}" class="btn btn-primary mb-3">Add to Waiting List</a>

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
                @foreach($waitingLists as $waitingList)
                    <tr>
                        <td>{{ $waitingList->name }}</td>
                        <td>{{ $waitingList->email }}</td>
                        <td>{{ $waitingList->phone }}</td>
                        <td>
                            <a href="{{ route('admin.waiting-list.show', $waitingList->id) }}" class="btn btn-info btn-sm">View</a>
                            <a href="{{ route('admin.waiting-list.edit', $waitingList->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('admin.waiting-list.destroy', $waitingList->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this entry?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
