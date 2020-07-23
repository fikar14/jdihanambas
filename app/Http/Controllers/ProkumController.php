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
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $prokum = Prokum::latest()->paginate(10);

        // menangkap data pencarian
		$search = $request->search;
		$search2 = $request->search2;
		$search3 = $request->search3;
		$search4 = $request->search4;
 
        // mengambil data dari table prokum sesuai pencarian data
        if($search || $search2 || $search3 || $search4){
            $prokum = Prokum::where([
                ['nomor','like',"%".$search."%"],
                ['tahun','like',"%".$search2."%"],
                ['desa','like',"%".$search3."%"],
                ['judul','like',"%".$search4."%"],
            ])->paginate(10);
        }
        else{
            $prokum = Prokum::latest()->paginate(10);
        }

        return view('produkhukum.index', ['prokum'=>$prokum]);
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
            "nomor" => "required|min:1|max:100",
            "tahun" => "required|min:4|max:100",
            "desa" => "required|min:2|max:100",
            "judul" => "required|min:4|max:250",
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
                'nomor' => $request->nomor,
                'tahun' => $request->tahun,
                'desa' => $request->desa,
                'judul' => $request->judul,
                'fileupload' => $fileNameToStore,
            ]);
            
            return redirect()->route('produkhukum.index')->with('status', 'Produk Hukum Berhasil ditambahkan');
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
        $prokum = Prokum::findOrFail($id);
        return view('produkhukum.edit', compact('prokum'));
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
        \Validator::make($request->all(),[
            "nomor" => "required|min:1|max:100",
            "tahun" => "required|min:4|max:100",
            "desa" => "required|min:2|max:100",
            "judul" => "required|min:4|max:250",
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

            $prokum = Prokum::findOrFail($id);
            $prokum->nomor = $request->nomor;
            $prokum->tahun = $request->tahun;
            $prokum->desa = $request->desa;
            $prokum->judul = $request->judul;
            $prokum->fileupload = $fileNameToStore;
            $prokum->save();

            return redirect()->route('produkhukum.index')->with(['success' => 'Update Produk Hukum Berhasil!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $prokum = Prokum::findOrFail($id);
        $prokum->delete();

        return redirect()->route('produkhukum.index')->with('status', 'Produk Hukum
       Berhasil di delete');
    }

    public function prokumde(Request $request)
    {
        $prokum = Prokum::latest()->paginate(10);

        // menangkap data pencarian
		$search = $request->search;
		$search2 = $request->search2;
		$search3 = $request->search3;
		$search4 = $request->search4;
 
        // mengambil data dari table prokum sesuai pencarian data
        if($search || $search2 || $search3 || $search4){
            $prokum = Prokum::where([
                ['nomor','like',"%".$search."%"],
                ['tahun','like',"%".$search2."%"],
                ['desa','like',"%".$search3."%"],
                ['judul','like',"%".$search4."%"],
            ])->paginate(10);
        }
        else{
            $prokum = Prokum::latest()->paginate(10);
        }
        return view('produkhukum.prokumdesa', ['prokum'=>$prokum]);
    }
}
