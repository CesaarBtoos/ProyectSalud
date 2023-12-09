<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Register extends Controller
{
    public function index (){
        return view('registerusuario');
    }
    public function create()
    {
        $roles = Role::all();
        
        return view('registerusuario',
             ['roles' => $roles]);
    }
    
    public function crea()
    {
        

    }
    public function registerusuario()
    {
        $roles = Role::all();
        return view('registerusuario',['roles' => $roles]);  

    }
   

    public function store(UserFormRequest $request)
    {
        $usuario = new User();

        $usuario->name = request('name'); 
        $usuario->email = request('email');
        $usuario->especialidad  = request('nameEs');
        $usuario->municipio= request('nameMu');
        $usuario->celular = request('celular');
        $usuario->password = bcrypt(request('password'));

        $usuario->save();

        $usuario->asignarRol($request->get('rol'));

        return redirect('registerusuario');
    }

    public function show($id)
    {
        return view('usuarios.show',['user' => User::findOrFail($id)]);
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        $roles = Role::all(); 
        return view('usuarios.edit',['user' => $user, 'roles' => $roles]);
    }

    public function update(UserEditFormRequest $request, $id)
    {
        $this->validate(request(),['email' =>['required', 'email','max:225','unique:users,email,' . $id]]);
        $usuario = User::findOrFail($id);
        $usuario->name = $request->get('name');
        $usuario->email = $request->get('email'); 
        $usuario->especialidad= $request->get ('nameEs');
        $usuario->municipio = $request->get ('nameMu');
        $usuario->celular = $request->get('celular');

        $pass = $request->get('password');
        if($pass !=null){
            $usuario->password = bcrypt($request->get('password')); 
        }else{
            unset($usuario->password);
        }
        // paar que actualizar roles y usuarios
        //si tiene rol actualizamos 
        //si no tiene rol se le asigna uno
        $role = $usuario->roles;
        if(count($role) > 0){
            $role_id = $role[0]->id;
            User::find($id)->roles()->updateExistingPivot($role_id, ['role_id' => $request->get('rol')]);
        }else{
            $usuario->asignarRol($request->get('rol'));
        }

        $usuario->update();

        return redirect('/usuarios');
    }

    public function destroy($id)
    {
        $usuario = User::findOrFail($id);
        $usuario->delete();
        return redirect('/usuarios');
    }

}
