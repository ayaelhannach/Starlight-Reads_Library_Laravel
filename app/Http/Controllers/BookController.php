<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('home', compact('books'));
    }

    public function catalog()
    {
        $books = Book::all();
        return view('catalog', compact('books'));
    }

    public function favorites()
    {
        return view('favorites');
    }

    public function cart()
    {
        return view('cart');
    }
}

