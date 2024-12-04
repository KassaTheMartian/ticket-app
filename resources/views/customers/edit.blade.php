@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Customer</h2>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="{{ route('customers.update', $customer->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $customer->name }}" required>
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $customer->email }}" required>
        </div>

        <div class="form-group">
            <label for="phone">Phone:</label>
            <input type="text" class="form-control" id="phone" name="phone" value="{{ $customer->phone }}" required>
        </div>

        <div class="form-group">
            <label for="address">Address:</label>
            <input type="text" class="form-control" id="address" name="address" value="{{ $customer->address }}">
        </div>

        <div class="form-group">
            <label for="gender">Gender:</label>
            <select class="form-control" id="gender" name="gender">
                <option value="male" {{ $customer->gender == 'male' ? 'selected' : '' }}>Male</option>
                <option value="female" {{ $customer->gender == 'female' ? 'selected' : '' }}>Female</option>
                <option value="other" {{ $customer->gender == 'other' ? 'selected' : '' }}>Other</option>
            </select>
        </div>

        <div class="form-group">
            <label for="date_of_birth">Date of Birth:</label>
            <input type="date" class="form-control" id="date_of_birth" name="date_of_birth" value="{{ $customer->date_of_birth }}">
        </div>

        <div class="form-group">
            <label for="profile_picture">Profile Picture:</label>
            <input type="file" class="form-control" id="profile_picture" name="profile_picture">
        </div>

        <div class="form-group">
            <label for="software">Software:</label>
            <input type="text" class="form-control" id="software" name="software" value="{{ $customer->software }}">
        </div>

        <div class="form-group">
            <label for="website">Website:</label>
            <input type="url" class="form-control" id="website" name="website" value="{{ $customer->website }}">
        </div>

        <div class="form-group">
            <label for="tax_number">Tax Number:</label>
            <input type="text" class="form-control" id="tax_number" name="tax_number" value="{{ $customer->tax_number }}">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection