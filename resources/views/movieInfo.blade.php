@extends('layouts.app')

@section('content')
    <div class="row justify-content-center pt-3">
        <div class="col-6 p-3 border rounded">
            <h3>{{ $movie->title }}</h3>
            <p>{{ $movie->original_title }}</p>
            <p>{{ $movie->nationality }}</p>
            <p>{{ $movie->date }}</p>
            <p>{{ $movie->vote }}</p>
        </div>
    </div>
@endsection
