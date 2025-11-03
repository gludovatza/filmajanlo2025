@extends('layout')

@section('content')

<h1>Movies' categories</h1>
@foreach ($categories as $category)
    <a href="">{{ $category }}</a>
@endforeach

<h1>Movie List</h1>

Movies:
<ul>
    @foreach ($movies as $movie)
        <li>{{ $movie["title"] }} ({{ $movie["year"] }})</li>
    @endforeach
</ul>
@endsection
