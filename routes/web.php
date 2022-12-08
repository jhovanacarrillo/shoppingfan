<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductosController;




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

Route::get('/inicio', function () {
    return view('inicio');
})->middleware('auth');

Route::get('/', function () {
    return view('index');
});

Route::get('/categoria', function () {
    return view('categoria');
});


Route::get('/', [IndexController::class, 'inicio'])->name('index');


Route::group(['prefix' => 'admin', 'as' => 'admin' ], function(){

    Route::get('/', [App\Http\Controllers\AdminController::class, 'index']);
    Route::get('/usuarios', [App\Http\Controllers\UserController::class, 'index']);
    Route::post('/usuarios/edit', [App\Http\Controllers\UserController::class, 'editarUsuario' ]);
    Route::get('/productos',  [App\Http\Controllers\ProductosController::class, 'index']);
    Route::post('/productos/all',  [App\Http\Controllers\ProductosController::class, 'all']);
    Route::resource('productos', ProductosController::class);
    Route::resource('usuarios', UserController::class);
    Route::get('/logs', [\Rap2hpoutre\LaravelLogViewer\LogViewerController::class, 'index']);


});

Auth::routes();


Route::post('register',[RegisterController::class,'store'])
    ->name('register.store');

Route::get('login',[SessionsController::class, 'create'])
    ->middleware('guest')
    ->name('login');


Route::post('login',[SessionsController::class,'store'])
    ->middleware('guest')
    ->name('login.store');

Route::get('logout',[RegisterController::class,'destroy'])
    ->middleware('auth')
    ->name('login.destroy');


Route::get('/admin', [AdminController::class, 'index'])
->middleware('auth.admin')
->name('admin.index');

Route::get('/offline', function(){
    return view('vendor.laravelpwa.offline');
});