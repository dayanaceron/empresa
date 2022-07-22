<?php
use App\Http\Controller\ProductoController;
use App\Http\Controller\PedidoController;
use App\Http\Controller\ClienteController;
use Illuminate\Support\Facades\Route; 




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('Template.template');
});

Route::resource('Clientes', ClienteController::Class);

Route::resource('Pedidos', PedidoController::class);

Route::controller('productos', productoController::class);
