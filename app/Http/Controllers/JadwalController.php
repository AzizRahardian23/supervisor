<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jadwal;

class JadwalController extends Controller
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
        $jadwal =  Jadwal::all();
        return view('jadwal.index',compact('jadwal'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->validate([
           'nama_jadwal' => 'required',
           'guru' => 'required',
           'jam' => 'required' ,
           'hari' => 'required',
           'tanggal' => 'required',
           

       ]);



        Jadwal::create([
           'nama_jadwal' => $request->nama_jadwal,
           'guru' => $request->guru,
           'jam' => $request->jam,
           'hari' => $request->hari,
           'tanggal' => $request->tanggal,
           'bulan' => $request->bulan,
           'tahun' => $request->tahun,
       ]);
        return redirect('jadwal');
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
      $jadwal =  Jadwal::find($id);
      return view('jadwal.edit',compact('jadwal'));
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
        $jadwal = Jadwal::find($id);
        $isi = [

         'nama_jadwal' => $request->nama_jadwal,
         'guru' => $request->guru,
         'jam' => $request->jam,
         'hari' => $request->hari,
         'tanggal' => $request->tanggal,

     ];

     $jadwal ->update($isi);
     return redirect('jadwal');

 }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $jadwal = \App\Jadwal::find($id);
      $jadwal->delete($jadwal);
      return redirect('jadwal')->with('sukses','Jadwal Dihapus!'); 
  }
}
