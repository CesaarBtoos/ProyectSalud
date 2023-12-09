@extends('layouts.fronted.nosotros')
@section('redes')


@endsection
@section('navbar_top')
<div class="header-top">
    <div class="container d-flex justify-content-between">
        <div class="d-inline-flex ml-auto">
            
        </div>
    </div>
</div>
@endsection
@section('navbar')
<header>
    <a href="#" class="logo">
        
        <img  class="imgtamaño" src="{{ asset('img/logocolor.png')}}" alt="JLDM ! Proyects">
    </a>
    <div class="menu-toggle" ></div>
        <nav>
            <ul>
                <li><a href="{{ url('http://127.0.0.1:8000/')}}">INICIO</a></li>
                <li><a href="{{ url('/contact')}}">CONTÁCTENOS</a></li>
                <li><a href="{{ url('/nosotros')}}"class="active" >NOSOTROS</a></li>
                <li><a href="{{ url('/login')}}">INICIO DE SESION</a></li>
            </ul>
        </nav>
        <div class="clearfix"></div>
    </header>
@endsection
@section('banner')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
               
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">INICIO</a></li>
                    <li class="breadcrumb-item active">Nosotros</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>


<!--<div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="hero-text">
                        <h4>PAGINA <span>WEB</span></h4>
						<br>
						<br>
                        <h1 class="tipeo1">COMUNÍCATE CON NOSOTROS</h1>
                        <h1 class="tipeo2"><span class="type"></span></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
@endsection 
@section('foda')
<div class="nosotros_body">
<div class="nosotros_container">
    <div class="nosotros_card">
        <div class="nosotros_imbBx"  data-text="¿Quienes Somos?">
            <i class="fas fa-5x fa-question"></i>
        </div>
        <div class="nosotros_content">
            <div>
                <h3>¿Quienes somos?</h3>
                <p>Somos una empresa que se dedica en implementar un buscador de especialistas y clinicas en el estado de Hidalgo
                </p>
            </div>
        </div>
    </div>

    <div class="nosotros_card">
        <div class="nosotros_imbBx" data-text="¿Nuestra Misión?">
            <i class="fas fa-5x fa-user-friends"></i>
        </div>
        <div class="nosotros_content">
            <div>
                <h3>Nuestra Misión</h3>
                <p>Establecer una relación con nuestros clientes distribuyendo informacion de los diferentes especialistas  con eficiencia y rapidez
                </p>
            </div>
        </div>
    </div>
@endsection
<!@section('clientes')
    
@endsection 
@section('footer')

@endsection
@section('title')
<!--<div class="col-12">
		<div class="testimonial-title">
			<h5>CLIENTES </h5>
            <h3>QUE CONFÍAN EN NOSOTROS</h3>
            <hr class="style1">
	    </div>
</div>-->
@endsection
@section('title2')
<div class="col-12">
		<div class="testimonial-title">
			<h5>CONOCE</h5>
            <h3>MÁS ACERCA DE NOSOTROS</h3>
            <hr class="style1">
	    </div>
</div>
@endsection