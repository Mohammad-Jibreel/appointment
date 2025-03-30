@extends('dashboard.layout')

@section('content')
    <div class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800">Create Notification</h1>

        <form action="{{ route('admin.notifications.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}" required>
            </div>

            <div class="form-group">
                <label for="message">Message</label>
                <textarea name="message" id="message" class="form-control" rows="4" required>{{ old('message') }}</textarea>
            </div>

            <div class="form-group">
                <label for="type">Type</label>
                <select name="type" id="type" class="form-control" required>
                    <option value="info" {{ old('type') == 'info' ? 'selected' : '' }}>Info</option>
                    <option value="warning" {{ old('type') == 'warning' ? 'selected' : '' }}>Warning</option>
                    <option value="error" {{ old('type') == 'error' ? 'selected' : '' }}>Error</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Create Notification</button>
        </form>
    </div>
@endsection
