@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Customer Details</h1>
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <span>Customer Information</span>
            <img src="{{ $user->profile_picture }}" alt="Profile Picture" class="img-thumbnail" style="width: 100px; height: 100px;">
        </div>
        <div class="card-body">
            <p><strong>Name:</strong> {{ $user->name }}</p>
            <p><strong>Email:</strong> {{ $user->email }}</p>
            <p><strong>Phone:</strong> {{ $user->phone }}</p>
            <p><strong>Address:</strong> {{ $user->address }}</p>
            <p><strong>Gender:</strong> {{ $user->gender }}</p>
            <p><strong>Date of Birth:</strong> {{ $user->date_of_birth }}</p>
            <p><strong>Status:</strong> {{ $user->status }}</p>
        </div>
    </div>
    <a href="{{ route('users.index') }}" class="btn btn-primary mt-3">Back to Users List</a>
</div>
@endsection