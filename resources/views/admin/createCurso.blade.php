<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <title>
        CLIMB Dashboard :: Crear Curso
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
                        <form action="/cursosAdmin" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-1"></div>
                                <div class="col-md-6 text-center">
                                    <label for="nombre">Titulo:</label>
                                    <input type="text" class="form-control text-left" style=" font-size: large;
                                            font-weight: 700;" placeholder="Como hacer una Entrevista" name="titulo"
                                        require>
                                </div>
                                <div class="col-md-2 text-center">
                                    <label for="tipo">Tipo:</label>
                                    <select name="tipo[]" class="form-control border-success" require>
                                        <option value="">Elegir una</option>
                                        <option value="Curso">Curso</option>
                                        <option value="Carrera">Carrera</option>
                                    </select>
                                </div>
                                <div class="col-md-2 text-center">
                                    <label for="priority">Prioridad:</label>
                                    <select name="priority[]" class="form-control border-success">
                                        <option value="1">Alta</option>
                                        <option value="2">Baja</option>
                                    </select>
                                </div>
                                <div class="col-md-1"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-5 mx-auto text-center">
                                    <label for="foto">Imagen:</label>
                                    <input type="file" class="form-control " name="imagen"  require>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-md-1"></div>
                                <div class="col-md-4 text-center">
                                    <label for="linkedin">Horario:</label>
                                    <input type="text" placeholder="Lun, mier y virnes de 9 a 18"
                                        class="form-control text-center" name="horario" require>
                                </div>
                                <div class="col-md-2  text-center">
                                    <label for="linkedin">Cantidad de Clases:</label>
                                    <input type="text" placeholder="19" class="form-control text-center"
                                        name="q_clases"require >
                                </div>
                                <div class="col-md-3  text-center">
                                    <label for="linkedin">Inicio Cursado:</label>
                                    <input type="date" class="form-control text-center"
                                        name="inicioCursado" require>
                                </div>
                                <div class="col-md-1"></div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-sm-10 mx-auto">
                                    <p class="text-lg mb-0">
                                        <label for="introduccion">Introduccion/Descripcion Corta:</label>
                                        <textarea id="editor" name="introduccion"
                                            placeholder="[Descripción se verá en la página y en la itroduccin del curso]"
                                           ></textarea>
                                    </p>
                                    <br>
                                    <div class="text-sm mb-0" id="description">
                                        <label for="descripcion">Descripción:</label>
                                        <textarea id="descripcion" name="descripcion"
                                            placeholder="[Descripción se verá en la página del curso, abajo de la Introducción.]"
                                           ></textarea>
        
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-5">
                                <div class="col-md-5 mx-auto text-center">
                                    <label for="foto">Programa:</label>
                                    <input type="file" class="form-control " name="programa" require>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-md-1"></div>
                                <div class="col-md-4 text-center">
                                    <label for="linkedin">Precio:</label>
                                    <input type="number" placeholder="57000" min="0" 
                                        class="form-control text-center" name="precio" >
                                </div>
                                <div class="col-md-2  text-center">
                                    <label for="linkedin">Aplica descuento:</label>
                                    <select name="aplica_descuento[]" class="form-control" id="">
                                        <option value="no">No</option>
                                        <option value="si">Si</option>
                                    </select>
                                </div>
                                <div class="col-md-3  text-center">
                                    <label for="linkedin">Porcentaje:</label>
                                    <input type="number" class="form-control text-center"
                                        name="descuento" placeholder="20" > 
                                </div>
                                <div class="col-md-1"></div>
                            </div>
                            <div class="row mt-5">
                                <div class="col-md-5 mx-auto text-center">
                                    <label for="foto">Profesor:</label>
                                    <select name="profesor_id[]" class="form-control" id="" require>
                                        <option value="" > -.Asignar Profesor.-</option>
                                        @foreach($profesores as $profesor)
                                        <option value="{{$profesor->id}}">{{$profesor->nombre}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-auto mx-auto">
                                    <label for="activo" >Activo:</label>
                                    <select name="activo[]" class="form-control" id="">
                                        <option value="si">si</option>
                                        <option value="no">no</option>
                                    </select>
                                </div>
                            </div>       
                            <div class="row">
                                <div class="  col-sm-4 mx-auto p-4 text-center">
                                    <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                                </div>
                            </div>
                        </form>
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
    <script src="https://cdn.ckeditor.com/4.17.1/standard-all/ckeditor.js"></script>
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
                toolbar: ['bold', 'italic', 'link', 'undo', 'redo', 'numberedList', 'bulletedList'],

            })
            .catch(error => {
                console.error(error);
            });
            
    </script>

</body>

</html>
