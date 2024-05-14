<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Models\Novel;

class HomeController extends Controller

{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware(['auth', 'verified']);
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {


        $amr = Book::take(3)->get();
        $books = book::take(6)->get();
        $books2 = book::take(3)->get();
        $books3 = book::take(3)->skip(3)->get();
        $novels4 = Novel::take(6)->get();
        $author1 = Author::take(3)->get();
        return view('home', compact("amr", "books", "books2", "books3", "novels4", "author1"));
    }
}
