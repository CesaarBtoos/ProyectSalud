<?php

namespace App\Http\Controllers;

use App\Models\Perfiles;
use Illuminate\Http\Request;

class Perfil extends Controller
{
    public function listarPerfil(Request $request)
    {
        //
        $buscarpor=$request->get('buscar-por');
        $BAespecialista=$request->get('Nombre_de_especialidad');
        $BAmunicipio=$request->get('Municipio');
        if($buscarpor!=null){
            $datos['user']=users::Where('Nombre_de_especialidad','Like','%'.$buscarpor.'%')->orWhere('email','Like','%'.$buscarpor.'%')->orWhere('celular','Like','%'.$buscarpor.'%')->get();
        }else{
            $datos['user']=users::Where('Nombre_de_especialidad','Like','%'.$BAespecialista.'%')->Where('Municipio','Like','%'.$BAmunicipio.'%')->get();
        }
                
        if($datos['user']==null){
            return view('perfiles',$datos)->with('mensaje','No se encontraron resultados');;
        }else if($datos['user']!=null){
            return view('perfiles',$datos)->with('mensaje','Se encontraron resultados');;
        }
        return view('perfiles',$datos);
    }

    
}
