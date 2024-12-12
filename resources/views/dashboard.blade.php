@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="row">
    <div class="col-md-6">
        <div class="card bg-danger text-white mb-4">
            <div class="card-body">
                <h5 class="card-title">Lecturers</h5>
                <p class="card-text">Manage lecturer data efficiently.</p>
                <a href="{{ route('lecturers.index') }}" class="btn btn-light">View Lecturers</a>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card bg-secondary text-white mb-4">
            <div class="card-body">
                <h5 class="card-title">Students</h5>
                <p class="card-text">Manage student data with ease.</p>
                <a href="{{ route('students.index') }}" class="btn btn-light">View Students</a>
            </div>
        </div>
    </div>
</div>
@endsection
