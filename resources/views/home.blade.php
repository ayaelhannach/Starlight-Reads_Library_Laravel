@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="searchbar">
        <div class="search">
            <input type="text" placeholder="Chercher un livre">
            <button type="button">Search</button>
        </div>
        <h1>Welcome to our library!</h1>
        <p>Discover our world of books, enjoy reading the best novels, and travel to another world.</p>
    </div>

    {{-- Include the About Us Section --}}
    @include('partials.about')

    <div class="book-section">
        <button class="scroll-button left">&lt;</button>
        <div class="book-list-wrapper">
            <div class="book-list">
                @foreach ($books as $book)
                    <div class="book-card">
                        <div class="book-image-container">
                            <img class="book-image" src="{{ asset('images/books/' . $book->image) }}" alt="{{ $book->title }}">
                            <div class="favorite-icon" onclick="toggleFavorite({{ $book->id }})">
                                <i class="far fa-heart"></i>
                            </div>
                        </div>
                        <div class="book-details">
                            <h1 class="book-name">{{ $book->title }}</h1>
                            <h2 class="book-genre">{{ $book->genre }}</h2>
                            <h3 class="book-author">{{ $book->author }}</h3>
                        </div>
                        <div class="book-actions">
                            <button class="book-button favorite-button">Add to cart</button>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <button class="scroll-button right">&gt;</button>
    </div>
@endsection
