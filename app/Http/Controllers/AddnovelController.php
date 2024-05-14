<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Author;
use App\Models\Novel;


class AddnovelController extends Controller
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


        return view('frontend.ncreate', compact('author', 'amr'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if ($request->hasFile('n_img')) {
            $filename = time() . '.' . $request->n_img->extension();
            $request->n_img->move(public_path('filles/novels/image'), $filename);
            $request->merge(
                [
                    'img' => $filename
                ]
            );
            if ($request->hasFile('n_pdf')) {
                $filename2 = time() . '.' . $request->n_pdf->extension();
                $request->n_pdf->move(public_path('filles/novels/pdf'), $filename2);
                $request->merge(
                    [
                        'pdf' => $filename2
                    ]
                );
            }
        }


        Novel::create($request->all());
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
