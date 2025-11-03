@extends('layout')

@section('content')
<div>
    <a href="{{ route('movies.show', $previousId) }}"><< prev</a>
    <a href="{{ route('movies.show', $nextId) }}">next >></a>
</div>
<h1>Movie Details</h1>
<p>Title: {{ $movie['title'] }}</p>
<p>Year: {{ $movie['year'] }}</p>
<p>Category: {{ $movie['category'] }}</p>
<div><img src="{{ $movie['poster'] }}" alt=""></div>

<h2>Related movies:</h2>
<ul>
    @foreach ($sameCategoryMovies as $id => $movie)
        <li><a href="{{ route('movies.show', $id) }}">{{ $movie["title"] }} ({{ $movie["year"] }})</a></li>
    @endforeach
</ul>
@endsection
