@extends('layouts.app')
  
@section('content')

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sistema Inventario UNA</title>

    <!-- Bootstrap core CSS -->

    <!-- Custom fonts for this template -->
    
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="{{ asset('vendor/magnific-popup/magnific-popup.css') }}" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/freelancer.css') }}" rel="stylesheet">
    <style type="text/css">
    #page-top #about .container .row .col-lg-4.ml-auto .lead {
	text-align: justify;
}
    #page-top #about .container .row .col-lg-4.mr-auto .lead {
	text-align: justify;
}


    #mainNav {
	display: none;
	position: absolute;
	top: 0;
	left: 0;
	background: #fff;
}
    #page-top .portfolio-modal-dialog.bg-white .container.text-center .row .col-lg-8.mx-auto .btn.btn-primary.btn-lg.rounded-pill.portfolio-modal-dismiss {
	font-style: normal;
	  font-size: 13px;
	  text-align: center;
	  width: 80px;
	  height: 40px;
}
    
    #page-top #portfolio .container .row {
	color: #2c3e50;
}
    
    #page-top  .portfolio-modal-dialog.bg-white .container.text-center .row .col-lg-8.mx-auto .mb-5 {
	text-align: justify;
	font-size: 36px;
}
    </style>
  </head>

<body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
      
    </nav>


    <!-- Portfolio Grid Section -->
<section class="portfolio" id="portfolio">
      <div class="container">
        <h2 class="text-center text-uppercase text-white">Información de Módulos</h2>
        <hr class="star-dark">
        <div class="row">
        @can('user.index')
          <div class="col-md-6 col-lg-4">
            <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-1">
              <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                  <i class="fas fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/carpetausu.png" alt="">
            </a>
          </div>
                    @endcan

          <!--@can('role.index')
          <div class="col-md-6 col-lg-4">
            <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-2">
              <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                  <i class="fas fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/carpetarole.png" alt="">
            </a>
          </div>
                    @endcan-->

          @can('lugar.index')
          <div class="col-md-6 col-lg-4">
            <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-3">
              <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                  <i class="fas fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/carpetauadm.png" alt="">
            </a>
          </div>
                    @endcan

                                @can('equipo.index')         			  

          <div class="col-md-6 col-lg-4">
            <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-4">
              <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                  <i class="fas fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/carpetaequipo.png" alt="">
            </a>
          </div>
          @endcan
                      @can('tipoequipo.index')         			  

          <div class="col-md-6 col-lg-4">
            <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-5">
              <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                  <i class="fas fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/carpetatipoequipo.png" alt="">
            </a>
          </div>
          @endcan
          @can('marcaequipo.index')
          <div class="col-md-6 col-lg-4">
            <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-6">
              <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                  <i class="fas fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/carpetamarcaequipo.png" alt="">
            </a>
          </div>
                    @endcan
@can('asignado.index')
          <div class="col-md-6 col-lg-4">
            <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-7">
              <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                  <i class="fas fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/carpetaasignado.png" alt="">
            </a>
          </div>
                    @endcan

          
        </div>
      </div>
</section>
  
<!-- Footer -->
    

<div class="copyright py-4 text-center text-white">
      <div class="container">
        <small>Copyright &copy; Your Website 2018</small>
      </div>
    </div>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-to-top d-lg-none position-fixed ">
      <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
        <i class="fa fa-chevron-up"></i>
      </a>
    </div>

    <!-- Portfolio Modals -->

    <!-- Portfolio Modal 1 -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-1">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0">Usuarios</h2>
              <img class="img-fluid mb-5" src="img/portfolio/usuarios.png" alt="">
              <p class="mb-5">La función de este módulo es mostrar y modificar los datos del personal de Coordinación de Soporte Técnico, al igual que los demás empleados de la Universidad Nacional Abierta. El administrador tiene la capacidad de asignar y cambiar los roles a cada empleado.</p>
              <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                <i class="fa fa-close"></i>
                Cerrar</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Portfolio Modal 2 -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-2">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0">Roles</h2>
              <img class="img-fluid mb-5" src="img/portfolio/roles.png" alt="">
              <p class="mb-5">La función de este módulo es crear, modificar, mostrar y eliminar los diferentes roles que serán asignados a los usuarios, los cuales limitan el acceso a los módulos y acciones que pueden realizar en cada uno.</p>
              <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                <i class="fa fa-close"></i>
                Cerrar</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Portfolio Modal 3 -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-3">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0">Unidades Administrativas</h2>
              <img class="img-fluid mb-5" src="img/portfolio/uadm.png" alt="">
              <p class="mb-5">La función de este módulo es registrar las diferentes Unidades Administrativas que conforman la Universidad Nacional Abierta, reflejándose su dirección, una breve descripción y el número telefónico.</p>
              <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                <i class="fa fa-close"></i>
                Cerrar</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Portfolio Modal 4 -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-4">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0">Inventario de Equipos</h2>
              <img class="img-fluid mb-5" src="img/portfolio/equipos.png" alt="">
              <p class="mb-5">La función de este módulo es registrar y modificar los datos referentes a los equipos que dispone la universidad. En él se refleja el tipo, la marca, el estado de operabilidad, la unidad administrativa a la que pertenece y un código particular que se le asigna a cada equipo, denominado como Código UNA.</p>
              <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                <i class="fa fa-close"></i>
                Cerrar</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Portfolio Modal 5 -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-5">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0">Tipo de Equipos</h2>
              <img class="img-fluid mb-5" src="img/portfolio/tipoequipos.png" alt="">
              <p class="mb-5">La función de este módulo es registrar y modificar los datos referentes a los diversos Tipos de Equipos que tiene la universidad, como monitores, laptops, impresoras, etc.</p>
              <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                <i class="fa fa-close"></i>
                Cerrar</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Portfolio Modal 6 -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-6">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0">Marca de Equipos</h2>
              <img class="img-fluid mb-5" src="img/portfolio/marcaequipos.png" alt="">
              <p class="mb-5">La función de este módulo es registrar y modificar los datos referentes a las diferentes marcas que ostentan los equipos. En él se verá reflejado tanto el nombre de la marca en particular con su respectivo modelo.</p>
              <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                <i class="fa fa-close"></i>
                Cerrar</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Portfolio Modal 7 -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-7">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0">Asignación de Equipos</h2>
              <img class="img-fluid mb-5" src="img/portfolio/asignado.png" alt="">
              <p class="mb-5">La función de este módulo es, como su nombre lo indica, la asignación de equipos a cada empleado dentro del sistema. El estado de estos equipos debe ser  “Operativo” para poder ser asignados.</p>
              <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                <i class="fa fa-close"></i>
                Cerrar</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    

<!-- Bootstrap core JavaScript -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Plugin JavaScript -->
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('vendor/magnific-popup/jquery.magnific-popup.min.js') }}"></script>

    <!-- Contact Form JavaScript -->
    <script src="{{ asset('js/jqBootstrapValidation.js') }}"></script>
    <script src="{{ asset('js/contact_me.js') }}"></script>

    <!-- Custom scripts for this template -->
    <script src="{{ asset('js/freelancer.min.js') }}"></script>
    
    

      <!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
            @yield('scripts')

</html>



@endsection