@extends('errors::illustrated-layout')

@section('code', '404')
@section('title', __('Página no encontrada'))

@section('image')
<style>
    #apartado-derecho{
        text-align:center;
    }
    ul{
        text-decoration: none !important;
        list-style: none;
        color: black;
        font-weight: bold;
    }
    .a{
        background-color: #0000ff;
    }  
</style>
<div id="apartado-derecho" style="background-color: #0000ff;" class="absolute pin bg-cover bg-no-repeat md:bg-left lg:bg-center">
    <h2 id="color-text">Encuentra lo que buscas en nuestro menú:</h2>
    
    <nav> 
                <ol >
                    <li class="breadcrumb-item"><a href="{{ url('http://127.0.0.1:8000/')}}">INICIO</a></li>
                    <li><a href="{{ url('/contact')}}">CONTÁCTENOS</a></li>
                    <li><a href="{{ url('')}}">CURSOS</a></li>
                    <li><a href="{{ url('/nosotros')}}"class="active" >NOSOTROS</a></li>
                     <li><a href="{{ url('/login')}}">INICIO DE SESION</a></li>
                </ol>
    </nav>
    
</div>
@endsection

@section('message', __('No hemos encontrado la página que buscas.'))