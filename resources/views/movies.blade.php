@extends('layouts.app')

@section('content')
    <h1>Lista film</h1>
    @foreach ($movies as $movie)
        <p>{{ $movie->title }}</p>
    @endforeach
@endsection
