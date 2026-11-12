@extends('layout')

@section('title', 'Programs list')

@section('content')

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="mb-0">Programs</h1>
        <br>
        <a href="{{ route('admin.programs.create') }}" class="btn btn-solid theme-primary">Add Program</a>
    </div>

    <table class='table table-striped align-middle'>
        <thead>
            <th>Code</th>
            <th>Program Name</th>
            <th>College</th>
            <th>Slots</th>
            <th>Status</th>
            <th>Actions</th>
        </thead>
        <tbody>
            @forelse ($programs as $program)
                <tr>
                    <td>{{ $program->code }}</td>
                    <td>{{ $program->name }}</td>
                    <td>{{ $program->college }}</td>
                    <td>{{ $program->slot }}</td>
                    <td>
                        @if ($program->is_active)
                            <span class="badge bg-success">Active</span>
                        @else
                            <span class="badge bg-danger">Inactive</span>
                        @endif
                    </td>
                    <td>

                        <a href="{{ route('admin.programs.edit', $program) }}" class="btn btn-sm btn-outline theme-secondary">Edit</a>
                        
                        <a href="{{ route('admin.programs.show', $program) }}" class="btn btn-sm btn-outline theme-primary">View</a>
                        
                        <form action="{{ route('admin.programs.destroy', $program) }}" method="post" class="d-inline" onclick="return confirm('Are you sure you want to delete {{ $program->name }}?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-outline theme-danger" >Delete</button>
                        </form>

                    </td>
                </tr>

            @empty
                <tr>
                    <td colspan="6" class="text-center py-4">
                        No programs yet.
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>


@endsection