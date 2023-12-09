<?php

namespace App\Http\Controllers;

use App\Models\Clientes;
use App\Models\Productos;
use App\Models\publicofert;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
            
        $cons_user = User::count();
        $cons_ofertas = publicofert::count();
        $cons_productos = Productos::count();
        $cons_clientes = Clientes::count();
        return view('home',compact('cons_user','cons_ofertas','cons_productos','cons_clientes'));
    }
    public function show($id)
{
    $model = Model::find($id);

    if (!$model) {
        throw new NotFoundHttpException('No se encontró el modelo solicitado.');
    }

    // Resto de tu código aquí
}

}
