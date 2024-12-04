@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Ticket Types</h1>
    <table class="table table-bordered">
        <div class="text-right mb-3">
            <a href="{{ route('articles.create') }}" class="btn btn-success">Add Ticket Type</a>
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
            @foreach($articles as $article)
            <tr>
                <td>{{ $article->id }}</td>
                <td>{{ $article->title }}</td>
                <td>{{ $article->content }}</td>
                <td>
                    <a href="{{ route('articles.show', $article->id) }}" class="btn btn-info">View</a>
                    <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('articles.destroy', $article->id) }}" method="POST" style="display:inline;">
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