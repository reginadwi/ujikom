<?php

namespace App\Http\Controllers;
use App\perawatan;
use Session;
use Illuminate\Http\Request;

class PerawatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perawatan = perawatan::orderBy('created_at','desc')->get();
        return view('layouts.backend.perawatan.index',compact('perawatan'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $perawatan = perawatan::all();

        return view('layouts.backend.perawatan.create',compact('perawatan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $perawatan = new perawatan();
        // $perawatan->id_perawatan = $request->id_perawatan;
        $perawatan->kd_perawatan = $request->kd_perawatan;
        $perawatan->nama_perawatan = $request->nama_perawatan;
        $perawatan->harga_perawatan =$request->harga_perawatan;

        $perawatan->save();

        return redirect()->route("perawatan.index");
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
        $perawatan = perawatan::findOrFail($id);
        Session::flash("flash_notification",[
            "level" => "succes",
            "message"=>"berhasil mengedit <b>"
                        .$perawatan->nm_perawatan."</b>"
        ]);
        return view ('layouts.backend.perawatan.edit',compact('perawatan'));
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
        $perawatan = perawatan::findOrFail($id);
        $perawatan->id_perawatan = $request->id_perawatan;
        $perawatan->kd_perawatan = $request->kd_perawatan;
        $perawatan->nama_perawatan = $request->nama_perawatan;
        $perawatan->harga_perawatan =$request->harga_perawatan;

        $perawatan->save();

        Session::flash("flash_notification",[
            "level" => "success",
            "message" => "berhasil mengedit <b>"
                        .$perawatan->nama_perawatan."</b>"

        ]);
        return redirect()->route('perawatan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $perawatan = perawatan::findOrFail($id);


        $perawatan->delete();
        return redirect()->route('perawatan.index');
    }
}
