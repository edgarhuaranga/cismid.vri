<?php

namespace App\Http\Controllers;

use App\Promocion;
use Illuminate\Http\Request;

class PromocionController extends Controller
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
        return view('promos.index', compact('promos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('promos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $promo = new Promocion;
        $promo->texto_principal = request('texto_principal');
        $promo->texto_secundario = request('texto_secundario');
        $promo->path_imagen = request('path_imagen');

        $promo->save();

        return redirect('/manage/promos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Promocion  $promocion
     * @return \Illuminate\Http\Response
     */
    public function show(Promocion $promocion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Promocion  $promocion
     * @return \Illuminate\Http\Response
     */
    public function edit(Promocion $promocion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Promocion  $promocion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Promocion $promocion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Promocion  $promocion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Promocion $promocion)
    {
        //
    }
}
