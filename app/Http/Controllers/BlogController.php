<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use Session;

class BlogController extends Controller
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
        return view('blogs.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blogs.create');
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
            "title" => "required|min:5|max:100",
            "slug" => "required|unique:users",
            "blog" => "required",
            "cover" => "required",
            ])->validate();

        $blog = new Blog;
        $blog->title = $request->get('title');
        $blog->slug = $request->get('slug');
        $blog->blog = $request->get('blog');

        $cover = $request->file('cover');

        if($cover){
            $cover_path = $cover->store('book-covers', 'public');
            $blog->cover = $cover_path;
        }

        if($request->get('save_action') == 'PUBLISH'){
        return redirect()
            ->route('blogs.create')
            ->with('status', 'Book successfully saved and published');
        } else {
        return redirect()
            ->route('blogs.create')
            ->with('status', 'Book saved as draft');
        }
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

    public function apiCheckUnique(Request $request) 
    {
        return json_encode(!Blog::where('slug', '=', $request->slug)->exists());
    }
}
