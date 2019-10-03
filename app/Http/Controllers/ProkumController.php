<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Prokum;

class ProkumController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

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
        $prokum = Prokum::latest()->paginate(10);

        return view('produkhukum.create', ['prokum'=>$prokum]);
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

            if($request->hasFile('fileupload')) {
                // Get filename with extension            
                $filenameWithExt = $request->file('fileupload')->getClientOriginalName();
                // Get just filename
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);            
                // Get just ext
                $extension = $request->file('fileupload')->getClientOriginalExtension();
                //Filename to store
                $fileNameToStore = $filename.'_'.time().'.'.$extension;                       
                // Upload Image
                $path = $request->file('fileupload')->storeAs('public/prokum', $fileNameToStore);
            } else {
                $fileNameToStore = 'nofile';
            }

            $prokum = Prokum::firstOrCreate([
                'jenis' => $request->jenis,
                'nomor' => $request->nomor,
                'judul' => $request->judul,
                'tahun' => $request->tahun,
                'fileupload' => $fileNameToStore,
            ]);
            
            return redirect()->route('produkhukum.create')->with('status', 'Produk Hukum Berhasil ditambahkan');
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
