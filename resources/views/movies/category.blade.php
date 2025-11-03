@extends('layout')

@section('content')

<h1>Filtered Movie List (Category: {{ $slug }})</h1>

Filtered Movies:
<ul>
    @foreach ($filteredMovies as $movie)
        <li>{{ $movie["title"] }} ({{ $movie["year"] }})</li>
    @endforeach
</ul>
@endsection
