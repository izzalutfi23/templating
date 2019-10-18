<?php

namespace App\Http\Controllers;

use App\Mhsmodel;
use Illuminate\Http\Request;

class Mhs extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mhs = Mhsmodel::all();

        $data = array(
            'mahasiswa'=>$mhs
        );
        return view('mahasiswa.mahasiswa', $data);
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
        $request->validate([
            'nama'=>'required',
            'NRP'=>'required',
            'email'=>'required',
            'jurusan'=>'required'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mhsmodel  $mhsmodel
     * @return \Illuminate\Http\Response
     */
    public function show(Mhsmodel $mhsmodel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mhsmodel  $mhsmodel
     * @return \Illuminate\Http\Response
     */
    public function edit(Mhsmodel $mhsmodel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mhsmodel  $mhsmodel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mhsmodel $mhsmodel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mhsmodel  $mhsmodel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mhsmodel $mhsmodel)
    {
        //
    }
}
