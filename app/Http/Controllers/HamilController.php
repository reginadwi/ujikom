<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\hamil;
use Session;
class HamilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hamil = hamil::all();
        return view('layouts.backend.hamil.index',compact('hamil'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $hamil = hamil::all();
        return view('layouts.backend.hamil.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $hamil = new hamil();
        $hamil->nama_ibu = $request->nama_ibu;
        $hamil->usiaaa = $request->usiaaa;
        $hamil->alamat = $request->alamat;
        $hamil->pendidikan = $request->pendidikan;
        $hamil->pekerjaan = $request->pekerjaan;
        $hamil->usia_kehamilan = $request->usia_kehamilan;
        $hamil->status_tt = $request->status_tt;
        $hamil->tp = $request->tp;
        $hamil->tekanan_darah = $request->tekanan_darah;
        $hamil->bb = $request->bb;
        $hamil->diagnosa = $request->diagnosa;
        $hamil->id_obat = $request->id_obat;
        $hamil->save();

        return redirect()->route("hamil.index");
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
        $hamil = hamil::findOrFail($id);
        Session::flash("flash_notification",[
            "level" => "succes",
            "message"=>"berhasil mengedit <b>"
                        .$hamil->nama_ibu."</b>"
        ]);
        return view ('layouts.backend.hamil.edit',compact('hamil'));
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
        $hamil = hamil::findOrFail($id);
        $hamil->nama_ibu = $request->nama_ibu;
        $hamil->usiaaa = $request->usiaaa;
        $hamil->alamat = $request->alamat;
        $hamil->pendidikan = $request->pendidikan;
        $hamil->pekerjaan = $request->pekerjaan;
        $hamil->usia_kehamilan = $request->usia_kehamilan;
        $hamil->status_tt = $request->status_tt;
        $hamil->tp = $request->tp;
        $hamil->tekanan_darah = $request->tekanan_darah;
        $hamil->bb = $request->bb;
        $hamil->diagnosa = $request->diagnosa;
        $hamil->id_obat = $request->id_obat;
        $hamil->save();
            Session::flash("flash_notification",[
                "level" => "success",
                "message" => "berhasil mengedit <b>"
                            .$hamil->nama_ibu."</b>"

            ]);
            return redirect()->route('obat.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hamil = hamil::findOrFail($id);
        $hamil->delete();
        return redirect()->route('hamil.index');

    }
}
