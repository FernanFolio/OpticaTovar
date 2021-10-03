<?php

namespace App\Http\Controllers;

use App\Models\TipoArmazon;
use Illuminate\Http\Request;

class TipoArmazonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipos = TipoArmazon::all();
        return view('admin.tipo_armazon.index', compact('tipos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tipo_armazon.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'descripcion' => 'required',
        ]);

        TipoArmazon::create($data);
        return redirect()->route('tipos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TipoArmazon  $tipo
     * @return \Illuminate\Http\Response
     */
    public function show(TipoArmazon $tipo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TipoArmazon  $tipo
     * @return \Illuminate\Http\Response
     */
    public function edit(TipoArmazon $tipo)
    {
        return view('admin.tipo_armazon.edit', compact('tipo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TipoArmazon  $tipo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TipoArmazon $tipo)
    {
        $data = $request->validate([
            'descripcion' => 'required',
        ]);

        $tipo->descripcion = $data['descripcion'];
        $tipo->save();
        return redirect()->route('tipos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TipoArmazon  $tipo
     * @return \Illuminate\Http\Response
     */
    public function destroy(TipoArmazon $tipo)
    {
        $tipo->delete();
        return "$tipo->descripcion eliminada satisfactoriamente";
    }
}
