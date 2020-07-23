<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProkumDaerah;

class ProkumdaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prokum = ProkumDaerah::select('id','judul','bentuk','no_per','tahun','file','status')->get();
        return $prokum;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $prokumda = ProkumDaerah::create($request->all());

        return response()->json($prokumda, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Prokumda $prokumda)
    {
        return $prokumda;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prokumda $prokumda)
    {
        $prokumda->update($request->all());

        return response()->json($prokumda, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prokumda $prokumda)
    {
        $prokumda->delete();

        return response()->json(null, 204);
    }
}
