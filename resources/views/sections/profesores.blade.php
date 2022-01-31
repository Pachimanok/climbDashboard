<section id="profesores" class="pb-5 pt-5 position-relative bg-gradient-dark
    mx-n3">
    <div class="container">
        <div class="row">
            <div class="col-md-8 text-start mb-0 mt-5">
                <h3 class="text-white z-index-1 position-relative">Nuestros
                    Profesores</h3>
                <p class="text-white opacity-8 mb-0"> Nuestros profesores, son profesionales expertos en la gestión de Recursos Humanos, que buscan compartir saberes sin límites y sin reservas</p>
            </div>
            <div class="col-sm-4 mb-0 mt-5 text-center">
              
                    <button type="button" class="btn btn-outline-light
                    text-white mb-0 pl-2 pr-2 mt-2" style="padding-left: 5rem; padding-right: 5rem;">Ser
                    profe CLIMB</button>
                
                
            </div>
        </div>
        <div class="container">
            <div class="row">
                @foreach ($profesores as $profesor)
                    <div class="col-lg-3 mb-lg-0 mb-6 mt-5">
                        <div class="card" data-animation="true">
                            <div
                                class="card-header p-0 position-relative mt-4 mx-3
                            z-index-2">
                                <a class="d-block blur-shadow-image">
                                    <img src="{{ asset('assets/img/profesores/' . $profesor->foto) }}"
                                        alt="img-blur-shadow" class="img-fluid shadow border-radius-lg">
                                </a>
                                <div class="colored-shadow"
                                    style="background-image:
                                url(&quot;https://demos.creative-tim.com/test/material-dashboard-pro/assets/img/products/product-1-min.jpg&quot;);">
                                </div>
                            </div>
                            <div class="card-body text-center">
                                <div class="d-flex mt-n6 mx-auto">
                                    <a href="/profesor/{{ $profesor->id }}" class="btn btn-link text-primary border-0"
                                        data-bs-toggle="tooltip" data-bs-placement="bottom" title="Refresh">
                                        Ver mas
                                    </a>
                                </div>
                                <h5 class="font-weight-normal">
                                    <a href="javascript:;">{{ $profesor->nombre }}</a>
                                </h5>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
        <div class="row">
            <div class="col-sm-5  mx-auto text-center mt-5 ">
                <button type="button" class="btn btn-outline-info
                     mb-0 pl-5 pr-5" style="font-size:
                    large;padding-left: 5rem; padding-right: 5rem;">Ver cursos</button>
            </div>
        </div>
    </div>
</section>
