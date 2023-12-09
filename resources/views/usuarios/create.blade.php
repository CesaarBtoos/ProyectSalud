@extends('layouts.app')
@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
               
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Usuarios</a></li>
                    <li class="breadcrumb-item"><a href="#">Index</a></li>
                    <li class="breadcrumb-item active">Crear</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
<div class="container">
    <div class="row">
        <div class="col-sm-6">
        <h3>CREAR NUEVO USUARIO</h3>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </div>

    <form action="{{ url('usuarios') }}" method="POST" enctype="multipart/form-data"> 
        @csrf
            <div class="row">
                    <div class="form-group col-md-6">
                        <label for="name">NOMBRE</label>
                        <input type="text" name="name" class="form-control" placeholder="Ingrese su Nombre">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="email">E-MAIL</label>
                        <input type="email" name="email" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Ingresa un correo electronico valido"  placeholder="Ingrese su E-mail">
                    </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="rol">ROL</label>
                        <select name="rol" class="form-control">
                            <option selected disabled>Elige un rol para este usuario</option>
                                @foreach($roles as $role)
                                    <option value="{{ $role->id}}">{{$role->name}}</option>
                                @endforeach
                        </select>
                </div>
                
                    <div class="form-group col-md-6">
                        <label for="nameEs">Especialidad</label>

                        <select name="nameEs" id="Nombre_de_especialidad" class="form-control" required>
                            <option value="" selected disabled>Especialidad</option>
                            <option class="dropdown-item" value="Cardiologia">Cardiologia</option>
                            <option class="dropdown-item" value="Neurocirugia">Neurocirugia</option>
                            <option class="dropdown-item" value="Medicina laboral">Medicina laboral</option>
                            <option class="dropdown-item" value="Gastroenterologia">Gastroenterologia</option>
                            <option class="dropdown-item" value="Ginecologia">Ginecologia</option>
                            <option class="dropdown-item" value="Hematologia">Hematologia</option>
                            <option class="dropdown-item" value="Oncologia">Oncologia</option>
                            <option class="dropdown-item" value="Urologia">Urologia</option>
                            <option class="dropdown-item" value="Geriatria">Geriatria</option>
                            <option class="dropdown-item" value="Medico General">Medico General</option>
                        </select>
                    </div>
                   
                 
                    <div class="form-group col-md-6">
                        <label for="nameMu">Municipio</label>
                        
                        <select name="nameMu" id="Municipio" class="form-control" required>
                            <option value="" selected disabled>Municipio</option>
                            <option class="dropdown-item" value="Huejutla de Reyes">Huejutla de Reyes</option>
                            <option class="dropdown-item" value="Atlapexco">Atlapexco</option>
                            <option class="dropdown-item" value="Canali">Canali</option>
                            <option class="dropdown-item" value="Xochiatipan">Xochiatipan</option>
                            <option class="dropdown-item" value="Huazalingo">Huazalingo</option>
                            <option class="dropdown-item" value="Pisaflores">Pisaflores</option>
                            <option class="dropdown-item" value="Yahualica">Yahualica</option>
                            <option class="dropdown-item" value="Huautla">Huautla</option>
                            <option class="dropdown-item" value="Jaltocan">Jaltocan</option>
                            <option class="dropdown-item" value="Actopan">Actopan</option>
                        </select>
                    </div>
                  
                <div class="form-group col-md-6">
                    <label for="celular">CELULAR</label>
                    <input type="tel" maxlength="10" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" pattern="([1-9]{3})([0-9]{7})" title="Ingresa solo numeros telefonicos" class="form-control" name="celular" required autocomplete="off" placeholder="Ingrese su celular">
                </div>    
            </div> 
            <div class="row">
                    <div class="form-group col-md-6">
                        <label>CONTRASEÑA</label>
                        <input type="password"  name="password" class="form-control"  pattern="(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&#.$($)$-$_])[A-Za-z\d$@$!%*?&#.$($)$-$_]{8,}$" title="La contraseña debe contener al menos una letra mayuscula, una letra miniscula, un numero, un caracter especial y una longitud de al menos 8 caracteres" placeholder="Ingrese su Contraseña">
                    </div>
                    <div class="form-group col-md-6">
                        <label>CONFIRME CONTRASEÑA</label>
                        <input type="password" name="password_confirmation" class="form-control"  placeholder="Confirme su Contraseña">
                    </div>
            </div>
            <div class="row"> 
                <div class="form-group col-md-6">
                    <button type="submit" class="btn btn-primary">Registrar</button>
                    <button type="reset" class="btn btn-danger">Borrar todo</button>
                </div>
                
            </div>
    </form>
</div>
@endsection

<script>
    new TomSelect('#Nombre_de_especialidad',{
	create: true,
	sortField: {
		field: 'text',
		direction: 'asc'
	}
    });
    new TomSelect('#Municipio',{
	create: true,
	sortField: {
		field: 'text',
		direction: 'asc'
	}
    });
</script>