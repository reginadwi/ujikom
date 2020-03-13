<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\persalinan;
use App\obat;
use Session;
class PersalinanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $persalinan = persalinan::all();
        return view('layouts.backend.persalinan.index',compact('persalinan'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $persalinan = persalinan::all();
        return view('layouts.backend.persalinan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $persalinan = new pasien3();
        $persalinan->tgl = $request->tgl;
        $persalinan->nama_ibu = $request->nama_ibu;
        $persalinan->usiaa = $request->usiaa;
        $persalinan->alamatt = $request->alamatt;
        $persalinan->paritas = $request->paritas;
        $persalinan->tp = $request->tp;
        $persalinan->tekanan_darah = $request->tekanan_darah;
        $persalinan->bb = $request->bb;
        $persalinan->diagnosa = $request->diagnosa;
        $persalinan->kettt = $request->kettt;
        $persalinan->id_obat = $request->id_obat;
        $persalinan->save();

        return redirect()->route("persalinan.index");
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
        $persalinan = persalinan::findOrFail($id);
        Session::flash("flash_notification",[
            "level" => "succes",
            "message"=>"berhasil mengedit <b>"
                        .$persalinan->nama_ibu."</b>"
        ]);
        return view ('layouts.backend.persalinan.edit',compact('persalinan'));
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
        $perawatan= perawatan::findOrFail($id);
        $persalinan->tgl = $request->tgl;
        $persalinan->nama_ibu = $request->nama_ibu;
        $persalinan->usiaa = $request->usiaa;
        $persalinan->alamatt = $request->alamatt;
        $persalinan->paritas = $request->paritas;
        $persalinan->tp = $request->tp;
        $persalinan->tekanan_darah = $request->tekanan_darah;
        $persalinan->bb = $request->bb;
        $persalinan->diagnosa = $request->diagnosa;
        $persalinan->kettt = $request->kettt;
        $persalinan->id_obat = $request->id_obat;
        $persalinan->save();
        Session::flash("flash_notification",[
            "level" => "success",
            "message" => "berhasil mengedit <b>"
                        .$persalinan->nama_ibu."</b>"
                ]);
        return redirect()->route('persalinan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $persalinan = persalinan::findOrFail($id);


        $persalinan->delete();
        return redirect()->route('persalinan.index');
    }
}
