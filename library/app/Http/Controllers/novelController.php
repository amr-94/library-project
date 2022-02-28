<?php

namespace App\Http\Controllers;

use App\novel;
use App\book;

class novelController extends Controller
{
    public function novels()
    {
        $amr = book::take(3)->get();
        $books=book::take(6)->get();
        $books2=book::take(3)->skip(6)->get();
        $books3=book::take(3)->skip(3)->get();
        $novels4=novel::take(6)->get();



        $data = novel::all();


        return view('frontend.novels', ['data' => $data],compact("amr","books3","books2","books","novels4"));
    }

    public function show($id)

    {
        $b = novel::find($id);
        $amr = book::take(3)->get();
        $books=book::take(6)->get();
        $books2=book::take(3)->skip(6)->get();
        $books3=book::take(3)->skip(3)->get();
        $novels4=novel::take(6)->get();


        $data = novel::find($id);
        $novels = novel::take(3)->get();
        $novels4=novel::take(6)->get();

        return view('frontend.novel', compact("data","novels","amr","books3","books2","books","novels4"));

    }


    public function destroy($id)
    {
        $deleted_novel = novel::find($id);
        $deleted_novel->delete();
        return redirect('novels');
    }
}
