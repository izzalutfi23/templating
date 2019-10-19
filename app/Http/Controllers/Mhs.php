<?php

namespace App\Http\Controllers;

use App\Mhsmodel;
use Illuminate\Http\Request;
use DB;

class Mhs extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $mhs = DB::table('mahasiswa')
        ->join('matkul', 'mahasiswa.kdmatkul', '=', 'matkul.kdmatkul')
        ->get();

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

        Mhsmodel::create($request->all());

        return redirect('/mahasiswa')->with('status', 'Data berhasil ditambahkan');
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
        $request->validate([
            'nama'=>'required',
            'NRP'=>'required',
            'email'=>'required',
            'jurusan'=>'required'
        ]);

        Mhsmodel::where('id', $mhsmodel->id)->update([
            'nama'=>$request->nama,
            'NRP'=>$request->NRP,
            'email'=>$request->email,
            'jurusan'=>$request->jurusan
        ]);

        return redirect('/mahasiswa')->with('status', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mhsmodel  $mhsmodel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mhsmodel $mhsmodel)
    {
        Mhsmodel::destroy($mhsmodel->id);
        return redirect('/mahasiswa')->with('status', 'Data berhasil dihapus');
    }
}
