@extends('layout')

@section('title', 'Add Program')

@section('content')

    <h1 class="mb-4">Add Program</h1>

    <form action="{{ route('admin.programs.store') }}" method="post">
        
        @csrf
        
        <div class="mb-3">
            <label for="" class="form-label">Code</label>
            <input type="text"  name="code" id="code" class="form-control" value="{{ old('code') }}">
            
            @error('code')
                <small class="fg-danger">{{ $message }}</small>
            @enderror
        </div>

    
        <div class="mb-3">
            <label for="" class="form-label">Program Name</label>
            <input type="text" name="name" id="name"  class="form-control" value="{{ old('name') }}">
            
            @error('name')
                <small class="fg-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label for="" class="form-label">College</label>
            <input type="text" name="college" id="college"  class="form-control" value="{{ old('college') }}">
            
            @error('college')
                <small class="fg-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Slots</label>
            <input type="number" name="slot" id="slot"  class="form-control" value="{{ old('slot') }}">
            
            @error('slot')
                <small class="fg-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-4">
            <input type="hidden" name="is_active" value="0">
            <input type="checkbox" name="is_active" id="is_active" value="1" @checked(old('is_active')) checked>
            <label for="is_active" class="form-label">Active (accepting applicants)</label>
        </div>

        <button type="submit" class="btn btn-solid theme-primary">Save Program</button>
        <a href="{{ route('admin.programs.index') }}" class="btn btn-outline theme-secondary">Cancel</a>
    
    </form>
    
@endsection