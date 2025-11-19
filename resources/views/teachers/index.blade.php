@extends('layout')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="fw-bold">Teachers Application</h2>
    <a href="{{ route('teachers.create') }}" class="btn btn-primary">+ Add teacher</a>
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
                @forelse ($teachers as $teacher)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $teacher->first_name }}</td>
                    <td>{{ $teacher->last_name }}</td>
                    <td>{{ $teacher->address }}</td>
                    <td>{{ $teacher->phone_number }}</td>

                    <td>
                        <a href="{{ route('teachers.show', $teacher->id) }}" class="btn btn-sm btn-info">View</a>
                        <a href="{{ route('teachers.edit', $teacher->id) }}" class="btn btn-sm btn-warning">Edit</a>

                        <form action="{{ route('teachers.destroy', $teacher->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')

                            <button onclick="return confirm('Are you sure you want to delete this teacher?')" 
                                class="btn btn-sm btn-danger">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>

                @empty
                <tr>
                    <td colspan="6" class="text-center text-muted">No teachers found.</td>
                </tr>
                @endforelse
            </tbody>
        </table>

        {{-- Pagination if using paginate() --}}
        @if(method_exists($teachers, 'links'))
            <div class="mt-3">
                {{ $teachers->links() }}
            </div>
        @endif

    </div>
</div>

@endsection
