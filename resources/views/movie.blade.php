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
                    <li><i class="fa-solid fa-ticket"></i><span class="fw-semibold ps-2">Original title:
                        </span>{{ $movie->original_title }}</li>
                    <li><i class="fa-solid fa-language"></i><span class="fw-semibold ps-2">Language:
                        </span>{{ $movie->nationality }}</li>
                    <li><i class="fa-regular fa-calendar"></i><span class="fw-semibold ps-2">Date:
                        </span>{{ $movie->date }}</li>
                    <li><i class="fa-solid fa-star"></i><span class="fw-semibold ps-2">Vote: </span>{{ $movie->vote }}</li>
                </ul>

            </div>

        </div>
    </div>
@endsection
