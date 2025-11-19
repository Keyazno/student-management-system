@extends('layout')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="fw-bold">Add New Student</h2>
    <a href="{{ route('students.index') }}" class="btn btn-secondary">← Back</a>
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

        <form action="{{ route('students.store') }}" method="POST">
            @csrf

            <div class="row mb-3">
                <div class="col-md-6">
                    <label class="form-label">First Name</label>
                    <input type="text" name="first_name" value="{{ old('first_name') }}"
                        class="form-control" placeholder="Enter first name" required>
                </div>

                <div class="col-md-6">
                    <label class="form-label">Last Name</label>
                    <input type="text" name="last_name" value="{{ old('last_name') }}"
                        class="form-control" placeholder="Enter last name" required>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">Address</label>
                <input type="text" name="address" value="{{ old('address') }}"
                    class="form-control" placeholder="Enter address" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Phone Number</label>
                <input type="number" name="phone_number" value="{{ old('phone_number') }}"
                    class="form-control" placeholder="Enter phone number" required>
            </div>

            <button type="submit" class="btn btn-primary px-4">Save Student</button>
        </form>

    </div>
</div>

@endsection
