<?php

namespace App\Http\Controllers;
use App\Http\Requests\CategoriaEditRequest;

use App\Models\Categorias;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Role;



class CategoriasController extends Controller
{
    public function index(){

        $categorias = Categorias::all();
        return view('Categorias.index', compact('categorias'));
        
        
    }
    
    public function indexx()
    {
        $roles = Role::all();
        return view('Categorias.index',['roles' => $roles]);  
    }

    
    public function crea()
    {
            
    }
    public function create(){

        return view('Categorias.create');

    }

    public function store(Request $request){
        
        $this->validate($request,[
            'name' => 'required|unique:categorias|max:255|regex:/^[\pL\s\-]+$/u'
        ]);

        $categoria = Categorias::create([
            'name' => $request->get('name'),
            'slug' => Str::slug($request->get('name')),
            'descripcion' => $request->get('descripcion')
        ]);

        $messege = $categoria ? 'Categoria agregada correctamente' : 'la cetegoria no se agrego';
        return redirect()->route('Categorias.index')->with('messege', $messege);
    }

    public function show(Categorias $categoria){

        return $categoria;
    }

    public function edit($id){

        $categoria = Categorias::findOrFail($id);
        return view('Categorias.edit' , ['categoria' => $categoria]);
    }

    public function update(CategoriaEditRequest $request, $id){

        $categoria = Categorias::findOrFail($id);
        $categoria->name = $request->get('name');
        $categoria->slug = Str::slug($request->get('name')); 
        $categoria->descripcion = $request->get('descripcion');

        $categoria->update();

        return redirect('/Categorias');
    }

    public function destroy($id){
        
        Categorias::find($id)->delete();
        return back()->with('info', 'Se eliminó la categoría');


    }
    public function storee(UserFormRequest $request)
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

        return redirect('usuarios');
    }

    public function showw($id)
    {
        return view('usuarios.show',['user' => User::findOrFail($id)]);
    }

    public function editt($id)
    {
        $user = User::findOrFail($id);
        $roles = Role::all(); 
        return view('usuarios.edit',['user' => $user, 'roles' => $roles]);
    }

    public function updatee(UserEditFormRequest $request, $id)
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

    public function destrooy($id)
    {
        $usuario = User::findOrFail($id);
        $usuario->delete();
        return redirect('/usuarios');
    }
}
