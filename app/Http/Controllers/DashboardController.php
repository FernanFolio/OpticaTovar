<?php

namespace App\Http\Controllers;

use App\Models\Inventario;
use App\Models\Marca;
use App\Models\Orden;
use App\Models\Producto;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $proveedores = 0;
        $productos = Producto::all()->count();
        $marcas = Marca::all()->count();
        $stock = Inventario::sum('stock');
        $ventasPaypal = Orden::where('type', 'paypal')->count();
        $ventasStore = Orden::where('type', 'store')->count();
        $users = User::where('role', 'user')->count();
        $totalVentas = DB::table('orden_detalle')
            ->join('productos', 'productos.id', '=', 'orden_detalle.producto_id')
            ->sum(DB::raw("precio * cantidad"));

        $ultimosProductos = Producto::take(4)->latest()->with(['marca'])->get();

        return view('admin.dashboard.index', compact(
            'proveedores',
            'productos',
            'marcas',
            'stock',
            'ventasPaypal',
            'ventasStore',
            'users',
            'totalVentas',
            'ultimosProductos'
        ));
    }
}
