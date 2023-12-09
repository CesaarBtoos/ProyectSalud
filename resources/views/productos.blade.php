@extends('layouts.fronted.productos')
@section('redes')


@endsection
@section('navbar_top')

@endsection
@section('navbar')
    <header>
    <a href="#" class="logo">
    
       <img  class="imgtamaño" src="{{ asset('img/logocolor.png')}}" alt="JLDM ! Proyects">

    </a>
    <div class="menu-toggle" ></div>
        <nav>
            <ul>
                <li><a href="{{ url('/')}}" >INICIO</a></li>
                <li><a href="{{ url('/contact')}}">CONTÁCTENOS</a></li>
                <li><a class="active" href="{{ url('/productos')}}">Registrarse</a></li>
                <li><a href="{{ url('/nosotros')}}">NOSOTROS</a></li>
                <li><a href="{{ url('/login')}}">INICIO DE SESION</a></li>
            </ul>
        </nav>
        <div class="clearfix"></div>
    </header>
@endsection
@section('banner')

@endsection 
@section('products')
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
                        <input type="email" name="email" class="form-control"  placeholder="Ingrese su E-mail">
                    </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="rol">ROL</label>
                        <select name="rol" class="form-control">
                                @foreach($roles as $role)
                                    <option value="{{ $role->id}}">{{$role->name}}</option>
                                @endforeach
                        </select>
                </div>  
                <div class="form-group col-md-6">
                    <label for="celular">CELULAR</label>
                    <input type="number" class="form-control" name="celular" required autocomplete="off" placeholder="Ingrese su celular">
                </div>    
            </div> 
            <div class="row">
                    <div class="form-group col-md-6">
                        <label>CONTRASEÑA</label>
                        <input type="password"  name="password" class="form-control" placeholder="Ingrese su Contraseña">
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
@section('footer')
<footer class="footer">
    <div class="l-footer">
        <img  class="footer_img" src="{{asset('img/logocolor.png')}}" alt="JLDM | Proyectos">
        <h2 style="color: white" class="footer_img"></h2>
    <p>
    </p>
    </div>
        <ul class="r-footer">
            <li>
            <h2>Social</h2>
                <ul class="box">
                    <li class="button_social">
                        <i class="fab mr-2 fa-facebook"></i>
                        <a href="" target="_blank">Facebook</a>
                    </li>
                    <li class="button_social">
                        <i class="fab mr-2 fa-twitter"></i>
                        <a href="#">Twitter</a>
                    </li>
                    <li class="button_social">
                        <i class="fab mr-2 fa-instagram"></i>
                        <a href="" target="_blank">Instagram</a>
                    </li>
                    
                </ul>
            </li>
            <li class="features">
            <h2>Información</h2>
            <ul class="box">
                <li><a href="">Registrarme</a></li>
                <li><a href="#">Inicio de sesión</a></li>
                <li><a href="#">Políticas de Privacidad</a></li>
                <li><a href="#">Trabaja con nosotros</a></li>
            </ul>
            </li>
            <li class="features">
                
        </ul>
        <div class="b-footer">
            <p>Todos los Derechos reservados por la empresa +SALUD <a href="" target="_blank"></a></p>
        </div>
</footer>

@endsection