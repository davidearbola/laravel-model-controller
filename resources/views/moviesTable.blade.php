@extends('layouts.app')

@section('content')
    <div class="p-3">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Original Title</th>
                    <th scope="col">Nationality</th>
                    <th scope="col">Date</th>
                    <th scope="col">Vote</th>
                    <th scope="col">Link</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($movies as $index => $movie)
                    <tr>
                        <th scope="row">{{ $index + 1 }}</th>
                        <td>{{ $movie->title }}</td>
                        <td>{{ $movie->original_title }}</td>
                        <td>{{ $movie->nationality }}</td>
                        <td>{{ $movie->date }}</td>
                        <td>{{ $movie->vote }}</td>
                        <td><a href="{{ route('movieInfo', $index) }}">Leggi di più</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
