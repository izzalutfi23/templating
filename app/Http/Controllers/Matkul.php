<?php

namespace App\Http\Controllers;

use App\ModelMatkul;
use Illuminate\Http\Request;

class Matkul extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $matkul = ModelMatkul::get();

        return $matkul;
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
     * @param  \App\ModelMatkul  $modelMatkul
     * @return \Illuminate\Http\Response
     */
    public function show(ModelMatkul $modelMatkul)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ModelMatkul  $modelMatkul
     * @return \Illuminate\Http\Response
     */
    public function edit(ModelMatkul $modelMatkul)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ModelMatkul  $modelMatkul
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ModelMatkul $modelMatkul)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ModelMatkul  $modelMatkul
     * @return \Illuminate\Http\Response
     */
    public function destroy(ModelMatkul $modelMatkul)
    {
        //
    }
}
