@extends('layouts.fronted.contact')
@section('redes')

@endsection
@section('navbar_top')
<div class="header-top">
    <div class="container d-flex justify-content-between">
       
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
                <li><a href="{{ url('/contact')}}"class="active">CONTÁCTENOS</a></li>
                <li><a href="{{ url('/nosotros')}}">NOSOTROS</a></li>
                <li><a href="{{ url('/login')}}">INICIO DE SESION</a></li>
            </ul>
        </nav>
        <div class="clearfix"></div>
    </header>
@endsection
@section('banner')

@endsection 
@section('cards_service')

@endsection
@section('Content_messege')
<div class="conatiner">
    <div class="form">
        <div class="contact-info">
                 <h3 class="contact_tittle">ESTAMOS UBICADOS EN</h3>
                <p class="contact_text">Huejutla Reyes Hidalgo   

            <div class="contactos_info">
                <div class="contact_information">
                    <i class="fas fa-2x fa-map-marker-alt"></i>
                    <p>COLONIA BUNGABILIAS </p>
                </div>
                <div class="contact_information">
                <i class="fas fa-2x fa-phone-volume"></i>
                    <p>7713380949</p>
                </div>
                <div class="contact_information">
                    <i class="far fa-2x fa-envelope"></i>
                    <p></p>
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
            <form action="" autocomplete="off" >
                <h3 style="text-aling: center;" class="contact_tittle">Comunicate con nosotros</h3>
                <div class="input-container ">
                    <label style="color: white;" for="nombre">Nombre:</label>
                    <input type="text" onkeyup="validar()" name="name" id="name" class="contact_input" placeholder="Nombre" required>
                </div>
                <div class="input-container">
                    <label style="color: white;" for="email">Email:</label>
                    <input type="email" onkeyup="validar()" name="email" id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" class="contact_input" placeholder="Email" required>
                    
                </div>
                <div class="input-container">
                    <label style="color: white;" for="celular">Celular:</label>
                    <input type="tel" onkeyup="validar()" maxlength="10" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" pattern="([1-9]{3})([0-9]{7})" title="Ingresa solo numeros telefonicos" name="celular" id="celular" class="contact_input" placeholder="Celular" required>
                </div>
                <div class="input-container">
                <button id="enviar" class="contact_btn">Enviar</button>
                <input id="boton" type="submit" value="submit">
                <script>

                    function validar(){
                        var validado = true;
                        elementos = document.getElementsByClassName("contact_input");
                        for(i=0;i<elementos.lenght;i++){
                            if(elementos[i].value == "" || elementos[i].value == null){
                                validado = false
                            }
                        }
                        if(validado){
                            window.location = "{{ url('/contact')}}";
                        }
                        else{
                            alert("Hay campos vacios");
                        }
                    }

                </script>
                </div>
                
            </form>
        </div>
    </div>
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
                <li><a href="{{ url('/login')}}">Inicio de sesión</a></li>
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