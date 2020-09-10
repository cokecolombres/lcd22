@extends('layouts.app')
@section('content')

<section class="">
  <div class="">
    <div class="jumbotron jumbotron-fluid bg-dark mb-0">
      <div class="container">
        <h3 class="text-white display-5 mt-50">No es sóla sdlakdlakdso una comunidad, <br> es LA COMPAÑÍA <span class="theme-color">DIGITAL</span>.</h3>
        <p class="text-white lead">De personas unidas por sus mismos intereses.</p>
        <a href="{{route('login')}}" type="button" class="btn btn-warning text-dark">Quiero ser parte</a>
      </div>
    </div>
  </div>
</section>

<section class="page-sidebar page-section-pb bg-white">
  <div class="container">
    <div class="row pt-30">
      <div class="col-12">
        <h3 class="text-dark pt-10">¿Qué tipo de comunidades  <span class="theme-bg text-dark"> te interesan</span> ?</h3>
        <div class="row mt-20">
          <div class="col-sm-12 col-md-6 col-lg-4">
            <a href="">
              <div class="card bg-gray2">
                <div class="card-body">
                  <div class="feature-text left-icon">
                      <div class="feature-icon">
                      <span class="ti-html5 theme-color" aria-hidden="true"></span>
                      </div>
                      <div class="feature-info">
                        <h5 class="text-dark">Desarrollo web</h5>
                        <p>We bring you an awesomeness of design, creative skills.</p>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-sm-12 col-md-6 col-lg-4">
            <a href="">
            <div class="card bg-gray2">
              <div class="card-body">
                <div class="feature-text left-icon">
                    <div class="feature-icon">
                    <span class="ti-html5 theme-color" aria-hidden="true"></span>
                    </div>
                    <div class="feature-info">
                      <h5 class="text-dark">Desarrollo web</h5>
                      <p>We bring you an awesomeness of design, creative skills.</p>
                  </div>
                </div>
              </div>
            </div>
            </a>
          </div>
          <div class="col-sm-12 col-md-6 col-lg-4">
            <a href="">
            <div class="card bg-gray2">
              <div class="card-body">
                <div class="feature-text left-icon">
                    <div class="feature-icon">
                    <span class="ti-html5 theme-color" aria-hidden="true"></span>
                    </div>
                    <div class="feature-info">
                      <h5 class="text-dark">Desarrollo web</h5>
                      <p>We bring you an awesomeness of design, creative skills.</p>
                  </div>
                </div>
              </div>
            </div>
            </a>
          </div>
        </div>
        <div class="row mt-20">
          <div class="col-sm-12 col-md-6 col-lg-4">
            <a href="">
            <div class="card bg-gray2">
              <div class="card-body">
                <div class="feature-text left-icon">
                    <div class="feature-icon">
                    <span class="ti-html5 theme-color" aria-hidden="true"></span>
                    </div>
                    <div class="feature-info">
                      <h5 class="text-dark">Desarrollo web</h5>
                      <p>We bring you an awesomeness of design, creative skills.</p>
                  </div>
                </div>
              </div>
            </div>
            </a>
          </div>
          <div class="col-sm-12 col-md-6 col-lg-4">
            <a href="">
            <div class="card bg-gray2">
              <div class="card-body">
                <div class="feature-text left-icon">
                    <div class="feature-icon">
                    <span class="ti-html5 theme-color" aria-hidden="true"></span>
                    </div>
                    <div class="feature-info">
                      <h5 class="text-dark">Desarrollo web</h5>
                      <p>We bring you an awesomeness of design, creative skills.</p>
                  </div>
                </div>
              </div>
            </div>
            </a>
          </div>
          <div class="col-sm-12 col-md-6 col-lg-4">
            <a href="">
            <div class="card bg-gray2">
              <div class="card-body">
                <div class="feature-text left-icon">
                    <div class="feature-icon">
                    <span class="ti-html5 theme-color" aria-hidden="true"></span>
                    </div>
                    <div class="feature-info">
                      <h5 class="text-dark">Desarrollo web</h5>
                      <p>We bring you an awesomeness of design, creative skills.</p>
                  </div>
                </div>
              </div>
            </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="page-section-ptb bg-gray2">
  <div class="container">
    <div class="row">
      <div class="section-title">
        <h3>Cuando accedes a LA COMPAÑÍA, nuestra plataforma se adapta a tus gustos</h3>
        <p>Nuestras comunidades te impulsarán, no te quedes sólo con el contenido, en LA COMPAÑÍA DIGITAL conectarás con personas que te llevarán más allá.</p>
      </div>
      <div class="row">
        <div class="col-lg-6">
          <div class="card text-white mb-3">
            <div class="card-body">
              <h5 class="card-title">Comunidades</h5>
              <p class="card-text">¿Tienes dudas o quieres comenzar una discusión interesante? Descubre el poder de la Comunidad de Platzi a la que perteneces, y resuelve o conversa sobre esas inquietudes que tengas.</p>
              <div class="feature-3-image mb-20">
                <img alt="" src="{{asset('lacompaniadigital/images/logo-06.png')}}" class="img-fluid">
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="card text-white mb-3">
            <div class="card-body">
              <h5 class="card-title">Foro LCD</h5>
              <p class="card-text">Nuestra metodología de enseñanza cuida cada curso antes, durante y después de la grabación del mismo. Podrás encontrar todos los materiales y comentarios de cada curso en un mismo lugar.</p>
              <div class="feature-3-image mb-20">
                <img alt="" src="{{asset('lacompaniadigital/images/logo-06.png')}}" class="img-fluid">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection