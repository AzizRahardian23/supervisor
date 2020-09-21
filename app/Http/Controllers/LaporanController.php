<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rpp;
use App\Jadwal;
use App\Supervisor;
use PDF;

class LaporanController extends Controller
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
        $rpps =  Rpp::all();;
        $jadwals = Jadwal::all();
        $supervisors = Supervisor::all();
        return view('laporan.index',compact('rpps','jadwals','supervisors'));
    }

      public function cetak_pdf()
    {
        $rpps =  Rpp::all();;
        $jadwals = Jadwal::all();
        $supervisors = Supervisor::all();
    
        $pdf = PDF::loadview('Laporan.laporan',['rpps'=>$rpps, 'jadwals'=>$jadwals,'supervisors'=>$supervisors,]);
        return $pdf->download('laporan-supervisi');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {




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

       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      
    }
}
