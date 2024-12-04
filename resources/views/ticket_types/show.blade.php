@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Department Details</h1>
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <span>Department Information</span>
        </div>
        <div class="card-body">
            <p><strong>Name:</strong> {{ $department->name }}</p>
            <p><strong>Description:</strong> {{ $department->description }}</p>
            <p><strong>Status:</strong> {{ $department->status }}</p>
        </div>
    </div>
    <a href="{{ route('departments.index') }}" class="btn btn-primary mt-3">Back to Departments List</a>
</div>
@endsection
