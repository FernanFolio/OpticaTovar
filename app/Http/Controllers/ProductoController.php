<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Forma;
use App\Models\Image;
use App\Models\Marca;
use App\Models\Producto;
use App\Models\TipoArmazon;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Producto::with(['tipoArmazon', 'marca', 'forma', 'categoria'])->get();
        return view('admin.productos.index', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $marcas = Marca::all();
        $categorias = Categoria::all();
        $formas = Forma::all();
        $tipos = TipoArmazon::all();
        return view('admin.productos.create',  compact('marcas', 'categorias', 'formas', 'tipos'));
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
            'marca' => 'required',
            'categoria' => 'required',
            'forma' => 'required',
            'tipo_armazon' => 'required',
            'color' => 'required',
            'talla' => 'required|integer|min:10',
            'longitud_varilla' => 'required|integer|min:10',
            'ancho_puente' => 'required|integer|min:10',
            'ancho_total' => 'required|integer|min:10',
            'sku' => 'required',
            'precio' => 'required',
            'foto' => 'required|mimes:jpg,png,gif,jpeg',
        ]);

        // $cloudImage = Cloudinary::uploadFile($request->file('foto')->getRealPath(), ['folder' => 'optica/productos']);
        $cloudImage = $request->file('foto')->storeOnCloudinary('optica/productos');

        DB::transaction(function () use ($data, $cloudImage) {
            $producto = Producto::create([
                'descripcion' => $data['descripcion'],
                'precio' => $data['precio'],
                'marca_id' => $data['marca'],
                'categoria_id' => $data['categoria'],
                'forma_id' => $data['forma'],
                'tipo_armazon_id' => $data['tipo_armazon'],
            ]);
            $image = Image::create([
                'foto_url' => $cloudImage->getSecurePath(),
                'foto_public_id' => $cloudImage->getPublicId(),
            ]);
            $producto->detalle()->create([
                'color' => $data['color'],
                'talla' => $data['talla'],
                'longitud_varilla' => $data['longitud_varilla'],
                'ancho_puente' => $data['ancho_puente'],
                'ancho_total' => $data['ancho_total'],
                'sku' => $data['sku'],
                'image_id' => $image->id,
            ]);
        });

        return redirect()->route('productos.index');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
