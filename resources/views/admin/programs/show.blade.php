@extends('layout')

@section('title', $program->code)

@section('content')
    <h2 class="mb-4">
        {{ $program->code }} &mdash; {{  $program->name}}

    </h2>   
    
    <table class="table">
        <tr>
            <th>Code</th>
            <td>{{ $program->code }}</td>
        </tr>
        <tr>
            <th>Name</th>
            <td>{{ $program->name }}</td>
        </tr>
        <tr>
            <th>College</th>
            <td>{{ $program->college }}</td>
        </tr>
        <tr>
            <th>Status</th>
            <td>
                @if ($program->is_active)
                    <span class="badge bg-success">Active</span>
                @else
                    <span class="badge bg-danger">Inactive</span>
                @endif
            </td>
        </tr>
        <tr>
            <th>Date Created</th>
            <td>{{ $program->created_at->format('Y-m-d H:i:s') }}</td>
        </tr>

    </table>

    <a href="{{ route('admin.programs.edit', $program) }}" class="btn btn-sm btn-outline theme-primary">Edit</a>
    <a href="{{ route('admin.programs.index') }}" class="btn btn-sm btn-outline theme-secondary">Return to list</a>


    @endsection