@extends('layouts.app')

@section('title', 'Books List')

@section('content')
    <div class="book-section">
        <button class="scroll-button left" onclick="scrollLeft()">&#10094;</button>
        <div class="book-list-wrapper" id="bookListWrapper">
            <div class="book-list">
                @foreach ($books as $book)
                    <div class="book-card">
                        <div class="book-image-container">
                            @if($book->image)
                                <img class="book-image" src="{{ asset('images/books/' . $book->image) }}" alt="{{ $book->titre }}">
                            @else
                                <img class="book-image" src="https://via.placeholder.com/150" alt="Image du livre">
                            @endif
                        </div>
                        <div class="book-details">
                            <h5 class="card-title">{{ $book->titre }}</h5>
                            <p class="card-text">Auteur: {{ $book->auteur }}</p>
                            <p class="card-text">Genre: {{ $book->genre }}</p>
                            <p class="card-text">Prix: {{ number_format($book->prix, 2) }} MAD</p>
                        </div>

                        <!-- Ajouter les boutons Modifier et Supprimer -->
                        <div class="book-actions">
                            <a href="{{ route('books.edit', $book->id) }}" class="book-button modify-button">Edit</a>
                            <form action="{{ route('books.destroy', $book->id) }}" method="POST" onsubmit="return confirm('Es-tu sûr de vouloir supprimer ce livre ?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="book-button delete-button">Supprimer</button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <button class="scroll-button right" onclick="scrollRight()">&#10095;</button>
    </div>

    <script>
        // Scroll Left Function
        function scrollLeft() {
            const container = document.getElementById('bookListWrapper');
            container.scrollBy({
                left: -300, // Adjust this value to scroll by more or less
                behavior: 'smooth'
            });
        }

        // Scroll Right Function
        function scrollRight() {
            const container = document.getElementById('bookListWrapper');
            container.scrollBy({
                left: 300, // Adjust this value to scroll by more or less
                behavior: 'smooth'
            });
        }
    </script>
@endsection