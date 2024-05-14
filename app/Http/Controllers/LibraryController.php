<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Models\Novel;
use App\Models\User;


use Illuminate\Http\Request;




class LibraryController extends Controller
{
    // public function index(){
    //     $amr = book::take(3)->get();
    //     $books=book::take(6)->get();
    //     $books2=book::take(3)->get();
    //     $books3=book::take(3)->skip(3)->get();
    //     $novels4=novel::take(6)->get();
    //     $author1=author::take(3)->get();
    //     return view('home',compact("amr","books","books2","books3","novels4","author1"));

    // }


    public function author_page()
    {
        $data = author::all();

        $amr = book::take(3)->get();
        $author1 = author::take(3)->get();
        $novels4 = novel::take(6)->get();

        return view('frontend.author_page', ['data' => $data], compact("amr", "author1", "novels4"));
    }
    public function show($id)

    {

        $author = author::find($id);
        $b = novel::find($id);
        $b = book::find($id);
        $amr = book::take(3)->get();
        $books = book::take(6)->get();
        $books2 = book::take(3)->skip(6)->get();
        $books3 = book::take(3)->skip(3)->get();
        $novels4 = novel::take(6)->get();
        $author1 = author::take(3)->get();



        $books = book::where('author_id', $id)->get();
        $novels = novel::where('author_id', $id)->get();
        $novels4 = novel::where('author_id', $id)->get();
        //  dd ($books);
        return view('frontend.author', compact("author", "books", "novels", "b", "amr", "books2", "books3", "novels4", "author1"));
    }
    public function search(Request $request)
    {
        $q = $request->q;
        $book = book::where('book_name', 'LIKE', '%' . $q . '%')->get();
        //    $novel=novel::where('novel_name','LIKE','%'.$q.'%')->get();


        if (count($book) > 0)
            return view('frontend.search')->withdetails($book)->withQuery($q);

        else
            return view('frontend.search')->withMessage('No Details found. Try to search again !');
    }
    // ----------------------------
    // public function find()
    // {
    //     return view('search');
    // }
    // public function findSearch(Request $request)
    // {

    //     $search = $q = $request->q;
    //     $book = book::where('book_name', 'LIKE', '%' . $search . '%')->get();
    //     if (count($book) > 0)
    //     return view('frontend.Search')->withDetails($book)->withQuery($search);
    //     else
    //         return view('frontend.Search')->withMessage('No Details found. Try to search again !');
    // }

    // ==========================













    public function dashbord()
    {

        $data = book::all();
        $books = book::take(3)->get();
        $books2 = book::take(3)->skip(6)->get();
        $data = author::all();

        $amr = book::take(3)->get();
        $author1 = author::take(3)->get();
        $novels4 = novel::take(6)->get();
        $use = User::all();



        return view('frontend.dashbord', ['data' => $data], compact("amr", "author1", "novels4", "books", "books2", "use"));
    }
    //    حذف مؤلف
    public function destroy($id)
    {
        $deleted_author = author::find($id);
        $deleted_author->delete();
        return redirect('author_page');
    }
};
