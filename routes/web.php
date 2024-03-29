<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Profile\ImageController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CarrinhoController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminAuthController;

Route::get('/', function () {
    return view('welcome');
})->name('/');

Route::get('/dashboard', function () {
    return view('welcome');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/quem-somos', function () {
    return view('quem-somos');
})->name('quem-somos');

Route::get('/catalogos', function () {
    return view('catalogos');
})->name('catalogos');

Route::get('/contato', function () {
    return view('contato');
})->name('contato');

Route::get('/teste', function () {
    return view('teste');
})->name('teste');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::patch('/profile/image', [ImageController::class, 'update'])->name('profile.image');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/checkout', [CheckoutController::class, 'resumoPedido'])->name('listarCheckout');

    Route::post('/pedidos', [OrderController::class, 'store'])->name('novoPedido');
    Route::get('/pedidos', [OrderController::class, 'index'])->name('pedidos');

    
});

Route::get('/produtos', [ProductController::class, 'index'])->name('produtos');
Route::get('/produtos/{id}', [ProductController::class, 'show'])->name('detalhes');

Route::get('/carrinho', [CarrinhoController::class, 'carrinhoLista'])->name('exibircarrinho');
Route::post('/carrinho', [CarrinhoController::class, 'adicionaCarrinho'])->name('addcarrinho');
Route::post('/remover', [CarrinhoController::class, 'removeCarrinho'])->name('removecarrinho');
Route::post('/atualizar', [CarrinhoController::class, 'atualizaCarrinho'])->name('atualizacarrinho');
Route::get('/limpar', [CarrinhoController::class, 'limpaCarrinho'])->name('limpacarrinho');


Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.home');
    Route::post('/admin/pedidos/{orderId}/update', [AdminController::class, 'update'])->name('admin.orders.update');
});

Route::get('/admin/login', [AdminAuthController::class, 'loginForm'])->name('admin.login');
Route::post('/admin/login', [AdminAuthController::class, 'login'])->name('admin.login.submit');


require __DIR__.'/auth.php';