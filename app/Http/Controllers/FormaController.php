<?php

namespace App\Http\Controllers;

use App\Models\Forma;
use Illuminate\Http\Request;

class FormaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $formas = Forma::all();
        return view('admin.formas.index', compact('formas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.formas.create');
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

        Forma::create($data);
        return redirect()->route('formas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Forma  $forma
     * @return \Illuminate\Http\Response
     */
    public function show(Forma $forma)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Forma  $forma
     * @return \Illuminate\Http\Response
     */
    public function edit(Forma $forma)
    {
        return view('admin.formas.edit', compact('forma'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Forma  $forma
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Forma $forma)
    {
        $data = $request->validate([
            'descripcion' => 'required',
        ]);

        $forma->descripcion = $data['descripcion'];
        $forma->save();
        return redirect()->route('formas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Forma  $forma
     * @return \Illuminate\Http\Response
     */
    public function destroy(Forma $forma)
    {
        $forma->delete();
        return "$forma->descripcion eliminada satisfactoriamente";
    }
}
