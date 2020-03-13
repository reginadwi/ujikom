<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\rm;
use App\pasien;
use App\obat;
use Session;
class RmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rm = rm::all();
        return view('layouts.backend.rm.index', compact('rm'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rm = rm::orderBy('created_at','desc')->get();

        return view('layouts.backend.rm.create',compact('rm'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rm = new rm();
        $rm->kode_pasien = $request->kode_pasien;
        $rm->kode_resep = $request->kode_resep;
        $rm->nm_pasienn = $request->nm_pasienn;
        $rm->jkk = $request->jkk;
        $rm->usiaa = $request->usiaa;
        $rm->alamatt = $request->alamatt;
        $rm->diagnosa = $request->diagnosa;
        $rm->kett = $request->kett;
        $rm->id_obat = $request->id_obat;
        $rm->save();

        return redirect()->route("rm.index");
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
        // return view('layouts.backend.rm.edit');
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
        $rm = rm::findOrFail($id);
        $rm->kode_pasien = $request->kode_pasien;
        $rm->kode_resep = $request->kode_resep;
        $rm->nm_pasienn = $request->nm_pasienn;
        $rm->jkk = $request->jkk;
        $rm->usiaa = $request->usiaa;
        $rm->alamatt = $request->alamatt;
        $rm->diagnosa = $request->diagnosa;
        $rm->kett = $request->kett;
        $rm->id_obat = $request->id_obat;
        $rm->save();
            Session::flash("flash_notification",[
                "level" => "success",
                "message" => "berhasil mengedit <b>"
                            .$rm->nm_pasien."</b>"

            ]);
            return redirect()->route('rm.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rm = rm::findOrFail($id);

        $rm->delete();
        return redirect()->route('rm.index');
    }
}
