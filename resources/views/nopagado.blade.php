<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/assets/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('assets/assets/img/favicon.png') }}">
    <title>CLIMB :: Curso pagado {{ $curso->titulo }} </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link href="{{ asset('assets/assets/css/nucleo-icons.css" rel="stylesheet') }}" />
    <link href="{{ asset('assets/assets/css/nucleo-svg.css" rel="stylesheet') }}" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="{{ asset('assets/assets/css/material-kit.css?v=3.0.0') }}" rel="stylesheet" />
</head>

<body class="about-us bg-gray-200">
    @include('sections.navbar')
    <!-- -------- START HEADER 7 w/ text and video ------- -->
    <section>
        <div class="page-header min-vh-100">
            <div class="container">
                <div class="row">
                    <div
                        class="col-6 d-lg-flex d-none h-100 my-auto pe-0
                position-absolute top-0 start-0 text-center justify-content-center
                flex-column">
                        <div class="position-relative h-100 m-3 px-7 border-radius-lg d-flex
                  flex-column justify-content-center"
                            style="background-image:
                  url('{{ asset('assets/img/cursos/' . $curso->imagen) }}');
                  background-size: cover;" loading="lazy"></div>
                    </div>
                    <div
                        class="col-xl-5 col-lg-6 col-md-7 d-flex flex-column ms-auto
                me-auto ms-lg-auto me-lg-5">
                        <div
                            class="card d-flex blur justify-content-center shadow-lg
                  my-sm-0 my-sm-6 mt-8 mb-5">
                            <div
                                class="card-header p-0 position-relative mt-n4 mx-3 z-index-2
                    bg-transparent">
                                <div
                                    class="bg-gradient-warning shadow-primary border-radius-lg
                      p-3">
                                    <h3 class="text-white text-primary mb-0">Algo salió mal</h3>
                                </div>
                            </div>
                            <div class="card-body">
                                <p class="pb-3">
                                    Hola {{ $cliente->nombre }},
                                </p>
                                <p>Ya estás inscripto en el curso: <strong> {{ $curso->titulo }}</strong>, alguien de
                                    Climb se va a poner en contacto con vos a la brevedad para que puedas terminar tu
                                    pago.</p>
                                <p>De igual modo te dejamos los datos básicos de este curso para que tengas en cuenta.
                                </p>
                                <ul>
                                    <li>Horario de Cursado: {{ $curso->horario }}</li>
                                    <li>Inicio de Cursado: {{ $curso->inicioCursado }}</li>
                                </ul>
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <h5 class="text-center">Reintentar pago:</h5>
                                      <a href="/reintentar/{{$compra->id}}" class="btn bg-gradient-success
                                        mt-3 mb-0">Ir a MercadoPago</a>
                                    </div>
                                  </div>
                                /reintentar/{id}
                                <div class="row mt-5">
                                    <hr>
                                    <div class="col-md-12 text-center">
                                        <p>Si tenes alguna duda contactanos:</p>
                                        <a target="_blank"
                                            href="https://api.whatsapp.com/send?phone=5492615864076&text=Hola,%20me%20inscib%C3%AD%20en%20el%20curso%20{{ $curso->titulo }}%20tengo%20la%20siguiente%20consulta"
                                            class="btn bg-gradient-primary
                              mt-3 mb-0">Enviar
                                            WhatsApp</a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-2 mx-auto p-3">
                                    <a target="_blank" href="http://rail.ar">
                                        <img src="{{ asset('assets/img/Rail (2) (1).png') }}" alt=""
                                            class="img-fluid">
                                    </a>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- -------- END PRE-FOOTER 1 w/ SUBSCRIBE BUTTON AND IMAGE ------- -->
    </div>

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
