@extends('layouts.main')

@section('content')
    <h1 class="text-center">{{ $title }}</h1>
    <div class="container">
        <div class="row row-cols-4">
            @foreach ($movies as $movie)
                <div class="col my-3">
                    <div class="card custom_card">
                        <a href="{{ route('movie-details', ['id' => $movie->id]) }}"><img src="{{ $movie->img }}"
                                class="card-img-top" alt="{{ $movie->title }}"></a>
                        <div class="card-body card-body-custom">
                            <h5 class="card-title text-center">{{ $movie->title }}</h5>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Original title: {{ $movie->original_title }}</li>
                            <li class="list-group-item">Language: {{ $movie->nationality }}</li>
                            <li class="list-group-item">Date: {{ $movie->date }}</li>
                            <li class="list-group-item">Vote: {{ $movie->vote }}</li>
                        </ul>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
@endsection
