@extends('layouts.main')

@section('content')
    <div class="container">
        <h1>{{ $movie->title }}</h1>
        <div class="card">
            <div class="card-header text-center fw-semibold">
                {{ $movie->title }}
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Original title: {{ $movie->original_title }}</li>
                <li class="list-group-item">Language: {{ $movie->nationality }}</li>
                <li class="list-group-item">Date: {{ $movie->date }}</li>
                <li class="list-group-item">Vote: {{ $movie->vote }}</li>
            </ul>
        </div>
    </div>
@endsection
