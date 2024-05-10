@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="d-flex">
            <div class="img-box">
                <img src="{{ $movie->img }}" alt="{{ $movie->title }}">
            </div>
            <div class="ps-5">
                <h1>{{ $movie->title }}</h1>
                <ul class="fs-3 list-unstyled">
                    <li><span class="fw-semibold">Original title: </span>{{ $movie->original_title }}</li>
                    <li><span class="fw-semibold">Language: </span>{{ $movie->nationality }}</li>
                    <li><span class="fw-semibold">Date: </span>{{ $movie->date }}</li>
                    <li><span class="fw-semibold">Vote: </span>{{ $movie->vote }}</li>
                </ul>

            </div>

        </div>
    </div>
@endsection
