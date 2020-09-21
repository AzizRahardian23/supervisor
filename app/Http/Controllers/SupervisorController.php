<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Supervisor;

class SupervisorController extends Controller
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
    	$supervisor =  Supervisor::all();
    	return view('supervisor.index',compact('supervisor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
    	$request->validate([
            'nama_supervisor' => 'required',
            'jam' => 'required' ,

    	]);


    	Supervisor::create([
            'nama_supervisor' => $request->nama_supervisor,
            'jam' => $request->jam,
            'tanggal' => $request->tanggal,
    	]);
    	return redirect('supervisor');
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
       $supervisor =  Supervisor::find($id);
       return view('supervisor.edit',compact('supervisor'));
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


        $supervisor = Supervisor::find($id);
        $isi = [

            'nama_supervisor' => $request->nama_supervisor,
            'jam' => $request->jam,



        ];



        $supervisor ->update($isi);
        return redirect('supervisor');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $supervisor = \App\Supervisor::find($id);
        $supervisor->delete($supervisor);
        return redirect('supervisor')->with('sukses','Supervisor Dihapus!'); 
    }
}
