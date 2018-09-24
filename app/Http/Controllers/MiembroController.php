<?php

namespace App\Http\Controllers;

use App\Miembro;
use Illuminate\Http\Request;

use App\Grupo;

class MiembroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('miembro.create', compact('grupo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Grupo $grupo)
    {

        $miembro = new Miembro;
        $miembro->grupo_id  = $grupo->id;
        $miembro->nombre_miembro = request('nombre_miembro');
        $miembro->cargo_miembro = request('cargo_miembro');
        $miembro->correo_miembro = request('correo_miembro');
        $miembro->interes_miembro = request('interes_miembro');
        $miembro->url_foto = "https://s3-us-west-1.amazonaws.com/cdc-uni/team-1.jpg";

        $miembro->save();

        return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Miembro  $miembro
     * @return \Illuminate\Http\Response
     */
    public function show(Miembro $miembro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Miembro  $miembro
     * @return \Illuminate\Http\Response
     */
    public function edit(Miembro $miembro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Miembro  $miembro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Miembro $miembro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Miembro  $miembro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Miembro $miembro)
    {
        //
    }
}
