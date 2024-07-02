@extends('layouts.app')

@section('content')
    <div class="row justify-content-around pt-3">
        @foreach ($movies as $index => $movie)
            <div class="col-5 p-3 mb-3 border rounded">
                <h3>{{ $movie->title }}</h3>
                <p>{{ $movie->original_title }}</p>
                <p>{{ $movie->nationality }}</p>
                <p>{{ $movie->date }}</p>
                <p>{{ $movie->vote }}</p>
                <a href="{{ route('movieInfo', $index) }}">Leggi di più</a>
            </div>
        @endforeach
    </div>
@endsection
