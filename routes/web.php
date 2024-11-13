<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\DestinoController;
use App\Http\Controllers\incluyeController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\TipoVentaController;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

/*Route::get('/dash', function () {*/
/*    return Inertia::render('Dashboard');*/
/*})->middleware(['auth', 'verified'])->name('dash');*/

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/items', [ItemController::class, 'index'])->name('items.index');
Route::get('/items/{clave}/edit', [ItemController::class, 'edit'])->name('items.edit');
Route::put('/items/{clave}', [ItemController::class, 'update'])->name('items.update');

Route::get('/productos', [ProductosController::class, 'index'])->name('productos.index');
Route::get('/productos/{id}/edit', [ProductosController::class, 'edit'])->name('productos.edit');
Route::put('/productos/{id}/', [ProductosController::class, 'update'])->name('productos.update');

Route::get('/destino', [DestinoController::class, 'index'])->name('destino.index');
Route::get('/destino/{clave}/edit', [DestinoController::class, 'edit'])->name('destino.edit');
Route::put('/destino/{clave}', [DestinoController::class, 'update'])->name('destino.update');

Route::get('/incluye', [incluyeController::class, 'index'])->name('incluye.index');
Route::get('/incluye/{id}/edit', [incluyeController::class, 'edit'])->name('incluye.edit');
Route::put('/incluye/{id}/', [incluyeController::class, 'update'])->name('incluye.update');
Route::get('/incluye/create', [incluyeController::class, 'create'])->name('incluye.create');
Route::post('/incluye', [incluyeController::class, 'store'])->name('incluye.store');
Route::delete('/incluye/{id}', [IncluyeController::class, 'destroy'])->name('incluye.destroy');

Route::get('/pedidos', [PedidoController::class, 'index'])->name('pedidos.index');
Route::get('/pedidos/create', [PedidoController::class, 'create'])->name('pedidos.create');
Route::post('/pedidos', [PedidoController::class, 'store'])->name('pedidos.store');
Route::delete('/pedidos/{id}', [PedidoController::class, 'destroy'])->name('pedidos.destroy');

Route::get('/tipoventa', [TipoVentaController::class, 'index'])->name('tipoventa.index');
Route::get('/tipoventa/{id}/edit', [TipoVentaController::class, 'edit'])->name('tipoventa.edit');
Route::put('/tipoventa/{id}/', [TipoVentaController::class, 'update'])->name('tipoventa.update');

require __DIR__.'/auth.php';
