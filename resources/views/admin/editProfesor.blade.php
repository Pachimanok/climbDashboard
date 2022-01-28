<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <title>
        CLIMB Dashboard :: {{ $profesor->nombre }}
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="{{ asset('assets/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="{{ asset('assets/css/soft-ui-dashboard.css?v=1.0.3') }}" rel="stylesheet" />
</head>

<body class="about-us bg-gray-200">
    @include('layouts.aside')
    <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">

        <!-- -------- START HEADER 7 w/ text and video ------- -->
        <div class="container-fluid py-4">
            <div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6 mb-4">
                <!-- START Testimonials w/ user image & text & info -->
                <section class="pt-sm-7 pb-2 py-5 position-relative">
                    <div class="container-fluid">
                        <form action="/profesorAdmin/{{ $profesor->id }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="row">
                                <div class="col-sm-4 text-center">
                                    <input type="hidden" class="form-control" name="imagenActual" value="{{ $profesor->foto }}">
                                    <img class="avatar avatar-xxl shadow-xl position-relative z-index-2"
                                        src="{{ asset('assets/img/profesores/' . $profesor->foto) }}"
                                        style="height: 25rem !important; width: 25rem !important;" alt="bruce"
                                        loading="lazy">
                                    <input type="file" class="form-control mt-3" name="foto">
                                    <div class="d-block mt-5">
                                        <label for="linkedin">Linkedin:</label>
                                        <input type="text" class="form-control text-center" name="linkedin"
                                            value="{{ $profesor->linkedin }}">
                                    </div>
                                    <div class="d-block mt-5">
                                        <label for="linkedin">Estudios:</label>
                                        <input type="text" class="form-control text-center" name="estudios"
                                            value="{{ $profesor->estudios }}">
                                    </div>
                                    <div class="d-block mt-2">
                                        <label for="linkedin">Trabajos:</label>
                                        <input type="text" class="form-control text-center" name="trabajos"
                                            value="{{ $profesor->trabajos }}">
                                    </div>
                                </div>
                                <div class="col-sm-8 p-5">
                                    <div class="col-lg-9 col-md-9 z-index-2 position-relative px-md-2 px-sm-5">
                                        <div class="d-flex justify-content-between align-items-center mb-2 ">
                                            <div class="col-sm-8">
                                                <label for="nombre">Nombre:</label>
                                                <input type="text" class="form-control text-left" style="width:90%; font-size: large;
                                            font-weight: 700;" name="nombre" value="{{ $profesor->nombre }}">
                                            </div>
                                            <div class="col-sm-4 p-4 text-center">
                                                <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                                            </div>

                                        </div>
                                        <div class="row mb-4">
                                            <div class="col-auto">
                                                <label for="prioridad">Prioridad:</label>
                                            </div>
                                            <div class="col-auto">
                                                <select name="priority[]" class="form-control" id="">
                                                    @if ($profesor->priority == 1)
                                                        <option value="1">Alta</option>
                                                        <option value="2">Baja</option>
                                                    @else
                                                        <option value="2">Baja</option>
                                                        <option value="1">Alta</option>
                                                    @endif
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <div class="col-auto">
                                                <span class="h6">323</span>
                                                <span>Clicks Linkedin</span>
                                            </div>
                                            <div class="col-auto">
                                                <span class="h6">{{ $qcursos }}</span>
                                                <span> @if ($qcursos == 1) Curso @else Cursos @endif</span>
                                            </div>
                                        </div>
                                        <p class="text-lg mb-0">
                                            <label for="introduccion">Introduccion/Descripcion Corta:</label>
                                            <textarea id="editor"
                                                name="introduccion">{{ $profesor->introduccion }}</textarea>
                                        </p>
                                        <br>
                                        <div class="text-sm mb-0">
                                            <label for="descripcion">Descripcion:</label>
                                            <textarea id="descripcion"
                                                name="descripcion">{{ $profesor->descripcion }}</textarea>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </section>

                <!-- END Testimonials w/ user image & text & info -->
                <!-- START Blogs w/ 4 cards w/ image & text & link -->
                <section class="py-3 bg-gray-200">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 mx-auto">
                                <span class="align-middle">
                                    <h3 class="mb-2 text-center">Cursos y carreras que dicta:</h3>
                                </span>
                            </div>
                        </div>
                        <div class="row row-cols-sm-4">
                            @foreach ($cursos as $curso)
                                <div class="col-lg-3 col-sm-6">
                                    <div class="card card-plain">
                                        <div class="card-header p-0 position-relative" style="background:transparent;">
                                            <h6 class="text-center text-info text-uppercase">{{ $curso->tipo }}</h6>
                                            <a class="d-block blur-shadow-image">
                                                <img src="{{ asset('assets/assets/img/climb/' . $curso->imagen) }}"
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
                                                {{ $curso->descripcion_corta }}
                                            </p>
                                            <a href="/cursos/{{ $curso->id }}"
                                                class="text-info text-sm icon-move-right">saber
                                                más
                                                <i class="fas fa-arrow-right text-xs ms-1"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </section>

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
    {{-- editor texarea --}}
    <script src="https://cdn.ckeditor.com/ckeditor5/31.1.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#descripcion'))
            .catch(error => {
                console.error(error);
            });
    </script>
</body>

</html>
