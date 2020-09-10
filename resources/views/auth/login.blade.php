@extends('layouts.app')

@section('content')
<section class="page-title bg-dark parallax pb-10 pt-90" data-jarallax='{"speed": 0.6}' style="background-image: url(images/bg/programming2.jpg);">
    
</section>

{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}

<section class="login-box-main height-100vh page-section-ptb" style="background: url(images/login/07.jpg);">
    <div class="login-box-main-middle">
      <div class="container">
        <div class="row justify-content-center no-gutter">
          <div class="col-lg-2 col-md-4">
            <div class="login-box-left   bg-gray2">
              <img class="logo-small" src="images/logo-05.png" alt="">
                 <ul class="nav">
                   <li class="active"><a href="#"> <i class="ti-user"></i> Iniciar sesión</a></li>
                   <li><a href="{{route('register')}}"> <i class="ti-pencil-alt"></i> Registro</a></li>
                </ul>
               <div class="social-icons color-hover clearfix pos-bot pb-30 pl-30">
                <ul>
                  <li class="social-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li class="social-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li class="social-instagram"><a href="#"><i class="fa fa-instagram"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-4 theme-bg">
           <div class="login-box pos-r text-white login-box-theme">
            <h2 class="text-dark mb-20">Bienvenid@ a </h2>
            <h4 class="text-dark mb-20">LA COMPAÑÍA DIGITAL</h4>
            <p class="mb-10 text-muted">Impulsá tu vida con tecnología </p>
            <p class="text-dark">Somos tecnología y compañía.</p>
            <p class="text-dark">La plataforma digital de aprendizaje online efectivo.</p>
            <ul class="list-unstyled pos-bot pb-40">
              <li class="list-inline-item"><a class="text-white" href="#"> Términos de uso</a> </li>
              <li class="list-inline-item"><a class="text-white" href="#"> Privacidad</a></li>
            </ul>
           </div>
          </div>
          <div class="col-md-4">
            <div class="login-box pb-50 clearfix  bg-gray2">
              <h3 class="mb-30">Iniciar sesión</h3>
              <div class="section-field mb-20">
                <label class="mb-10" for="name">Nombre de usuario* </label>
                <input id="name" class="web form-control" type="text" placeholder="Usuario" name="web">
              </div>
              <div class="section-field mb-20">
               <label class="mb-10" for="Password">Contraseña* </label>
                 <input id="Password" class="Password form-control" type="password" placeholder="Contraseña" name="Password">
              </div>
              <div class="section-field">
               <div class="custom-control custom-checkbox mb-30">
                  <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                  <label class="custom-control-label" for="customControlAutosizing">Recordarme</label>
                </div>
              </div>
              <a href="index2.html" class="button">
                <i class="fa fa-check"></i>
                <span>Entrar</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection