@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Customer Details</h1>
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <span>Customer Information</span>
            <img src="{{ $customer->profile_picture }}" alt="Profile Picture" class="img-thumbnail" style="width: 100px; height: 100px;">
        </div>
        <div class="card-body">
            <p><strong>Name:</strong> {{ $customer->name }}</p>
            <p><strong>Email:</strong> {{ $customer->email }}</p>
            <p><strong>Phone:</strong> {{ $customer->phone }}</p>
            <p><strong>Address:</strong> {{ $customer->address }}</p>
            <p><strong>Gender:</strong> {{ $customer->gender }}</p>
            <p><strong>Date of Birth:</strong> {{ $customer->date_of_birth }}</p>
            <p><strong>Software:</strong> {{ $customer->software }}</p>
            <p><strong>Website:</strong> <a href="{{ $customer->website }}">{{ $customer->website }}</a></p>
            <p><strong>Tax Number:</strong> {{ $customer->tax_number }}</p>
            <p><strong>Status:</strong> {{ $customer->status }}</p>
        </div>
    </div>
    <a href="{{ route('customers.index') }}" class="btn btn-primary mt-3">Back to Customers List</a>
</div>
@endsection