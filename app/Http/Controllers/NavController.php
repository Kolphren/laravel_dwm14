<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class NavController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function list()
    {
        $books = Book::all();
        return view('list', ['books' => $books]);
    }

    public function book($id)
    {
        $book = Book::getOne($id);
        return view('book', ['book' => $book]);
    }
}
