@extends('dashboard.layout')

@section('content')
    <div class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800">Edit Notification</h1>

        <form action="{{ route('admin.notifications.update', $notification->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $notification->title) }}" required>
            </div>

            <div class="form-group">
                <label for="message">Message</label>
                <textarea name="message" id="message" class="form-control" rows="4" required>{{ old('message', $notification->message) }}</textarea>
            </div>

            <div class="form-group">
                <label for="type">Type</label>
                <select name="type" id="type" class="form-control" required>
                    <option value="info" {{ old('type', $notification->type) == 'info' ? 'selected' : '' }}>Info</option>
                    <option value="warning" {{ old('type', $notification->type) == 'warning' ? 'selected' : '' }}>Warning</option>
                    <option value="error" {{ old('type', $notification->type) == 'error' ? 'selected' : '' }}>Error</option>
                </select>
            </div>

            <button type="submit" class="
