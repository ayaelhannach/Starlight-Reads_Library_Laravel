<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
    public function store(Request $request)
    {
        $favorite = new Favorite();
        $favorite->user_id = Auth::id();
        $favorite->book_id = $request->book_id;
        $favorite->save();

        return back();
    }

    public function destroy(Favorite $favorite)
    {
        $favorite->delete();
        return back();
    }
}