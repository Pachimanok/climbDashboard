<!-- Navbar -->
<div class="container position-sticky z-index-sticky top-0">
    <div class="row fixed-top ">
        <div class="col-12">
            <nav class="navbar navbar-expand-lg blur top-0 z-index-fixed  shadow position-absolute  start-0 end-0">
                <div class="container-fluid pl-7 pr-7">
                    <a class="navbar-brand font-weight-bolder ms-sm-3" href="/" rel="tooltip"
                        title="Designed and Coded by Creative Tim" data-placement="bottom" target="_blank">
                        <img src="{{ asset('assets/assets/img/climb/logo.png') }}" alt="" style="width: 7rem ;"
                            class="img-fluid">
                    </a>
                    <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon mt-2">
                            <span class="navbar-toggler-bar bar1"></span>
                            <span class="navbar-toggler-bar bar2"></span>
                            <span class="navbar-toggler-bar bar3"></span>
                        </span>
                    </button>
                    <div class="collapse navbar-collapse pt-3 pb-2 py-lg-0 w-100" id="navigation">
                        <ul class="navbar-nav navbar-nav-hover mx-auto">
                            <li class="nav-item dropdown dropdown-hover mx-2">
                                <a class="nav-link ps-2 d-flex cursor-pointer 
                  align-items-center"
                                    href="/">
                                    <i class="fas fa-home opacity-6 me-2 text-md"></i>
                                    Inicio

                                </a>
                            </li>
                            <a class="nav-link ps-2 d-flex cursor-pointer
            align-items-center"
                                id="dropdownMenuPages" href="/nosotros">
                                <i class="fas fa-graduation-cap opacity-6 me-2 text-md"></i>
                                Nosotros

                            </a>
                            </li>
                            <li class="nav-item dropdown dropdown-hover mx-2">

                                <a class="nav-link ps-2 d-flex cursor-pointer align-items-center" href="
                                      @if ($ruta==='landing' )
                                    #profesores
                                @else /#profesores
                                    @endif"
                                    >
                                    <i class="fas fa-chalkboard-teacher opacity-6 me-2 text-md"></i>
                                    Profesores

                                </a>
                            </li>
                            <li class="nav-item dropdown dropdown-hover mx-2">
                                <a class="nav-link ps-2 d-flex cursor-pointer
                  align-items-center"
                                    id="dropdownMenuPages" href="/metodologia">
                                    <i class="fas fa-chalkboard-teacher opacity-6 me-2 text-md"></i>
                                    Metodologias

                                </a>
                            </li>
                            {{-- <li>
                                @if (Route::has('login'))
                                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                        @auth
                                            <a href="{{ url('/home') }}"
                                                class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                                        @else
                                            <a href="{{ route('login') }}"
                                                class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                                            @if (Route::has('register'))
                                                <a href="{{ route('register') }}"
                                                    class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                                            @endif
                                        @endauth
                                    </div>
                                @endif
                            </li> --}}
                        </ul>

                        <ul class="navbar-nav">
                            <li class="nav-item my-auto  dropdown dropdown-hover ms-3 ms-lg-0">
                                <a class="btn btn-sm bg-gradient-primary cursor-pointer mb-0 me-1 mt-2
                  mt-md-0"
                                    id="cursos"> cursos & carreras</a>
                                <ul class="dropdown-menu ms-n3 dropdown-menu-animation dropdown-menu-end dropdown-xl p-3 border-radius-xl mt-0 mt-lg-3"
                                    aria-labelledby="cursos">
                                    <div class="row d-none d-lg-block">
                                        <div class="col-12 px-4 py-2">
                                            <div class="row">
                                                <div class="col-6 position-relative">
                                                    
                                                        <div
                                                            class="w-100 d-flex align-items-center justify-content-between">
                                                            <div>
                                                                <h6
                                                                    class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
                                                                   Cusos</h6>
                                                                   <ul style="list-style:none" class="p-0">
                                                                       <a href=""><li><span class="text-sm">Tres tristes Tigres</span></li></a>
                                                                       <hr class="m-1">
                                                                       <a href=""><li><span class="text-sm">Pablito clavo un clavito</span></li></a>
                                                                       <hr class="m-1">
                                                                       <a href=""><li><span class="text-sm">Paca Peco</span></li></a>
                                                                       <hr class="m-1">
                                                                       <a href=""><li><span class="text-sm">Pepe pica papas</span></li></a>
                                                                       <hr class="m-1">
                                                                       <a href=""><li><span class="text-sm">Erre con erre, guitarra.</span></li></a>
                                                                       <hr class="m-1">
                                                                       <a href=""><li><span class="text-sm">Cuando cuentas cuentos.</span></li></a>
                                                                      
                                                                   </ul>
                                                            </div>
                                                        </div>
                                                </div>
                                                <div class="col-6 position-relative">
                                                    <a class="dropdown-item py-2 ps-3 border-radius-md"
                                                        href="./presentation.html">
                                                        <div
                                                            class="w-100 d-flex align-items-center justify-content-between">
                                                            <div>
                                                                <h6
                                                                    class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
                                                                    Recursos Humanos</h6>
                                                                <span class="text-sm">Ver todos los cursos</span>
                                                            </div>
                                                            <img src="./assets/img/down-arrow.svg" alt="down-arrow"
                                                                class="arrow">
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>

                                        </div>
                                        
                                        


                                </ul>
                    </div>
                    </ul>
                    </li>
                    </ul>
                </div>
        </div>
        </nav>
        <!-- End Navbar -->
    </div>
</div>
</div>
