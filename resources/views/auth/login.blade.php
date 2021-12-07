@extends('layouts.header')

    <main class="main-content  mt-0">
        <section>
            <div class="page-header min-vh-75">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
                            <div class="card card-plain mt-8">
                                <div class="card-header pb-0 text-left bg-transparent">
                                    <h3 class="font-weight-bolder text-info text-gradient">¡Bienvenido de nuevo!</h3>
                                    <p class="mb-0">Ingresá tu e-mail y contraseña para ingresar.</p>
                                </div>
                                <div class="card-body">
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <label>Email</label>
                                        <div class="mb-3">
                                            <input id="email" type="email"
                                                class="form-control @error('email') is-invalid @enderror" name="email"
                                                value="{{ old('email') }}" required autocomplete="email" autofocus
                                                placeholder="Email" aria-label="Email" aria-describedby="email-addon">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <label>Password</label>
                                        <div class="mb-3">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" 
                                                placeholder="Password" name="password"
                                                required autocomplete="current-password"
                                                aria-label="Password" aria-describedby="password-addon">
                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" checked="" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>
                                            <label class="form-check-label" for="rememberMe">Recordarme</label>
                                        </div>
                                        <div class="text-center">
                                            
                                            <button  type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">Login</button>
                                                @if (Route::has('password.request'))
                                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                                    {{ __('Olvidaste la contraseña?') }}
                                                </a>
                                            @endif
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                    <p class="mb-4 text-sm mx-auto">
                                        ¿No tenés cuenta?
                                        <a href="/register" class="text-info text-gradient font-weight-bold">Registrarme</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
                                <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6"
                                    style="background-image:url('../assets/img/curved-images/curved6.jpg')"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    @extends('layouts.footer')



