@extends('layouts.fronted.index')
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
                <li><a href="" class="active">INICIO</a></li>
                <li><a href="{{ url('/contact')}}">CONTÁCTENOS</a></li>
                <li><a href="{{ url('/nosotros')}}">NOSOTROS</a></li>
                <li><a href="{{ url('/login')}}">INICIO DE SESION</a></li>
            </ul>
        </nav>
        <div class="clearfix"></div>
    </header>
@endsection
@section('banner')
<div class="text">
  
 <form class="form-inline ml-3 float-right">
          
      </form>
       
        
    </div>
     <div class="products_body center">
         <div class="wrapper">
             <div class="container">
             <img src="{{ asset('img/carrucel/HUA.jpg')}}" alt="" class="top">
    
                
             <div class="bottom">
                     <div class="left">
                         <div class="details">
                             <h1 class="txt_products">Clinica Huasteca</h1> 
                          </div>
                     </div>
                 </div>
             </div>
             <div class="inside">
                 <div class="icon">
                     <i class="far fa-eye"></i>
                 </div>
                 <div class="contents">
                     <h1>Clinica Huasteca</h1>
                     <p>Descripcion</p>
                     <br>
                     <p>La mejor de la region al asegurarnos de contar con todo el material adecuado para nuestros pacientes</p>
                 </div>
             </div>
        </div>

        <div class="wrapper">
            <div class="container">
            <img src="{{ asset('img/carrucel/HUEJU.jpg')}}" alt="" class="top">
             <div class="bottom">
                    <div class="left">
                        <div class="details">
                            <h2 class="txt_products">Clinica Huejutla</h2>
                            
                        </div>
                        <div class="buy">
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="inside">
                <div class="icon">
                    <i class="far fa-eye"></i>
                </div>
                <div class="contents">
                    <h1>Clinica Huejutla</h1>
                    <p>
                    <p>    
                    <p>Descripcion</p>
                    <br>
                    <br>
                    <p>Contamos con las instalaciones aptas para el resguardo de tu salud<p>
                </div>
            </div>
       </div>
       <div class="wrapper">
            <div class="container">
            <img src="{{ asset('img/perfil1.jpg')}}" alt="" class="top">
             <div class="bottom">
                    <div class="left">
                        <div class="details">
                            <h2 class="txt_products">Dra. Jadeli Hernandez Hernandez</h2>
                            
                        </div>
                        <div class="buy">
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="inside">
                <div class="icon">
                    <i class="far fa-eye"></i>
                </div>
                <div class="contents">
                    <h1>Dra. Jadeli Hernandez Hernandez</h1>
                    <p>Descripcion</p>
                    <br>
                    <p>Una especialista en traumatologia, con años de expriencia en el area</p>
                </div>
            </div>
       </div>
       <div class="wrapper">
            <div class="container">
            <img src="{{ asset('img/perfil2.jpg')}}" alt="" class="top">
             <div class="bottom">
                    <div class="left">
                        <div class="details">
                            <h2 class="txt_products">Dra. Jazmin Hernandez Hernandez</h2>
                            
                        </div>
                        <div class="buy">
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="inside">
                <div class="icon">
                    <i class="far fa-eye"></i>
                </div>
                <div class="contents">
                    <h1>Dra. Jazmin Hernandez Hernandez</h1>
                    <p>Descripcion</p>
                    <br>
                    <p>Con años de profesionalismo la Doctora Jazmin, es la mejor de su area compromentida con el cuidado de sus pacientes<p>
                </div>
            </div>
       </div>

       <div class="wrapper">
        <div class="container">
        <img src="{{ asset('img/carrucel/kul.jpg')}}" alt="" class="top">
             <div class="bottom">
                <div class="left">
                    <div class="details">
                        <h2 class="txt_products">Contamos con los mejores doctores de la Huasteca Hidalguense</h2>
                        
                    </div>
                    <div class="buy">
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="inside">
            <div class="icon">
                <i class="far fa-eye"></i>
            </div>
            <div class="contents">
                <h1>Clinica Hidalgo</h1>
                <p>Descripcion</p>
                <br>
                <p>Nuestras instalacion aseguran un muy grato cuidado de nuestros pacientes atendiendo en cada una de sus necesidades</p>
            </div>
        </div>
        
   </div>

</div>


@endsection 
@section('cards_service')
<div class="container_cards">
    <div class="col-12">
		<div class="testimonial-title">
            <h3>RECOMENDACIÓNES</h3>
            <hr class="style1">
	</div>
</div>  
    <div class="row_cards">
     
        <div class="col-md-3 col-sm-6 mb-3 text-center">
          
        <!--<h5 class="title_services">Recomendación</h5>-->
            <div class="single-content_service">
             
                   <div class="service">
                   <a href="#" class="logo">
                     <img  class="imgtamaño" src="{{ asset('img/enfe5.jpeg')}}">
                    </a><br>
                    <br>
                    <br>
                    <p class="description_services">Dr. Nereo Hernandez Olguín</p><br>
                    <a href="" class="btn_modal_wel mt-5" data-toggle="modal" data-target=".bd-example-modal-x3">Perfil</a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 mb-3 text-center">
            <div class="single-content_service">
                <div class="service">
                    <a href="#" class="logo">
                     <img  class="imgtamaño" src="{{ asset('img/enfe2.jpg')}}">
                    </a><br><br><br>
                    <p class="description_services">Dra. Cindy Marinel Rendon, Medica-Cirujana.</p><br>
                    <a href="" class="btn_modal_wel mt-5" data-toggle="modal" data-target=".bd-example-modal-xl2">Perfil</a>  
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 mb-3 text-center">
            <div class="single-content_service">
                <div class="service">
                    <a href="#" class="logo">
                     <img  class="imgtamaño" src="{{ asset('img/enfe1.jpg')}}">
                    </a><br><br><br>
                    <p class="description_services">Dra. Jacqueline Hernandez Hernandez, Nutriologa.</p>
                    <a href="" class="btn_modal_wel mt-5" data-toggle="modal" data-target=".bd-example-modal-xl4">Perfil</a> 
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 mb-3 text-center">
            <div class="single-content_service">
                <div class="service">
                    <a href="#" class="logo">
                     <img  class="imgtamaño" src="{{ asset('img/enfe4.jpg')}}">
                    </a><br><br><br>
                    <p class="description_services">Dra. Cesaria Hernandez Hernandez, Psicologa.</p>
                    <a href="" class="btn_modal_wel mt-5" data-toggle="modal" data-target=".bd-example-modal-xl">Perfil</a>          
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<!--CATEGORIAS-->
@section('cards')
<div class="container_cards">    
    <div class="row_cards">
        <div class="col-md-3 col-sm-6 mb-3">
            <div class="single-content">
                <img src="{{ asset('img/LICENCIA-BASICA.jpg')}}" alt="Categorias Higienika Oficce Perú">
                <div class="text-content">
                    <h3>LICENCIA</h3>
                    <hr class="style2">
                    <h5>BASICA</h5>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 mb-3">
            <div class="single-content">
                <img src="{{ asset('img/LICENCIA-FAMILIAR.jpg')}}" alt="Categorias Higienika Oficce Perú">
                <div class="text-content">
                    <h3>LICENCIA </h3>
                    <hr class="style2">
                    <h5>BUSINESS</h5>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 mb-3">
            <div class="single-content">
                <img src="{{ asset('img/LICENCIA-PREMIUM.jpg')}}" alt="Categorias Higienika Oficce Perú">
                <div class="text-content">
                    <h3>LICENCIA</h3>
                    <hr class="style2">
                    <h5>ENTERPRISE</h5>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('title5')
<!--<div class="col-12 pt-2" style="background: #FF8525">
		<div class="proveedor-title">
			<h5 style="color: black">CONOCE A</h5>
            <h3 style="color: white">NUESTROS PROVEEDORES</h3>
            <hr class="style5">
	    </div>
</div>-->
@endsection
@section('Proveedores')
<!--<div class="container_prove">
    <div class="carousel_prove">
        <div class="buttons_prove">
            <span class="prev"> &#8592; </span>
            <span class="next"> &#8594; </span>
        </div>
        @foreach($proveedores as $proveedore)
        <div class="item">
            <div class="content">
                <h1>{{$proveedore->name}}</h1>
                <hr class="">
                <h5 style="color: white">En Este segmento puedes poner una descripción de lo mas importante acerca de tus proveedores.</h5>
            </div>
            <div class="img">
                <img src="{{asset('/img/proveedore/'.$proveedore->image)}}" alt="">
            </div>
        </div>
        @endforeach
    </div>
</div> -->
@endsection
@section('title2')
<!--<div class="col-12">
		<div class="testimonial-title">
			<h5>CONOCE</h5>
            <h3>NUESTROS CURSOS</h3>
            <hr class="style1">
	    </div>
</div>
@endsection

@section('products')
<div class="producst_body autoplay ">
    @foreach($productos as $producto)
    <div class="wrapper">
        <div class="container">
            <img class="top"src="{{asset('/img/productos/'.$producto->image)}}" alt="{{$producto->image}}">
          <div class="bottom">
            <div class="left">
              <div class="details">
                <h2 class="txt_products">{{$producto->name}}</h2>
                <p>MXN {{$producto->price}}</p>
              </div>
              <div class="buy text-center">
                <a href="{{route('product-details', $producto->slug)}}">
                    <i class="fas fa-eye"></i>
                </a>  
            </div>
            </div>
          </div>
        </div>
        <div class="inside">
          <div class="icon"><i class="fas fa-plus"></i></div>
          <div class="contents">
            <h1>{{$producto->extract}}</h1>
            <h5 style="color: white">{{$producto->descriptions}}</h5>
          </div>
        </div>
      </div>
    @endforeach 
</div>-->
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
@section('title')
<div class="col-12">
		<div class="testimonial-title">
			<h5>CONOCE</h5>
            <h3>NUESTROS PAQUETES</h3>
            <hr class="style1">
	    </div>
</div>
@endsection
<!--MODALS-->
@section('modals')
<div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div id="contenedor" class="row_p">
            <div id="naranja" class="">
                <img class="popou_img"src="{{ asset('img/enfe4.jpg')}}" alt="">
            </div>       
            <div id="verde" class="content_pagos"> 
                <h2 style="color: blue;" class=" frm_pagos text-center">Perfil. Psicologa: Cesaria Hernandez Hernandez</h2>  
                <hr class="style3">
                <br>
                <br>   
                <h5>Postgrado en la UNAM de ciencias sociales, + titulacion en ciencias sociales y comunicacion
                    La doctora atiende con profesionalismo su trabajo y es un placer para ella ayudar a sus pacientes con todo el profesionalismo posible, jurando no contar nada de sus seciones con nadie ya que seria una falta hacia su juramento hipocratico</h5>                   
            </div>
        </div>
    </div>
</div>

<div class="modal fade bd-example-modal-xl2" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div id="contenedor" class="row_p">
            <div id="naranja" class="">
                <img class="popou_img"src="{{ asset('img/enfe2.jpg')}}" alt="">
            </div>       
            <div id="verde" class="content_pagos"> 
                <h2 style="color: blue;" class=" frm_pagos text-center">Perfil. Doctora: Cindy Marinel Rendon</h2>  
                <hr class="style3">
                <br>
                <br>   
                <h5>Postgrado en la UAT de cirujia medica general, + titulacion en primeros auxilios
                    La doctora atiende con profesionalismo su trabajo y es un placer para ella ayudar a sus pacientes con todo el profesionalismo posible.</h5>                   
            </div>
        </div>
    </div>
</div>



<div class="modal fade modal fade bd-example-modal-x3" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div id="contenedor" class="row_p">
            <div id="naranja" class="">
                <img class="popou_img"src="{{ asset('img/enfe5.jpeg')}}" alt="">
            </div>       
            <div id="verde" class="content_pagos"> 
                <h2 style="color: blue;" class=" frm_pagos text-center">Perfil. Doctor: Nereo Hernandez Olguín. Especialidad: Medico General</h2>  
                <hr class="style3">
                <br>
                <br>   
                <h5>Postgrado en la UAEH en Cirujano Medico General, + titulacion con meritos en Medico Cirujano.
                    Atendiendo con gran honor a su trabajo, el doctor esta al pendiente de sus pasientes para darles una mejor calidad de vida y salud. .</h5>                   
            </div>
        </div>
    </div>
</div>

<div class="modal fade modal fade bd-example-modal-xl4" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div id="contenedor" class="row_p">
            <div id="naranja" class="">
                <img class="popou_img"src="{{ asset('img/enfe1.jpg')}}" alt="">
            </div>       
            <div id="verde" class="content_pagos"> 
                <h2 style="color: blue;" class=" frm_pagos text-center">Perfil. Nutriologa: Jacqueline Hernandez Hernandez.</h2>  
                <hr class="style3">
                <br>
                <br>   
                <h5>Postgrado en la UAEH en ciencias del cuerpo humano, + titulacion con meritos en ciencias del cuerpo humano.
                    La Nutriologa atiende con pasion y dedicacion a sus pacientes para darles las mejores recomendaciones en cuanto a la alimentacion balanceada se trata.</h5>                   
            </div>
        </div>
    </div>
</div>

@endsection