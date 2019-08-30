<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Prokum;

class ProkumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('produkhukum.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('produkhukum.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        \Validator::make($request->all(),[
            "jenis" => "required|min:4|max:100",
            "nomor" => "required|min:4|max:100",
            "judul" => "required|min:4|max:250",
            "tahun" => "required|min:4|max:100",
            ])->validate();

            $uploadedFile = $request->file('fileupload');
            $path = $uploadedFile->store('public/produk-hukum');

            $prokum = Prokum::firstOrCreate([
                'jenis' => $request->jenis,
                'nomor' => $request->nomor,
                'judul' => $request->judul,
                'tahun' => $request->tahun,
                'fileupload' => $path,
            ]);

            // $prokum = new Prokum;
            // $prokum->jenis = $request->get('jenis');
            // $prokum->nomor = $request->get('nomor');
            // $prokum->judul = $request->get('judul');
            // $prokum->tahun = $request->get('tahun');
            
            // if($request->file('fileupload')){
            // $file = $request->file('fileupload')->store('produk-hukum', 'public');
            // $prokum->fileupload = $file;
            // }

            // $prokum->save();
            return redirect()->route('roles.index')->with(['success', 'Produk Hukum berhasil ditambahkan']);
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
