<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use Session;
use App\BlogCategory;

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
        $blogs = Blog::latest()->paginate(10);
        return view('blogs.index', ['blogs'=>$blogs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $blogcategories = BlogCategory::orderBy('name', 'ASC')->get();
        return view('blogs.create', compact('blogcategories'));
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
            "title" => "required|min:2|max:100",
            "blog" => "required"
            ])->validate();

        $blogcategories = BlogCategory::find(1);

        $blog = new Blog;
        $blog->title = $request->get('title');
        $blog->blog = $request->get('blog');
        $blog->slug = $request->get('slug');
        $blog->status = $request->get('save_action');
        $blog->user_id = auth()->id();
        $blog->category_id = $request->get('category_id');
        

        if($request->hasFile('cover')) {
            // Get filename with extension            
            $filenameWithExt = $request->file('cover')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);            
            // Get just ext
            $extension = $request->file('cover')->getClientOriginalExtension();
            //Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;                       
            // Upload Image
            $path = $request->file('cover')->storeAs('public/blog-covers', $fileNameToStore);
        } else {
            $fileNameToStore = 'nofile';
        }

        $blog->cover = $fileNameToStore;
        $blog->save();

        if($request->get('save_action') == 'PUBLISH'){
        return redirect()
            ->route('blogs.index')
            ->with('status', 'Book successfully saved and published');
        } else {
        return redirect()
            ->route('blogs.index')
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
