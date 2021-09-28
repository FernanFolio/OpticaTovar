<?php

namespace App\Http\Controllers;

use App\Models\Orden;
use App\Models\Producto;
use App\Services\PaypalService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PayPalHttp\HttpException;
use App\Notifications\CompraNotification;

class PaymentController extends Controller
{

    private $paypalService = null;

    function __construct(PaypalService $paypalService)
    {
        $this->paypalService = $paypalService;
    }

    function payWithPaypal(Request $request)
    {
        $carrito = $request->carrito;
        $ids = array_keys($carrito);

        $productos = Producto::whereIn('id', $ids)->get();

        $orden = new Orden();
        $orden->user_id = Auth::user()->id;
        $orden->save();
        $orden->productos()->attach($productos);

        try {
            $response = $this->paypalService->createOrder($orden->id, $carrito, $productos);
            $orden->paypal_orderid = $response->result->id;
            $orden->save();

            foreach ($response->result->links as $link) {
                if ($link->rel == 'approve') {
                    return redirect()->away($link->href);
                }
            }
        } catch (HttpException $ex) {
            dd($ex->getMessage());
        }
    }


    function captureOrder(Request $request, Orden $orden)
    {
        try {
            $response = $this->paypalService->captureOrder($orden->paypal_orderid);

            if ($response->result->status == 'COMPLETED') {
                return redirect()->route('tienda')->with('message', 'La compra se ha realizado con éxito')->with('alert_type', 'success');
                $orden->user->notify(new CompraNotification($orden));
            }

            return redirect()->route('tienda')->with('message', 'No se ha podido realizar el pago.')->with('alert_type', 'error');
        } catch (HttpException $ex) {
            dd($ex);
        }
    }

    function cancelOrder(Orden $orden)
    {
        $orden->delete();
        return redirect()->route('tienda')->with('message', 'Compra cancelada')->with('alert_type', 'info');
    }
}
