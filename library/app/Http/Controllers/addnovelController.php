<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\novel;
use App\author;
use Illuminate\Support\Facades\Storage;


class addnovelController extends Controller
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
        $author = author::all();
        $amr = author::all();


        return view('frontend.ncreate',compact('author','amr'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // $file_extension = $request->file->getClientOriginalName();
        // $file_name = $file_extension;
        // $path = 'img';
        // $request->file->move($path, $file_name);
        $name =  $this->saveImage($request->file, 'img');
        $name2 =  $this->save($request->pdf, 'pdf');


        $addnovel = new novel([

            'novel_name'     =>  $request->novel_name,
            'novel_rate'     =>  $request->novel_rate,
            'novel_class'     =>  $request->novel_class,
            'novel_des'     =>  $request->novel_des,
            'img'     =>  $name,
            'pdf' => $name2 ,
            'author_id'     =>  $request->author_id
        ]);
        $addnovel->save();
        return redirect()->route('novelsbackend.create')->with('success', 'Data Added');
    }
    protected function saveImage($file, $folder)
    {
        $file_extension = $file->getClientOriginalName();
        $file_name = $file_extension;
        $path = $folder;
        $file->move($path, $file_name);

        $name = $file_name;
        return $name;
    }
    protected function save($pdf, $folder)
    {
        $file_extension = $pdf->getClientOriginalName();
        $file_name = $file_extension;
        $path = $folder;
        $pdf->move($path, $file_name);

        $name = $file_name;
        return $name;
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
