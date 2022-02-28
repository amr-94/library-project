<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\book;
use App\author;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use LaravelLocalization;




class addbookController extends Controller
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

        // $file_extension = $request->pdf->getClientOriginalName();
        // $file_name2 = $file_extension;
        // $path = 'pdf';
        //  $request->file->move($path, $file_name2);



        //    $file_extension=$request ->file ->getClientOriginalName();
        //      $file_name=$file_extension ;
        //     $path='img';
        //     $request -> file ->move($path, $file_name);

              $name=  $this ->saveImage($request -> file ,'img');
              $name2 =  $this->save($request->pdf, 'pdf');


    /*$this->validate($request, [
            'book_id'    =>  'required',
            'book_name'     =>  'required',
            'book_class'    =>  'required',
            'book_rate'     =>  'required',
            'author_id'    =>  'required',
            'book_des'     =>  'required',
            'img'        =>    'required'
        ]);*/


        $addbook = new book([
            'book_name'     =>  $request->book_name,
            'book_class'     =>  $request->book_class,
            'book_rate'     =>  $request->book_rate,
            'author_id'    =>  $request->author_id,
            // 'author_name'     =>  $request->author_name,

            'book_des'     =>  $request->book_des,
             'img'     =>  $name ,
             'pdf' => $name2 ,



        ]);




        // $img_get = $request->img;
        // foreach ($img_get as $img) {
        //     $fileOriginalName = $img->getClientOriginalExtension();
        //     $fileNewName = time() . '.' . $fileOriginalName;
        //     $img->storeAs('img','', 'public'); //here images is folder, $fileNewName is files new name, public indicated public folder. that means folder this image in public/storage/images folder

        // }







        $addbook->save();
        return redirect()->route('booksbackend.create')->with('success', 'Data Added');





    }
    protected function saveImage($file, $folder)
    {
        $file_extension = $file->getClientOriginalName();
        $file_name = $file_extension;
        $path = $folder;
        $file -> move($path, $file_name);

        $name = $file_name  ;
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
    public function index (){

    }
}
