<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\author;
use App\book;
use App\novel;

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


        $amr = book::take(3)->get();
        $books = book::take(6)->get();
        $books2 = book::take(3)->get();
        $books3 = book::take(3)->skip(3)->get();
        $novels4 = novel::take(6)->get();
        $author1 = author::take(3)->get();
        return view('home', compact("amr", "books", "books2", "books3", "novels4", "author1"));


    }
}
