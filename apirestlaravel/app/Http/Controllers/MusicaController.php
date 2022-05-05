<?php

namespace App\Http\Controllers;

use App\Models\Musica;
use Illuminate\Http\Request;

class MusicaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $canciones = Musica::all();
        return $canciones;
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
        $cancion = new Musica();
        $cancion->Nombre = $request->Nombre;
        $cancion->Autor = $request->Autor;
        $cancion->Genero = $request->Genero;
        $cancion->Duracion = $request->Duracion;
        $cancion->save();
        return \response(content:"Canción agregada exitosamente");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Musica  $musica
     * @return \Illuminate\Http\Response
     */
    public function show(Musica $musica)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Musica  $musica
     * @return \Illuminate\Http\Response
     */
    public function edit(Musica $musica)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Musica  $musica
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $cancion = Musica::findOrFail($request->id);
        $cancion->Nombre = $request->Nombre;
        $cancion->Autor = $request->Autor;
        $cancion->Genero = $request->Genero;
        $cancion->Duracion = $request->Duracion;
        $cancion->save();
        return $cancion;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Musica  $musica
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Musica::destroy($request->id);
        return \response(content:"La cancion ha sido eliminada");
    }
}
