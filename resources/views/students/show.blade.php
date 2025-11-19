@extends('layout')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="fw-bold">Student Details</h2>

    <div>
        <a href="{{ route('students.index') }}" class="btn btn-secondary me-2">← Back</a>
        <a href="{{ route('students.edit', $student->id) }}" class="btn btn-primary">Edit</a>
    </div>
</div>

<div class="card shadow-sm">
    <div class="card-body">

        <div class="mb-3">
            <h5 class="text-muted">First Name</h5>
            <p class="fs-5">{{ $student->first_name }}</p>
        </div>

        <div class="mb-3">
            <h5 class="text-muted">Last Name</h5>
            <p class="fs-5">{{ $student->last_name }}</p>
        </div>

        <div class="mb-3">
            <h5 class="text-muted">Address</h5>
            <p class="fs-5">{{ $student->address }}</p>
        </div>

        <div class="mb-3">
            <h5 class="text-muted">Phone Number</h5>
            <p class="fs-5">{{ $student->phone_number }}</p>
        </div>

        <div class="text-muted mt-4">
            <small>Created on: {{ $student->created_at->format('d M Y, H:i') }}</small><br>
            <small>Last updated: {{ $student->updated_at->format('d M Y, H:i') }}</small>
        </div>

    </div>
</div>

@endsection
