<?php

namespace App\Http\Controllers;
use App\pasien3;
use Session;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pasien = pasien3::all();
        return view('layouts.backend.pasien.index', compact('pasien'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pasien = pasien3::all();
        return view('layouts.backend.pasien.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pasien = new pasien3();
        $pasien->id_pasien = $request->id_pasien;
        $pasien->nm_pasien = $request->nm_pasien;
        $pasien->usia = $request->usia;
        $pasien->alamat = $request->alamat;
        $pasien->jk = $request->jk;
        $pasien->no_tlpn = $request->no_tlpn;
        $pasien->ket = $request->ket;
        $pasien->save();

        return redirect()->route("pasien.index");
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
        $pasien = pasien3::findOrFail($id);
        Session::flash("flash_notification",[
            "level" => "succes",
            "message"=>"berhasil mengedit <b>"
                        .$pasien->nm_pasien."</b>"
        ]);
        return view ('layouts.backend.pasien.edit',compact('pasien'));
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
        $pasien = pasien3::findOrFail($id);
        $pasien->id_pasien = $request->id_pasien;
        $pasien->nm_pasien = $request->nm_pasien;
        $pasien->usia = $request->usia;
        $pasien->alamat = $request->alamat;
        $pasien->jk = $request->jk;
        $pasien->no_tlpn = $request->no_tlpn;
        $pasien->ket = $request->ket;
        $pasien->save();
            Session::flash("flash_notification",[
                "level" => "success",
                "message" => "berhasil mengedit <b>"
                            .$pasien->nm_pasien."</b>"

            ]);
            return redirect()->route('pasien.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pasien = pasien3::findOrFail($id);


        $pasien->delete();
        return redirect()->route('pasien.index');
    }
}
