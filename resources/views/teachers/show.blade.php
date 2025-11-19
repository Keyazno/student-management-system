@extends('layout')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="fw-bold">Teacher Details</h2>

    <div>
        <a href="{{ route('teachers.index') }}" class="btn btn-secondary me-2">← Back</a>
        <a href="{{ route('teachers.edit', $teacher->id) }}" class="btn btn-primary">Edit</a>
    </div>
</div>

<div class="card shadow-sm">
    <div class="card-body">

        <div class="mb-3">
            <h5 class="text-muted">First Name</h5>
            <p class="fs-5">{{ $teacher->first_name }}</p>
        </div>

        <div class="mb-3">
            <h5 class="text-muted">Last Name</h5>
            <p class="fs-5">{{ $teacher->last_name }}</p>
        </div>

        <div class="mb-3">
            <h5 class="text-muted">Address</h5>
            <p class="fs-5">{{ $teacher->address }}</p>
        </div>

        <div class="mb-3">
            <h5 class="text-muted">Phone Number</h5>
            <p class="fs-5">{{ $teacher->phone_number }}</p>
        </div>

        <div class="text-muted mt-4">
            <small>Created on: {{ $teacher->created_at->format('d M Y, H:i') }}</small><br>
            <small>Last updated: {{ $teacher->updated_at->format('d M Y, H:i') }}</small>
        </div>

    </div>
</div>

@endsection
