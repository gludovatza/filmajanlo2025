@extends('layout')

@section('content')
<h1>Intro</h1>
introduction text


<h1>Movies' categories</h1>
@foreach ($categories as $category)
    <a href="{{ route('movies.category', $category) }}">{{ $category }}</a>
@endforeach

<h1>Movie List</h1>

Movies:
<ul>
    @foreach ($movies as $id => $movie)
        <li><a href="{{ route('movies.show', $id) }}">{{ $movie["title"] }} ({{ $movie["year"] }})</a></li>
    @endforeach
</ul>
@endsection
