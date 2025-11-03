@extends('layout')

@section('content')
    <div class="container">
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="{{ route('movies.show', $previousId) }}">Previous</a></li>
                <li class="page-item"><a class="page-link" href="{{ route('movies.show', $nextId) }}">Next</a></li>
            </ul>
        </nav>

        <h1>Movie Details</h1>
        <p>Title: {{ $movie['title'] }}</p>
        <p>Year: {{ $movie['year'] }}</p>
        <p><span class="badge text-bg-warning">{{ $movie['category'] }}</span></p>
        <div class="text-center">
            <img src="{{ $movie['poster'] }}" class="rounded" alt="{{ $movie['title'] }}">
        </div>
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="{{ route('movies.show', $previousId) }}">Previous</a></li>
                <li class="page-item"><a class="page-link" href="{{ route('movies.show', $nextId) }}">Next</a></li>
            </ul>
        </nav>
        <h2>Related movies:</h2>
        <ul>
            @foreach ($sameCategoryMovies as $id => $movie)
                <li><a href="{{ route('movies.show', $id) }}">{{ $movie['title'] }} ({{ $movie['year'] }})</a></li>
            @endforeach
        </ul>


    </div>
@endsection
