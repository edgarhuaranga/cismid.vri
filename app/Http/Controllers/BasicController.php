<?php

namespace App\Http\Controllers;

use App\Basic;
use App\Promocion;
use App\Noticia;
use App\Evento;
use App\Grupo;
use Illuminate\Http\Request;

class BasicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $promos = Promocion::all();
        $noticias_par = Noticia::all();$users = Noticia::orderBy('id', 'desc')->take(6)->get();
        $noticias_impar = Noticia::all();$users = Noticia::orderBy('id', 'desc')->skip(6)->take(6)->get();
        $basics = Basic::find(1);
        $grupos = Grupo::all();
        //$nombre_centro = "Centro Peruano-Japonés de Investigaciones Sísmicas y Mitigación de Desastres";
        //$descripcion_centro = "El Centro Peruano Japonés de Investigaciones Sísmicas y Mitigación de Desastres (CISMID) es una institución de sólido prestigio internacional, que gracias al aporte y calidad de sus investigadores ha logrado colocarse a la vanguardia de la Ingeniería Sísmica no solamente en el Perú sino también en Latinoamérica";
        $eventos = Evento::all();

        return view('welcome', compact('promos', 'basics', 'noticias_par', 'noticias_impar', 'eventos', 'grupos'));
    }

    public function team(){
      $promos = Promocion::all();
      $noticias_par = Noticia::all();$users = Noticia::orderBy('id', 'desc')->take(6)->get();
      $noticias_impar = Noticia::all();$users = Noticia::orderBy('id', 'desc')->skip(6)->take(6)->get();
      $basics = Basic::find(1);
      $grupos = Grupo::all();
      $eventos = Evento::all();

      return view('team', compact('promos', 'basics', 'noticias_par', 'noticias_impar', 'eventos', 'grupos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $basics = Basic::find(1);
        $basics->nombre_centro = request('nombre_centro');
        $basics->descripcion_centro = request('descripcion_centro');
        $basics->direccion = request('direccion');
        $basics->distrito = request('distrito');
        $basics->telefono = request('telefono');
        $basics->correo_centro = request('correo_centro');
        $basics->nosotros = request('nosotros');

        $basics->save();

        return redirect('/manage/basic');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Basic  $basic
     * @return \Illuminate\Http\Response
     */
    public function show(Basic $basic)
    {
        return view('basics.edit', compact('basic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Basic  $basic
     * @return \Illuminate\Http\Response
     */
    public function edit(Basic $basic)
    {
        //
        $basics = Basic::find(1);
        return view('basics.edit', compact('basics'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Basic  $basic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Basic $basic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Basic  $basic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Basic $basic)
    {
        //
    }
}
