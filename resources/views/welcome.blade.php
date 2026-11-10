@extends('layout')

@section('title', 'Home Page')

@push('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
@endpush


@section('sidebar')
    @parent
    <p>This is appended to the main sidebar.</p>
@endsection

@section('content')

    <x-alert type="info">
        Welcome to the Admission System!
    </x-alert>

    <div class="bg-1 p-5 rounded-3 mb-5">
            <h1 class="text-4xl fw-bold mb-3">Welcome to Admission System</h1>
            <p class="mb-0">
                Each application is reviewed by the admissions office once all
                requirements are complete. You will be notified by email at every
                stage of the evaluation, so check the address you registered with.
            </p>
        </div>

        <p>
            <p>Today is {{ now()->format('F d, Y') }}</p>
            
        </p>
        
        <a href="{{ route('apply') }}" class="btn btn-lg btn-solid theme-primary mt-5">Apply Now</a>
        <h2 class="text-2xl mb-4">Apply online in three steps</h2>
        

        <div class="grid gap-4">
            <div class="g-col-12 md:g-col-4">
                <div class="card h-100">
                    <div class="card-body">
                    <i class="bi bi-person-plus text-2xl"></i>
                    <h4 class="mt-2">1. Apply</h4>
                    <p class="mb-0">Submit your application for admission.</p>
                </div>
            </div>
        </div>

        <div class="g-col-12 md:g-col-4">
            <div class="card h-100">
                <div class="card-body">
                    <i class="bi bi-cloud-upload text-2xl"></i>
                    <h4 class="mt-2">2. Upload</h4>
                    <p class="mb-0">Upload your admission requirements.</p>
                </div>
            </div>
        </div>

        <div class="g-col-12 md:g-col-4">
            <div class="card h-100">
                <div class="card-body">
                    <i class="bi bi-envelope-check text-2xl"></i>
                    <h4 class="mt-2">3. Get Notified</h4>
                    <p class="mb-0">Receive an email once evaluated.</p>
                </div>
            </div>
        </div>
    </div>




    <div class="table-responsive mt-5">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Code</th>
                    <th>Name</th>
                    <th>College</th>
                    <th>Slots</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($programs as $program)
                <tr>
                    <td>{{ $program['code'] }}</td>
                    <td>{{ $program['name'] }}</td>
                    <td>{{ $program['college'] }}</td>
                    <td>{{ $program['slots'] }}</td>
                    <td>
                        @if ($program['is_active'])
                            <span class="badge bg-success">Offered</span>
                        @else
                            <span class="badge bg-danger">Not Offered</span>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>   
@endsection