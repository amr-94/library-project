<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
use App\Models\Book;





class AddbookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $author = author::all();
        $amr = author::all();

        return view('frontend.bcreate', compact("author", "amr"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'book_name' => ['required', 'string', 'max:255'],
            'book_rate' => ['numeric', 'between:0,5'],
            // 'about_author' => ['string', 'max:255'],
            'img' => ['image', 'mimes:jpeg,png,jpg,gif'],
            'pdf' => ['mimes:pdf'],
        ]);
        if ($request->hasFile('b_img')) {
            $img = $request->b_img->getClientOriginalName();
            $request->b_img->move(public_path('filles/books/image'), $img);
            $request->merge([
                'img' => $img,
            ]);
        }
        if ($request->hasFile('b_pdf')) {
            $pdf = $request->b_pdf->getClientOriginalName();
            $request->b_pdf->move(public_path('filles/books/pdf'), $pdf);
            $request->merge([
                'pdf' => $pdf,
            ]);
        }

        Book::create($request->all());
        return redirect()->route('books');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function index()
    {
    }
}
