@extends('layouts.app')

@section('content')
    <div id="card_container" class="mt-3">
        @foreach ($movies as $index => $movie)
            <div class="w-25 p-2">
                <div class="rounded border">
                    <div class="w-100">
                        <img class="rounded-top" src="{{ $movie->img_path }}">
                    </div>
                    <div class="p-2">
                        <h3>{{ $movie->title }}</h3>
                        <p>{{ $movie->original_title }}</p>
                        <p>{{ $movie->nationality }}</p>
                        <p>{{ $movie->date }}</p>
                        <p>{{ $movie->vote }}</p>
                        <a href="{{ route('movieInfo', $index) }}">Leggi di più</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
