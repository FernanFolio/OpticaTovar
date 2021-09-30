<?php

namespace App\Services;

use App\Models\Orden;
use PayPalCheckoutSdk\Core\PayPalHttpClient;
use PayPalCheckoutSdk\Core\SandboxEnvironment;
use PayPalCheckoutSdk\Orders\OrdersCreateRequest;
use PayPalCheckoutSdk\Orders\OrdersCaptureRequest;

class PaypalService
{
    private $paypalClient = null;

    function __construct()
    {
        $clientId = env('PAYPAL_CLIENT_ID');
        $clientSecret = env('PAYPAL_CLIENT_SECRET');
        //en produccion se pasa una instancia de ProductionEnviroment
        $this->paypalClient = new PayPalHttpClient(new SandboxEnvironment($clientId, $clientSecret));
    }

    function createOrder($orderId, $carrito, $productos)
    {
        $orderRequest = new OrdersCreateRequest();
        $orderRequest->prefer('return=representation');
        $orderRequest->body = $this->createOrderBody($carrito, $productos, $orderId);
        return  $this->paypalClient->execute($orderRequest);
    }


    function captureOrder($paypalOrderId)
    {
        $orderRequest = new OrdersCaptureRequest($paypalOrderId);
        $orderRequest->prefer('return=representation');
        return $this->paypalClient->execute($orderRequest);
    }

    private function createOrderBody($carrito, $productos, $ordenId)
    {
        $total = 0;
        $item_total = 0;
        $items = [];

        foreach ($productos as $producto) {
            $cantidad = (int)($carrito[$producto->id]['cantidad']);
            $total += $cantidad * $producto->precio;
            $precio_unitario = $producto->precio * 0.84;
            $item_total += $precio_unitario * $cantidad;

            $item = [
                "name" => $producto->descripcion,
                "quantity" => $cantidad,
                "sku" => $producto->detalle->sku,
                "unit_amount" => [
                    "currency_code" => 'MXN',
                    "value" => number_format($precio_unitario, 2, '.', '')
                ],
                "tax" => [
                    "currency_code" => 'MXN',
                    "value" => number_format($producto->precio - $precio_unitario, 2, '.', '')
                ],
            ];

            $items[] = $item;
        }

        //hacer el desgloce
        $tax_total = $total * 0.16;
        $shipping = 0;
        $handling = 0;
        $insurance = 0;
        $shipping_discount = 0;
        $discount = 0;

        $breakdown = [
            'item_total' => [
                'currency_code' => 'MXN',
                'value' => number_format($item_total, 2, '.', '')
            ],
            'tax_total' => [
                'currency_code' => 'MXN',
                'value' => number_format($tax_total, 2, '.', '')
            ],
            "shipping" => [
                "currency_code" => 'MXN',
                "value" => number_format($shipping, 2, '.', ''),
            ],
            "handling" => [
                "currency_code" => 'MXN',
                "value" => number_format($handling, 2, '.', ''),
            ],
            "insurance" => [
                "currency_code" => 'MXN',
                "value" => number_format($insurance, 2, '.', ''),
            ],
            "shipping_discount" => [
                "currency_code" => 'MXN',
                "value" => number_format($shipping_discount, 2, '.', ''),
            ],
            "discount" => [
                "currency_code" => 'MXN',
                "value" => number_format($discount, 2, '.', ''),
            ],
        ];

        // $orden = Orden::find($ordenId);
        // $orden->total = $total;
        // $orden->save();

        return [
            "intent" => "CAPTURE",
            "purchase_units" => [[
                "reference_id" => uniqid(),
                "description" => "Compra realizada a Optica Tovar",
                "amount" => [
                    "currency_code" => "MXN",
                    "value" => number_format($total, 2, '.', ''),
                    "breakdown" => $breakdown
                ],
                "items" => $items,
            ]],
            "application_context" => [
                "cancel_url" => route('paypal.cancel', ['orden' => $ordenId]),
                "return_url" => route('paypal.success', ['orden' => $ordenId])
            ]
        ];
    }
}
