<!-- resources/views/admin/reviews/show.blade.php -->

@extends('dashboard.layout')

@section('content')
    <div class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800">Review Details</h1>

        <div class="card">
            <div class="card-body">
                <p><strong>User:</strong> {{ $review->user->name }}</p>
                <p><strong>Service:</strong> {{ $review->service->name }}</p>
                <p><strong>Rating:</strong> {{ $review->rating }}</p>
                <p><strong>Comment:</strong> {{ $review->comment }}</p>
            </div>
        </div>

        <a href="{{ route('admin.reviews.index') }}" class="btn btn-secondary mt-3">Back to Reviews</a>
    </div>
@endsection
