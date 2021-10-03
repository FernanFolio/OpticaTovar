<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InventarioController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\SiteController;
use App\Models\Orden;
use App\Models\User;
use App\Notifications\CompraNotification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Auth::routes(['verify' => true]);

/*
|--------------------------------------------------------------------------
| Public Site Routes
|--------------------------------------------------------------------------
*/
Route::get('/', [SiteController::class, 'index'])->name('index');
Route::get('/tienda', [SiteController::class, 'tienda'])->name('tienda');
Route::get('/detalle-producto/{producto}', [SiteController::class, 'detalleProducto'])->name('detalle-producto');
Route::get('/contacto', [SiteController::class, 'contacto'])->name('contacto');
Route::get('/padecimientos', [SiteController::class, 'padecimientos'])->name('padecimientos');
Route::get('/forma-cara', [SiteController::class, 'formaCara'])->name('forma-cara');
Route::get('/faqs', [SiteController::class, 'faqs'])->name('faqs');
Route::get('/pagar', [SiteController::class, 'pagar'])->name('pagar')->middleware(['verified']);
Route::get('/mis_compras', [SiteController::class, 'misCompras'])->name('mis-compras')->middleware(['verified']);

/*
|--------------------------------------------------------------------------
| Payment Routes
|--------------------------------------------------------------------------
*/
Route::post('/paypal/pay', [PaymentController::class, 'payWithPaypal'])->name('paypal.pay');
Route::get('/paypal/success/{orden}', [PaymentController::class, 'captureOrder'])->name('paypal.success');
Route::get('/paypal/cancel/{orden}', [PaymentController::class, 'cancelOrder'])->name('paypal.cancel');


Route::get('/notification', function () {
    $orden = Orden::find(41);
    $user = User::find(1);

    return (new CompraNotification($orden))->toMail($user);
});

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/
Route::middleware(['auth'])->prefix('/admin')->group(function () {
    Route::get('/', DashboardController::class)->name('dashboard');
    Route::get('/inventario', InventarioController::class)->name('inventario');

    //Proveedores
    Route::get('/proveedores', [ProveedorController::class, 'index'])->name('proveedores.index');
    Route::get('/proveedores/create', [ProveedorController::class, 'create'])->name('proveedores.create');
    Route::post('/proveedores', [ProveedorController::class, 'store'])->name('proveedores.store');
    Route::get('/proveedores/{proveedor}', [ProveedorController::class, 'show'])->name('proveedores.show');
    Route::get('/proveedores/{proveedor}/edit', [ProveedorController::class, 'edit'])->name('proveedores.edit');
    Route::put('/proveedores/{proveedor}', [ProveedorController::class, 'update'])->name('proveedores.update');
    Route::delete('/proveedores/{proveedor}', [ProveedorController::class, 'destroy'])->name('proveedores.destroy');
});
