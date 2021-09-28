<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SiteController extends Controller
{
    public function index()
    {
        return view('site.inicio');
    }

    public function tienda()
    {
        return view('site.tienda');
    }

    public function detalleProducto(Producto $producto)
    {
        return view('site.detalle_producto', compact('producto'));
    }

    public function contacto()
    {
        return view('site.contacto');
    }

    public function padecimientos()
    {
        return view('site.padecimientos');
    }

    public function formaCara()
    {
        $cuadrada = Producto::whereRelation('forma', 'descripcion', '=', 'Redondo')
            ->orWhereRelation('forma', 'descripcion', '=', 'Lagrima')
            ->take(4)
            ->get();

        $rectangular = Producto::whereRelation('forma', 'descripcion', '=', 'Cuadrada')
            ->orWhereRelation('forma', 'descripcion', '=', 'Lagrima')
            ->orWhereRelation('forma', 'descripcion', '=', 'Aviador')
            ->take(4)
            ->get();

        $ovalada = Producto::whereRelation('forma', 'descripcion', '=', 'Acetato')
            ->orWhereRelation('forma', 'descripcion', '=', 'Metalico')
            ->take(4)
            ->get();

        $redonda = Producto::whereRelation('forma', 'descripcion', '=', 'Cuadrada')
            ->take(4)
            ->get();

        $triangular = Producto::whereRelation('forma', 'descripcion', '=', 'Ranurado')
            ->orWhereRelation('forma', 'descripcion', '=', 'Ovalado')
            ->take(4)
            ->get();

        $diamante = Producto::whereRelation('forma', 'descripcion', '=', 'Cuadrada')
            ->take(4)
            ->get();

        $corazon = Producto::whereRelation('forma', 'descripcion', '=', 'Redondo')
            ->take(4)
            ->get();

        return view('site.forma_cara', compact('cuadrada', 'rectangular', 'ovalada', 'redonda', 'triangular', 'diamante', 'corazon'));
    }

    public function faqs()
    {
        return view('site.faqs');
    }

    public function pagar()
    {
        return view('site.pagar');
    }

    public function misCompras()
    {
        $ordenes = Auth::user()->ordenes()->with(['productos'])->latest()->get();
        return view('site.mis_compras', compact('ordenes'));
    }
}
