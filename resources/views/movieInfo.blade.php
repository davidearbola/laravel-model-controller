@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-center pt-3">
        <div class="w-50 border rounded">
            <div>
                <img class="rounded-top" src="{{ $movie->img_path }}">
            </div>
            <div class="p-2">
                <h3>{{ $movie->title }}</h3>
                <p>{{ $movie->original_title }}</p>
                <p>{{ $movie->nationality }}</p>
                <p>{{ $movie->date }}</p>
                <p>{{ $movie->vote }}</p>
            </div>
        </div>
    </div>
@endsection
