<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\author;
use Illuminate\Support\Facades\Storage;



class addauthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $amr = author::all();

        return view('frontend.acreate',compact('amr'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*$this->validate($request, [
            'author_id'    =>  'required',
            'author_name'     =>  'required',
            'author_rate'    =>  'required',
            'nationality'     =>  'required',
            'about_author'    =>  'required',
            'author_des'     =>  'required',
            'img'        =>    'required'
        ]);*/
        $file_extension = $request->file->getClientOriginalName();
        $file_name = $file_extension;
        $path = 'img';
        $request->file->move($path, $file_name);


        $addauthor = new author([
            'author_id'    =>  $request->author_id,
            'author_name'     =>  $request->author_name,
            'author_rate'     =>  $request->author_rate,
            'nationality'     =>  $request->nationality,
            'about_author'     =>  $request->about_author,
            'author_des'     =>  $request->author_des,
            'img'     =>  $file_name,
        ]);
        $addauthor->save();
        return redirect()->route('authorsbackend.create')->with('success', 'Data Added');
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
}
