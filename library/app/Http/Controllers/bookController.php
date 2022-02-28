<?php

namespace App\Http\Controllers;


use Session;
use App\book;
use App\novel;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class bookController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware(['auth', 'verified']);
    // }

    public function books()
    {

        $data = book::all();
        $books = book::take(3)->get();
        $books2=book::take(3)->skip(6)->get();


        return view('frontend.books', ['data' => $data],compact("books","books2"));
    }

    public function show($id)

    {

        $data = book::find($id);
        $books=book::take(3)->get();
        $books2=book::take(3)->skip(6)->get();


        return view('frontend.book',compact("data","books","books2"));

    }


    public function destroy($id)
    {
        $deleted_book = book::find($id);
        $deleted_book->delete();
        return redirect('books');
    }


}
