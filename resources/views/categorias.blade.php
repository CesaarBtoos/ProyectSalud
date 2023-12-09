@extends('layouts.fronted.categorias')
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
                <li><a href="{{ url('/')}}" >INICIO</a></li>
                <li><a href="{{ url('/contact')}}">CONTÁCTENOS</a></li>
                <li><a class="active" href="{{ url('/productos')}}">Registro</a></li>
                <li><a href="{{ url('/nosotros')}}">NOSOTROS</a></li>
                <li><a href="{{ url('/login')}}">INICIO DE SESION</a></li>>
            </ul>
        </nav>
        <div class="clearfix"></div>
    </header>
@endsection
@section('banner')



@endsection 
@section('products')
<div class="conatiner">
    <div class="form">
        <div class="contact-info">
                 <h3 class="contact_tittle">ESTAMOS UBICADOS EN</h3>
                <p class="contact_text">Un punto estratégico para una mejor atención a 
                    nuestros clientes para que puedan realizar su compra o 
                    recoger sus productos.   

            <div class="contactos_info">
                <div class="contact_information">
                    <i class="fas fa-2x fa-map-marker-alt"></i>
                    <p>AV.MUY MUY LEJANO </p>
                </div>
                <div class="contact_information">
                <i class="fas fa-2x fa-phone-volume"></i>
                    <p>999999999</p>
                </div>
                <div class="contact_information">
                    <i class="far fa-2x fa-envelope"></i>
                    <p>+salud@gmail.com</p>
                </div>
            </div>
            <div class="social_media">
                <p>REDES SOCIALES</p>
                <div class="social-icons">
                    <a href="" target="none">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="" target="none">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="" target="none">
                        <i class="fab fa-twitter-square"></i>
                    </a>
                    <a href="" target="none">
                        <i class="fab fa-linkedin"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="contact-form">
            <form action="" autocomplete="off">
                <h3 class="contact_tittle">Comunicate con nosotros</h3>
                <div class="input-container ">
                    <input type="text" name="name" class="contact_input" placeholder="Nombre">
                </div>
                <div class="input-container">
                    <input type="text" name="email" class="contact_input" placeholder="Email">
                </div>
                <div class="input-container">
                    <input type="tel" name="celular" class="contact_input" placeholder="Celular">
                </div>
                <div class="input-container">
            
                   </div>
                <input type="submit" value="Enviar" class="contact_btn">
            </form>
        </div>
    </div>
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