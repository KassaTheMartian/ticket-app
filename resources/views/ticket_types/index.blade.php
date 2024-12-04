@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Ticket Types</h1>
    <table class="table table-bordered">
        <div class="text-right mb-3">
            <a href="{{ route('ticket_types.create') }}" class="btn btn-success">Add Ticket Type</a>
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
            @foreach($ticketTypes as $ticketType)
            <tr>
                <td>{{ $ticketType->id }}</td>
                <td>{{ $ticketType->name }}</td>
                <td>{{ $ticketType->description }}</td>
                <td>
                    <a href="{{ route('ticket_types.show', $ticketType->id) }}" class="btn btn-info">View</a>
                    <a href="{{ route('ticket_types.edit', $ticketType->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('ticket_types.destroy', $ticketType->id) }}" method="POST" style="display:inline;">
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
        const deleteForms = document.querySelectorAll('form[action*="ticket_types"][method="POST"]');
        deleteForms.forEach(form => {
            form.addEventListener('submit', function (event) {
                event.preventDefault();
                if (confirm('Are you sure you want to delete this ticket type?')) {
                    form.submit();
                }
            });
        });
    });
</script>