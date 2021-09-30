<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use App\Models\Producto;
use App\Models\Categoria;
use App\Models\Forma;
use App\Models\Inventario;
use App\Models\Marca;
use App\Models\Orden;
use App\Models\TipoArmazon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApiController extends Controller
{
    function categorias()
    {
        $categorias = Categoria::all();
        return response()->json($categorias);
    }

    function marcas()
    {
        $marcas = Marca::all();
        return response()->json($marcas);
    }

    function tipos()
    {
        $tipos = TipoArmazon::all();
        return response()->json($tipos);
    }

    function formas()
    {
        $formas = Forma::all();
        return response()->json($formas);
    }

    function productos()
    {
        $productos = Producto::with(['marca'])->get();
        return response()->json($productos);
    }

    function inventario($producto)
    {
        $inventario = Inventario::where('producto_id', $producto)->first();
        return response()->json($inventario);
    }

    function contacto(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email|string',
            'asunto' => 'required|string',
            'mensaje' => 'required|string'
        ]);

        Contacto::create([
            'email' => $data['email'],
            'asunto' => $data['asunto'],
            'mensaje' => $data['mensaje'],
        ]);
    }

    function salesPerMonth()
    {
        $ventas = Orden::select(DB::raw('month(created_at) as mes, count(*) as ventas'))
            ->groupBy(DB::raw('month(created_at)'))
            ->get();
        return $ventas;
    }

    function salesPerPlace()
    {
        $sales_page = Orden::where('type', 'paypal')->count();
        $sales_store = Orden::where('type', 'store')->count();
        return [
            'sales_store' => $sales_page,
            'sales_page' => $sales_store,
        ];
    }
}
