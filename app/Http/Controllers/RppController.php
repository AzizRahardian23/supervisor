<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rpp;

class RppController extends Controller
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
        $rpp =  Rpp::all();
        return view('rpp.index',compact('rpp'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

       $request->validate([
          'nama_mapel' => 'required',
          'file' => 'required',
          'nilai' => 'required',

      ]);


    //    Rpp::create([
    //     'nama_mapel' => $request->nama_mapel,
    //     'file' => $request->file,
    //     'nilai' => $request->nilai,
    // ]);
        $nm = $request->file;
        $namaFile = time().rand(100,999).".".$nm->getClientOriginalName();
        $data = new Rpp;
        $data->nama_mapel = $request->nama_mapel;
        $data->nilai = $request->nilai;
        $data->file = $namaFile;
        $nm->move(public_path().'/files', $namaFile);
        $data->save();
        return redirect('rpp');
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
       $rpp =  Rpp::find($id);
       return view('rpp.edit',compact('rpp'));
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

        $rpp = Rpp::find($id);
        $isi = [

         'nama_mapel' => $request->nama_mapel,
         'file' => $request->file,
         'nilai' => $request->nilai,
         'tanggal' => $request->tanggal,
     ];



     $rpp->update($isi);
     return redirect('rpp');
 }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $rpp = \App\Rpp::find($id);
       $rpp->delete($rpp);
       return redirect('rpp')->with('sukses','Rpp Dihapus!'); 
   }
}
