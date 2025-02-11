<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    // App\Http\Controllers\BookController.php

    public function index()
    {
        $books = Book::all(); // Or any other query to fetch books
        return view('home', compact('books'));
    }
    

public function catalog()
{
    $books = Book::all();
    return view('catalog', compact('books'));
}


    // App\Http\Controllers\BookController.php

public function toggleFavorite($bookId)
{
    // Implémentation de la logique de basculement des favoris (exemple)
    // Vous pouvez utiliser une table pivot pour stocker les favoris d'un utilisateur
    $user = auth()->user();  // Assurez-vous que l'utilisateur est authentifié
    $book = Book::find($bookId);

    if ($user->favorites()->toggle($bookId)) {
        return response()->json(['message' => 'Favoris mis à jour']);
    }

    return response()->json(['message' => 'Erreur lors de la mise à jour des favoris'], 500);
}


    public function cart()
    {
        return view('cart');
    }
}

