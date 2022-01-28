<!-- -------- START HEADER 10 w/ carousel ------- -->

<section class="py-3 bg-gray-200">
    <div class="container">
        <div class="row">
            <div class="row justify-content-center text-center my-sm-5">
                <div class="col-lg-6">
                    <!--  <span class="badge bg-primary mb-3">Nuestros profesores</span> -->
                    <h2 class="text-dark mb-0">Nuestros Cursos</h2>
                    <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing
                        elit. Deserunt ipsum sequi illo corporis
                        dolore soluta nostrum distinctio, magnam voluptates nulla
                        eveniet labore ut id consequatur, assumenda ex
                        quidem inventore qui! </p>
                </div>
            </div>
        </div>
        <div class="row row-cols-sm-4">
            @foreach ($cursos as $curso)
                <div class="col-lg-3 col-sm-6">
                    <div class="card card-plain">
                        <div class="card-header p-0 position-relative" style="background:transparent;">
                            <h6 class="text-center text-info text-uppercase">{{ $curso->tipo }}</h6>
                            <a class="d-block blur-shadow-image">
                                <img src="{{ asset('assets/img/cursos/' . $curso->imagen) }}"
                                    alt="img-blur-shadow" class="img-fluid shadow border-radius-lg" loading="lazy">
                            </a>
                        </div>
                        <div class="card-body px-0">
                            <h5>
                                <a href="javascript:;" class="text-dark font-weight-bold">{{ $curso->titulo }}</a>
                            </h5>
                            <p>
                               @php echo $curso->descripcion_corta @endphp
                            </p>
                            <a href="/cursos/{{ $curso->id }}" class="text-info text-sm icon-move-right">saber
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

<!-- -------- END HEADER 11 w/ carousel ------- -->
