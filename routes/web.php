<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
/*NAVBAR*/
Route::get('/', 'PublicofertController@ofertas');


Route::get('/contact', function () {
    return view('contact');
});

Route::get('/perfiles', function () {
    return view('perfiles');
}) -> name('perfiles');




Route::get('/productos', 'StoreController@index');

Route::get('productos/{slug}',
[
    'as'   => 'product-details',
    'uses' => 'StoreController@show'
]);

Route::get('/backup', 'BackupController@backup')->name('backup');





Route::get('categorias/{slug}',[
    'uses' => 'StoreController@searchCategory',
])->name('searchCategory');

Route::get('/registerusuario', 'Register@index');


Route::get('/nosotros', 'ClientesController@clientes');


Route::post('/registrarusuario',[Register::class,'registerusuario'])->name('registerusuario');


Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/clientes/todas', 'ClientesController')->middleware('auth');
/* GESTION*/
Route::resource('usuarios','UserController')->middleware('auth')->middleware('auth');
Route::resource('roles','RoleController')->middleware('auth')->middleware('auth');



Route::resource('/proveedores', 'ProveedoresController')->middleware('auth');
Route::resource('/ofertas/todas', 'PublicofertController')->middleware('auth');

Route::resource('/Categorias', 'CategoriasController')->middleware('auth');
Route::resource('/producto', 'ProductoController')->middleware('auth');
Route::resource('/index', 'PublicofertController')->middleware('auth');

Route::get('/offline', function () {    
    return view('modules/laravelpwa/offline');
});

/*ADMIN*/