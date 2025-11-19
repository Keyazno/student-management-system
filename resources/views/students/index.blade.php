@extends('layout')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="fw-bold">Students Application</h2>
    <a href="{{ route('students.create') }}" class="btn btn-primary">+ Add Student</a>
</div>

<div class="card shadow-sm">
    <div class="card-body">
        <table class="table table-bordered table-hover align-middle">
            <thead class="table-light">
                <tr>
                    <th>#</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Address</th>
                    <th>Phone Number</th>
                    <th width="180px">Actions</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($students as $student)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $student->first_name }}</td>
                    <td>{{ $student->last_name }}</td>
                    <td>{{ $student->address }}</td>
                    <td>{{ $student->phone_number }}</td>

                    <td>
                        <a href="{{ route('students.show', $student->id) }}" class="btn btn-sm btn-info">View</a>
                        <a href="{{ route('students.edit', $student->id) }}" class="btn btn-sm btn-warning">Edit</a>

                        <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')

                            <button onclick="return confirm('Are you sure you want to delete this student?')" 
                                class="btn btn-sm btn-danger">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>

                @empty
                <tr>
                    <td colspan="6" class="text-center text-muted">No students found.</td>
                </tr>
                @endforelse
            </tbody>
        </table>

        {{-- Pagination if using paginate() --}}
        @if(method_exists($students, 'links'))
            <div class="mt-3">
                {{ $students->links() }}
            </div>
        @endif

    </div>
</div>

@endsection
