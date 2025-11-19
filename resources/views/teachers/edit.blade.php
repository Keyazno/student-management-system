@extends('layout')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="fw-bold">Edit Teacher</h2>
    <a href="{{ route('teachers.index') }}" class="btn btn-secondary">← Back</a>
</div>

<div class="card shadow-sm">
    <div class="card-body">

        <!-- Display Validation Errors -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> Please fix the following issues:
                <ul class="mb-0 mt-2">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('teachers.update', $teacher->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="row mb-3">
                <div class="col-md-6">
                    <label class="form-label">First Name</label>
                    <input type="text" name="first_name" value="{{ old('first_name', $teacher->first_name) }}"
                        class="form-control" required>
                </div>

                <div class="col-md-6">
                    <label class="form-label">Last Name</label>
                    <input type="text" name="last_name" value="{{ old('last_name', $teacher->last_name) }}"
                        class="form-control" required>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">Address</label>
                <input type="text" name="address" value="{{ old('address', $teacher->address) }}"
                    class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Phone Number</label>
                <input type="number" name="phone_number" value="{{ old('phone_number', $teacher->phone_number) }}"
                    class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary px-4">Update teacher</button>
        </form>

    </div>
</div>

@endsection
