<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rpp;

class NilaiController extends Controller
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
        $nilai =  Rpp::all();
        return view('nilai.index',compact('nilai'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {




        Rpp::create([
            'nama_mapel' => $request->nama_mapel,
            'file' => $request->file,
            'nilai' => $request->nilai,
        ]);
        return redirect('nilai');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

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
     $nilai =  Rpp::find($id);
     return view('nilai.edit',compact('nilai'));
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

        $nilai = Rpp::find($id);
        $isi = [

           'nama_mapel' => $request->nama_mapel,
           'file' => $request->file,
           'nilai' => $request->nilai,

       ];



       $nilai ->update($isi);
       return redirect('nilai');
   }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     $nilai = \App\Rpp::find($id);
     $nilai->delete($nilai);
     return redirect('nilai')->with('sukses','Nilai Dihapus!'); 
 }
}
