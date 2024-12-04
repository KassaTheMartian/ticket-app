@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Article Details</h1>
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <span>Article Information</span>
        </div>
        <div class="card-body">
            <p><strong>Name:</strong> {{ $article->title }}</p>
            <p><strong>Description:</strong> {{ $article->content }}</p>
            <p><strong>Status:</strong> {{ $article->status }}</p>
        </div>
    </div>
    <a href="{{ route('articles.index') }}" class="btn btn-primary mt-3">Back to Article List</a>
</div>
@endsection
