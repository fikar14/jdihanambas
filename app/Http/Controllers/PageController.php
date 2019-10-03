<?php

namespace App\Http\Controllers;

use App\Prokum;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function welcome()
    {
        $prokum = Prokum::latest()->paginate(8);
        return view('pages.welcome', ['prokum'=>$prokum]);
    }

    public function profile()
    {
        return view('pages.profile');
    }

    public function berita()
    {
        return view('pages.berita');
    }

    public function kontak()
    {
        return view('pages.kontak');
    }

    public function prokum(Request $request)
    {

        // $prokum = Prokum::when($request->q, 
        // function ($query) use ($request) {
        //     $query->where('judul', 'LIKE', "%{$request->q}%")
        //           ->orWhere('tahun', 'LIKE', "%{$request->q}%");
        //     })->get();
        // return view('pages.produk-hukum', compact('prokum'));

        $prokum = Prokum::latest()->paginate(10);

        $filterKeyword = $request->get('q');

        if($filterKeyword){
        $prokum = Prokum::where('judul', 'LIKE', "%$filterKeyword%")->paginate(10);
        }
        return view('pages.produk-hukum', ['prokum' => $prokum]);
    }
}
