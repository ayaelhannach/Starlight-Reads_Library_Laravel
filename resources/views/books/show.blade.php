@extends('layouts.app')

@section('title', $book->title)

@section('content')
    <div class="book-details">
        <img src="{{ asset('images/books/' . $book->image) }}" alt="{{ $book->title }}">
        <h1>{{ $book->title }}</h1>
        <h2>{{ $book->author }}</h2>
        <p>{{ $book->description }}</p>
        <p>Genre: {{ $book->genre }}</p>
        <p>Price: ${{ $book->prix }}</p>
        <button>Add to cart</button>
        <button>Add to favorites</button>
    </div>
@endsection