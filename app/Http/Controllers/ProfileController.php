<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use Illuminate\Support\Facades\Gate;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profile = Profile::findOrFail(1);
        // return response()->json(['profile' => $profile], 200);
        return view('profiles.index', compact('profile'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

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
        // $profile = Profile::findOrFail($id);
        // return view('profiles.edit', compact('profile'));
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
        // \Validator::make($request->all(),[
        //     "title"   => "required|min:4|max:100",
        //     "profile" => "required|min:50",
        // ])->validate();
        
        $profile = Profile::findOrFail($id);
        $profile->visi = $request->get('visi');
        $profile->misi = $request->get('misi');
        $profile->tugaspokok = $request->get('tugaspokok');
        $profile->tujuan = $request->get('tujuan');
        $profile->fungsi = $request->get('fungsi');

        if($request->hasFile('struktur')) {
            // Get filename with extension            
            $filenameWithExt = $request->file('struktur')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);            
            // Get just ext
            $extension = $request->file('struktur')->getClientOriginalExtension();
            //Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;                       
            // Upload Image
            $path = $request->file('struktur')->storeAs('public/profile', $fileNameToStore);
            $profile->struktur = $fileNameToStore;
        }
        
        $profile->sop = $request->get('sop');

        $profile->save();

        return redirect()->route('profile.index')->with(['success', 'Profile berhasil diedit']);
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
