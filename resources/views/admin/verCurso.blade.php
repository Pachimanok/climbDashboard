<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <title>
        CLIMB Dashboard :: {{ $curso->titulo }}
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="../assets/css/soft-ui-dashboard.css?v=1.0.3" rel="stylesheet" />
</head>

<body class="about-us bg-gray-200">
    @include('layouts.aside')
    <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
        <div class="container-fluid py-4">
            <div class="row my-4">
                <div class="col-lg-7 col-md-6 mb-md-0 mb-4">
                    <div class="card">
                        <div class="card-header pb-0">
                            <div class="row">
                                <div class="col-lg-6 col-7">
                                    <h6>Consultas desde formularios</h6>
                                    @php
                                        if (isset($_GET['not'])) {
                                            if ($_GET['not'] === 'deleteok') {
                                                echo '<div class="alert alert-secondary text-white alert-dismissible fade show" role="alert">
                                                            <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                                                            <span class="alert-text"><strong>¡Se eliminó</strong> el mensaje correctamente!</span>
                                                            <button type="button" class="btn-close" onClick="reload();">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>';
                                            }
                                        }
                                    @endphp
                                    <script>
                                        function reload() {
                                            var getUrl = window.location.origin + '/home';
                                            window.location = getUrl;
                                        }
                                    </script>

                                </div>

                            </div>
                        </div>
                        <div class="card-body pb-2 pl-5">
                            <div class="row text-center">
                                <div class="col-sm-4">
                                    <p ><strong>Horarios:</strong><br> {{ $curso->horario}}</p>
                                </div>
                                <div class="col-sm-4">
                                    <p ><strong>Cantidad de Clases:</strong> <br>{{ $curso->q_clases}}</p>
                                </div>
                                <div class="col-sm-4">
                                    <p ><strong>Inicio Cursado:</strong> <br>{{ $curso->inicioCursado}}</p>
                                </div>
                                <hr>
                            </div>
                            <div class="row">
                                <div class="col-sm-11 mx-auto">
                                    <p><strong>Descripcion:</strong><br> @php echo $curso->descripcion;  @endphp</p>
                                        {{-- descargar programa. --}}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-5 mx-auto text-center">
                                    <a href="{{asset('programas/'.$curso->link_programa)}}" download="{{$curso->link_programa}}" class="btn btn-primary"><i class="fas fa-file-download mr-3"></i> Descargar Progrma</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100">
                        <div class="card-header pb-0">
                            <h6>Vista Pagina Principal</h6>
                            <p class="text-sm">
                                @if ($curso->priority == 1) <span class="font-weight-bold"> <i class="fa fa-arrow-up" style="margin-right: 0.3rem;" aria-hidden="true"></i> Prioridad:</span> Alta @else<span class="font-weight-bold"> Prioridad:</span> Baja @endif
                            </p>
                        </div>
                        <div class="card-body p-3">
                            <div class="card card-plain">
                                <div class="card-header p-0 position-relative" style="background:transparent;">
                                    <h6 class="text-center text-info text-uppercase">{{ $curso->tipo }}</h6>
                                    <a class="d-block blur-shadow-image">
                                        <img src="{{ asset('assets/img/cursos/' . $curso->imagen) }}"
                                            alt="img-blur-shadow" class="img-fluid shadow border-radius-lg"
                                            loading="lazy">
                                    </a>
                                </div>
                                <div class="card-body px-0">
                                    <h5>
                                        <a href="javascript:;"
                                            class="text-dark font-weight-bold">{{ $curso->titulo }}</a>
                                    </h5>
                                    <p>
                                       @php echo $curso->descripcion_corta @endphp
                                    </p>
                                    <a target="_blank" href="/cursos/{{ $curso->id }}"
                                        class="text-info text-sm icon-move-right">saber
                                        más
                                        <i class="fas fa-arrow-right text-xs ms-1"></i>
                                    </a>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-11 mx-auto">
                                            <p ><strong>Profesor:</strong><br> {{ $profesor->nombre }} </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-11 mx-auto">
                                            <p ><strong >Precio:</strong> <strong  class="text-info @if($curso->aplica_descuento == 'si') text-decoration-line-through @endif"> $ {{ number_format($curso->precio, 2) }} </strong>  @if($curso->aplica_descuento == 'si') | <strong class="fw-bold">$ {{ number_format($curso->precio * (1 - $curso->descuento), 2) }}</strong><small> <span class="badge bg-gradient-success"> {{ 100 * $curso->descuento }}% Off</span></small>@endif</p>
                                        </div>
                                        {{-- si aplica descuento poner tachado y el precio --}}
                                    </div>
                                    <div class="row mt-5">
                                        <div class="col-sm-10 mx-auto text-center">
                                            <a href="/cursosAdmin/{{ $curso->id }}/edit"
                                                class="btn btn-info w-100">Editar Curso</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </main>
    </footer>
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
