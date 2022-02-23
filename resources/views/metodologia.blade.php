<!DOCTYPE html>
<html lang="es" >
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets/assets/img/apple-icon.png')}}">
  <link rel="icon" type="image/png" href="{{asset('assets/assets/img/favicon.png')}}">
  <title>
    CLIMB :: Metodologias
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="{{asset('assets/assets/css/nucleo-icons.css" rel="stylesheet')}}" />
  <link href="{{asset('assets/assets/css/nucleo-svg.css" rel="stylesheet')}}" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="{{asset('assets/assets/css/material-kit.css?v=3.0.0')}}" rel="stylesheet" />
</head>

<body class="about-us bg-gray-200">
  @include('sections.navbar')
  <!-- -------- START HEADER 7 w/ text and video ------- -->
  <header class="bg-gradient-dark">
    <div class="page-header min-vh-50" style="background-image: url('{{ asset('climb/escritorio.jpg')}} ');">
      <span class="mask bg-gradient-dark opacity-6"></span>
      <div class="container">
        <div class="row justify-content-center" style="margin-top: 10rem;">
              
          <div class="col-lg-8 text-center mx-auto my-auto mb-7">
            <h1 class="text-white">Metodologías</h1>
           {{--  <p class="lead mb-4 text-white opacity-8">Clases en vivo con los profesores más experimentados.</p> --}}
          
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- -------- END HEADER 7 w/ text and video ------- -->
  <div class="card card-body shadow-xl mx-3 mx-md-4 mt-n6">
   
    <section class="pb-5 position-relative  mx-n3">
      <div class="container">
        <div class="row">
          <div class="col-md-8 text-start mb-5 mt-5">
            <h3 class="text-white z-index-1 position-relative">Clases en vivo con los profesores más experimentados</h3>
            {{-- <p class="text-white opacity-8 mb-0">Clases en vivo con los profesores más experimentados</p> --}}
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 col-12">
            <div class="card card-profile mt-4" style="min-height: 34rem;">
              <div class="row">
                <div class="col-lg-4 col-md-6 col-12 mt-n5">
                  <a href="javascript:;">
                    <div class="p-3 pe-md-0">
                      <img class="w-100 border-radius-md shadow-lg" src="{{ asset('climb/onhome.jpg')}}" alt="image">
                    </div>
                  </a>
                </div>
                <div class="col-lg-8 col-md-6 col-12 my-auto">
                  <div class="card-body ps-lg-0" style="min-height: 10rem;">
                    <h6 class="text-info">METODOLOGÍA ÚNICA</h6>
                    <p class="mb-0">No pertenecemos a la educación formal y oficial.</p>
                    <h6 class="text-info mt-3">ON LINE</h6>
                    <p class="mb-0">Clases en línea, con material complementario y recursos digitales disponible todo el tiempo desde cualquier dispositivo.</p>
                    <h6 class="text-info mt-3">ON LIVE</h6>
                    <p class="mb-0">lases en vivo, pero grabadas para los alumnos que eventualmente no puedan asistir a la clase en directo.</p>
                    <h6 class="text-info mt-3">JUNTOS</h6>
                    <p class="mb-0">Aprender de otros y con otros en las clases en vivo, foros y chats.</p>
                    <h6 class="text-info mt-3">PRÁCTICA</h6>
                    <p class="mb-0">Aprender haciendo.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-12">
            <div class="card card-profile mt-4" style="min-height: 34rem;">
              <div class="row">
                <div class="col-lg-4 col-md-6 col-12 mt-n5">
                  <a href="javascript:;">
                    <div class="p-3 pe-md-0">
                      <img class="w-100 border-radius-md shadow-lg" src="{{ asset('climb/profesoronline.jpg')}}" alt="image">
                    </div>
                  </a>
                </div>
                <div class="col-lg-8 col-md-6 col-12 my-auto">
                  <div class="card-body ps-lg-0" style="min-height: 10rem;">
                    <h6 class="text-info">PROFESORES EXPERTOS</h6>
                    <p class="mb-0">Contenidos y clases impartidas por reconocidos profesionales de los Recursos Humanos con experiencia real en empresas privadas </p>
                    <h6 class="text-info mt-3">CONCRETO</h6>
                    <p class="mb-0">Proceso educativo basado en las necesidades reales de desarrollo y mejora de la gestión de recursos humanos, en lo técnico y en lo humano.</p>
                    <h6 class="text-info mt-3">GRUPOS REDUCIDOS.</h6>
                    <p class="mb-0">Sistema de enseñanza personalizado.</p>
                    <h6 class="text-info mt-3">PRÁCTICA PROFESIONAL.</h6>
                    <p class="mb-0">Opcional.</p>
                    <h6 class="text-info mt-3">LEXIBILIDAD.</h6>
                    <p class="mb-0">Cursos y Carreras adaptadas a tu nivel, interés, finalidad o necesidad de formación.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </section>
    <!-- -------- END Features w/ pattern background & stats & rocket -------- -->
    
    
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <!--  Plugin for TypedJS, full documentation here: https://github.com/inorganik/CountUp.js -->
  <script src="../assets/js/plugins/countup.min.js"></script>
  <!--  Plugin for Parallax, full documentation here: https://github.com/wagerfield/parallax  -->
  <script src="../assets/js/plugins/parallax.min.js"></script>
  <!-- Control Center for Material UI Kit: parallax effects, scripts for the example pages etc -->
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>
  <script src="../assets/js/material-kit.min.js?v=3.0.0" type="text/javascript"></script>
  <script>
    // get the element to animate
    var element = document.getElementById('count-stats');
    var elementHeight = element.clientHeight;

    // listen for scroll event and call animate function

    document.addEventListener('scroll', animate);

    // check if element is in view
    function inView() {
      // get window height
      var windowHeight = window.innerHeight;
      // get number of pixels that the document is scrolled
      var scrollY = window.scrollY || window.pageYOffset;
      // get current scroll position (distance from the top of the page to the bottom of the current viewport)
      var scrollPosition = scrollY + windowHeight;
      // get element position (distance from the top of the page to the bottom of the element)
      var elementPosition = element.getBoundingClientRect().top + scrollY + elementHeight;

      // is scroll position greater than element position? (is element in view?)
      if (scrollPosition > elementPosition) {
        return true;
      }

      return false;
    }

    var animateComplete = true;
    // animate element when it is in view
    function animate() {

      // is element in view?
      if (inView()) {
        if (animateComplete) {
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
          animateComplete = false;
        }
      }
    }

    if (document.getElementById('typed')) {
      var typed = new Typed("#typed", {
        stringsElement: '#typed-strings',
        typeSpeed: 90,
        backSpeed: 90,
        backDelay: 200,
        startDelay: 500,
        loop: true
      });
    }
  </script>
  <script>
    if (document.getElementsByClassName('page-header')) {
      window.onscroll = debounce(function() {
        var scrollPosition = window.pageYOffset;
        var bgParallax = document.querySelector('.page-header');
        var oVal = (window.scrollY / 3);
        bgParallax.style.transform = 'translate3d(0,' + oVal + 'px,0)';
      }, 6);
    }
  </script>
</body>

</html>