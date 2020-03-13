<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\obat;
use Session;
class ObatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $obat = obat::all();
        return view('layouts.backend.obat.index', compact('obat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $obat = obat::all();
        return view('layouts.backend.obat.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $obat = new obat();
        $obat->nm_obat = $request->nm_obat;
        $obat->harga = $request->harga;
        $obat->save();

        return redirect()->route('obat.index');
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
        $obat = obat::findOrFail($id);
        Session::flash("flash_notification",[
            "level" => "succes",
            "message"=>"berhasil mengedit <b>"
                        .$obat->nm_obat."</b>"
        ]);
        return view ('layouts.backend.obat.edit',compact('obat'));
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
        $obat = obat::findOrFail($id);
        $obat->nm_obat = $request->nm_obat;
        $obat->harga = $request->harga;
        $obat->save();
            Session::flash("flash_notification",[
                "level" => "success",
                "message" => "berhasil mengedit <b>"
                            .$obat->nm_obat."</b>"

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
        $obat = obat::findOrFail($id);
        $blog = obat::findOrFail($id);

        $obat->delete();
        return redirect()->route('obat.index');
    }
}
