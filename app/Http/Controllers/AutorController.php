<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use Illuminate\Http\Request;

class AutorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $autores=Autor::get();
        return view('autor.index',compact('autores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $autor=new Autor();
        $autor->codigo_autor="AUT588";
        $autor->nombre_autor="Prueba Insert";
        $autor->nacionalidad="Salvadorenio";
        $autor->save();

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($codigo)
    {
        $autor=Autor::find($codigo);
        return view('autor.details', compact('autor'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($codigo)
    {
        $autor=Autor::find($codigo);
        $autor->nacionalidad="Colombiano";
        $autor->save();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Autor $autor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Autor $autor)
    {
        //
    }
}
