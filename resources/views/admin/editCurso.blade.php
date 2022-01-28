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
            <form action="/cursosAdmin/{{ $curso->id }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="row my-4">
                    <div class="col-lg-7 col-md-6 mb-md-0 mb-4">
                        <div class="card">
                            <div class="card-header pb-0">
                                <div class="row">
                                    <div class="col-lg-6 col-7">
                                        <h6>Editar Curso</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pb-2 pl-5">
                                <div class="row text-center">
                                    <div class="col-sm-4">
                                        <p><strong>Horarios:</strong><br> <input type="text" name="horario"
                                                class="form-control text-center" value="{{ $curso->horario }}"></p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p><strong>Cantidad de Clases:</strong> <br><input type="number" name="q_clases"
                                                class="form-control text-center" value="{{ $curso->q_clases }}"></p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p><strong>Inicio Cursado:</strong> <br><input type="date" name="inicioCursado"
                                                class="form-control text-center" value="{{ $curso->inicioCursado }}">
                                        </p>
                                    </div>
                                    <hr>
                                </div>
                                <div class="row">
                                    <div class="col-sm-11 mx-auto">
                                        <p><strong>Descripcion:</strong></p>
                                        <textarea id="descripcion"
                                            name="descripcion">{{ $curso->descripcion }}</textarea>
                                    </div>
                                </div>
                                <div class="row mt-5 mb-5">
                                    <div class="col-sm-5 mx-auto text-center">
                                        <p><strong>Archivo Programa:</strong></p>
                                        <input type="file" class="form-control " name="programa">
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
                                    <label for="priority">Prioridad:</label>
                                    <select name="priority[]" class="form-control border-success">
                                        @if ($curso->priority == 1)
                                            <option value="1">Alta</option>
                                            <option value="2">Baja</option>
                                        @else
                                            <option value="2">Baja</option>
                                            <option value="1">Alta</option>
                                        @endif
                                    </select>
                                </p>
                            </div>
                            <div class="card-body p-3">
                                <div class="card card-plain">
                                    <div class="card-header p-0 position-relative" style="background:transparent;">

                                        <div class="col-sm-5 mx-auto mb-4">
                                            <label class="text-center" for="tipo">Tipo:</label>
                                            <select name="tipo[]" class="form-control border-success" require>
                                                @if ($curso->tipo == 'carrera')
                                                    <option value="carrera">Carrera</option>
                                                    <option value="curso">Curso</option>
                                                @else
                                                    <option value="curso">Curso</option>
                                                    <option value="carrera">Carrera</option>
                                                @endif
                                            </select>
                                        </div>
                                        <a class="d-block blur-shadow-image">
                                            <img src="{{ asset('assets/img/cursos/' . $curso->imagen) }}"
                                                alt="img-blur-shadow" class="img-fluid shadow border-radius-lg"
                                                loading="lazy">
                                        </a>
                                        <div class="col-md-11 mx-auto text-center">
                                            <label for="foto">Imagen:</label>
                                            <input type="file" class="form-control " name="imagen">
                                        </div>
                                    </div>
                                    <div class="card-body px-0">
                                        <h5>
                                            <label for="foto">Titulo:</label>
                                            <input type="text" name="titulo" class="form-control text-center"
                                                value="{{ $curso->titulo }}">
                                        </h5>
                                        <p>
                                            <label for="introduccion">Introduccion/Descripcion Corta:</label>
                                            <textarea id="editor"
                                                name="introduccion">{{ $curso->descripcion_corta }}</textarea>
                                        </p>

                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-11 mx-auto">
                                                <label for="foto">Profesor:</label>
                                                <select name="profesor_id[]" class="form-control" id="" require>
                                                    <option value="{{ $profesor->id }}">{{ $profesor->nombre }}
                                                    </option>
                                                    @foreach ($profesores as $profesor)
                                                        <option value="{{ $profesor->id }}">
                                                            {{ $profesor->nombre }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4 mx-auto">
                                                <label for="foto">Precio:</label>
                                                <input type="text" name="precio" class="form-control text-center"
                                                    value="{{ $curso->precio }}">
                                            </div>
                                            <div class="col-md-4  text-center">
                                                <label for="linkedin">Aplica descuento:</label>
                                                <select name="aplica_descuento[]" class="form-control" id="">
                                                    <option value="no">No</option>
                                                    @if ($curso->aplica_descuento == 'si')
                                                        <option value="si">Si</option>
                                                        <option value="no">No</option>
                                                    @else
                                                        <option value="no">No</option>
                                                        <option value="si">Si</option>
                                                    @endif
                                                </select>
                                            </div>
                                            <div class="col-md-4 text-center">
                                                <label for="linkedin">Porcentaje:</label>
                                                <input type="number" class="form-control text-center" name="descuento"
                                                    value="{{ $curso->descuento * 100 }}">
                                            </div>
                                        </div>
                                        {{-- si aplica descuento poner tachado y el precio --}}
                                    </div>
                                    <div class="row mt-5">
                                        <div class="col-sm-10 mx-auto text-center">
                                            <button type="submit" class="btn btn-info w-100">Guardar Cambios</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
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
            .create(document.querySelector('#editor'), {
                toolbar: ['bold', 'italic', 'link', 'undo', 'redo', 'numberedList', 'bulletedList']

            })
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#descripcion'), {
                toolbar: ['bold', 'italic', 'link', 'undo', 'redo', 'numberedList', 'bulletedList']

            })
            .catch(error => {
                console.error(error);
            });
    </script>
</body>

</html>
