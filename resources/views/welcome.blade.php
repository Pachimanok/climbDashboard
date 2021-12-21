<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1,
      shrink-to-fit=no">

  <link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets/assets/img/apple-icon.png')}}">
  <link rel="icon" type="image/png" href="{{asset('assets/assets/img/favicon.png')}}">
  <title>CLIMB :: Escuela de RRHH</title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css"
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="{{asset('assets/assets/css/nucleo-icons.css')}}" rel="stylesheet" />
  <link href="{{asset('assets/assets/css/nucleo-svg.css')}}" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">

  <!-- CSS Files -->
  <link id="pagestyle" href="{{asset('assets/assets/css/material-kit.css?v=3.0.0')}}" rel="stylesheet" />

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
 
</head>



<body class="index-page bg-gray-200">
    @include('sections.header')
@include('sections.navbar')

<div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6">
  <div class="container">
    @include('sections.quienesSomos') 
  </div>
@include('sections.profesores')
@include('sections.empresas')

@include('sections.cursos')
 
 <section id="contacto">
  <div class="container mt-7 py-4">
    <div class="row">
      <div class="col-lg-7 mx-auto d-flex justify-content-center flex-column">
        <h3 class="text-center">Contactanos</h3>
        <form role="form" id="contact-form" method="post" autocomplete="off">
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="input-group input-group-dynamic mb-4">
                  <label class="form-label">First Name</label>
                  <input class="form-control" aria-label="First Name..." type="text" >
                </div>
              </div>
              <div class="col-md-6 ps-2">
                <div class="input-group input-group-dynamic">
                  <label class="form-label">Last Name</label>
                  <input type="text" class="form-control" placeholder="" aria-label="Last Name..." >
                </div>
              </div>
            </div>
            <div class="mb-4">
              <div class="input-group input-group-dynamic">
                <label class="form-label">Email Address</label>
                <input type="email" class="form-control">
              </div>
            </div>
            <div class="input-group mb-4 input-group-static">
              <label>Your message</label>
              <textarea name="message" class="form-control" id="message" rows="4"></textarea>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-check form-switch mb-4 d-flex align-items-center">
                  <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" checked="">
                  <label class="form-check-label ms-3 mb-0" for="flexSwitchCheckDefault">I agree to the <a href="javascript:;" class="text-dark"><u>Terms and Conditions</u></a>.</label>
                </div>
              </div>
              <div class="col-md-12">
                <button type="submit" class="btn bg-gradient-dark w-100">Send Message</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
</div>
</div>
  <!-- ---- START FOOTER 4 dark w/ 2 cols ---- -->
<footer class="footer py-4 my-11 bg-gradient-dark">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-3 text-start my-auto">
        <p class="mb-0 text-white text-sm">
          Copyright © <script>document.write(new Date().getFullYear())</script> Material Design by Creative Tim.
        </p>
      </div>
      <div class="col-lg-5 col-md-8 ms-auto text-end">
        <ul class="nav flex-row ms-n3 align-items-center mt-4 mt-sm-0">
          <li class="nav-item">
            <a class="nav-link text-white opacity-8" href="https://www.creative-tim.com" target="_blank">
              Home
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white opacity-8" href="https://www.creative-tim.com/presentation" target="_blank">
              About
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link text-white opacity-8" href="https://www.creative-tim.com/blog" target="_blank">
              Blog
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white opacity-8" href="https://www.creative-tim.com" target="_blank">
              Services
            </a>
          </li>

          <li class="nav-item ms-auto">
            <button type="button" class="btn bg-gradient-info mb-0 ms-3 ms-sm-0 mt-3 mt-sm-0">Get in Touch</button>
          </li>
        </ul>
      </div>
    </div>
  </div>
</footer>
<!-- ---- END FOOTER 4 dark w/ 2 cols ---- -->
    <!--   Core JS Files   -->
    <script src="{{ asset('assets/assets/js/core/popper.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/assets/js/core/bootstrap.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/assets/js/plugins/perfect-scrollbar.min.js')}}"></script>
    <!--  Plugin for TypedJS, full documentation here: https://github.com/inorganik/CountUp.js -->
    <script src="{{ asset('assets/assets/js/plugins/countup.min.js')}}"></script>
    <script src="{{ asset('assets/assets/js/plugins/choices.min.js')}}"></script>
    <script src="{{ asset('assets/assets/js/plugins/prism.min.js')}}"></script>
    <script src="{{ asset('assets/assets/js/plugins/highlight.min.js')}}"></script>
    <!--  Plugin for Parallax, full documentation here: https://github.com/dixonandmoe/rellax -->
    <script src="{{ asset('assets/assets/js/plugins/rellax.min.js')}}"></script>
    <!--  Plugin for TiltJS, full documentation here: https://gijsroge.github.io/tilt.js/ -->
    <script src="{{ asset('assets/assets/js/plugins/tilt.min.js')}}"></script>
    <!--  Plugin for Selectpicker - ChoicesJS, full documentation here: https://github.com/jshjohnson/Choices -->
    <script src="{{ asset('assets/assets/js/plugins/choices.min.js')}}"></script>
    <!--  Plugin for Parallax, full documentation here: https://github.com/wagerfield/parallax  -->
    <script src="{{ asset('assets/assets/js/plugins/parallax.min.js')}}"></script>
    <!-- Control Center for Material UI Kit: parallax effects, scripts for the example pages etc -->
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>
    <script src="{{ asset('assets/assets/js/material-kit.min.js?v=3.0.0')}}" type="text/javascript"></script>
    <script type="text/javascript">

      if (document.getElementById('state1')) {
        const countUp = new CountUp('state1', document.getElementById("state1").getAttribute("countTo"));
        if (!countUp.error) {
          countUp.start();
        } else {
          console.error(countUp.error);
        }
      }
      if (document.getElementById('state2')) {
        const countUp1 = new CountUp('state2', document.getElementById("state2").getAttribute("countTo"));
        if (!countUp1.error) {
          countUp1.start();
        } else {
          console.error(countUp1.error);
        }
      }
      if (document.getElementById('state3')) {
        const countUp2 = new CountUp('state3', document.getElementById("state3").getAttribute("countTo"));
        if (!countUp2.error) {
          countUp2.start();
        } else {
          console.error(countUp2.error);
        };
      }
    </script>
</body>

</html>