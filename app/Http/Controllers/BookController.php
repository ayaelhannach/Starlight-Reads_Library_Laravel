<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Favorite;
use App\Models\Order;
use App\Models\OrderBook;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{
    public function index()
    {
        $books = DB::table('books')->get();
        return view('home',['books' => $books]);
    }

    public function editDeleteBooks()
{
    $books = Book::all(); // Fetch all books
    return view('adminPage.bookListAdmin', compact('books')); // Pass books to the view
}


    public function deleteBook(Book $book)
    {
        $book->delete();
        return redirect()->route('admin.books')->with('success', 'Book deleted successfully!');
    }


    public function addToFavorites($bookId)
    {
        $user = Auth::user();
        $favorite = Favorite::firstOrCreate([
            'user_id' => $user->id,
            'book_id' => $bookId,
        ]);

        return response()->json([
            'message' => $favorite ? 'Added to favorites' : 'Already in favorites'
        ]);
    }
//     public function show(Book $book)
// {
//     return view('books.show', compact('book'));
// }

    public function addToCart($bookId)
    {
        $user = Auth::user();
        $order = Order::firstOrCreate(['user_id' => $user->id]);

        $orderBook = OrderBook::firstOrCreate([
            'order_id' => $order->id,
            'book_id' => $bookId,
        ], [
            'quantite' => 1,
        ]);

        $orderBook->increment('quantite');

        return response()->json([
            'message' => 'Added to cart'
        ]);
    }
}
