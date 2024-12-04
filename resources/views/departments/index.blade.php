@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Departments</h1>
    <table class="table table-bordered">
        <div class="text-right mb-3">
            <a href="{{ route('departments.create') }}" class="btn btn-success">Add Department</a>
        </div>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($departments as $department)
            <tr>
                <td>{{ $department->id }}</td>
                <td>{{ $department->name }}</td>
                <td>{{ $department->description }}</td>
                <td>
                    <a href="{{ route('departments.show', $department->id) }}" class="btn btn-info">View</a>
                    <a href="{{ route('departments.edit', $department->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('departments.destroy', $department->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const deleteForms = document.querySelectorAll('form[action*="departments"][method="POST"]');
        deleteForms.forEach(form => {
            form.addEventListener('submit', function (event) {
                event.preventDefault();
                if (confirm('Are you sure you want to delete this department?')) {
                    form.submit();
                }
            });
        });
    });
</script>