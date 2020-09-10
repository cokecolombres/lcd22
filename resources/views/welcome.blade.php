@extends('layouts.app')
@section('content')
    
{{-- <section class="slider-parallax marketing-banner bg-overlay-black-70 parallax" style="background: url(images/bg/011.jpg);">
  <div class="slider-content-middle">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-5 col-md-5 align-self-center text-right">
          <p class="text-white">
            Realmente creemos en la tecnología como un medio para mejorar nuestras vidas en casi cualquier aspecto.
          </p>
          <a href="{{route('blog')}}" class="btn btn-warning btn-sm">Ver comunidades</a>
          <a href="{{route('login')}}" class="btn btn-secondary btn-sm">Crear cuenta gratis</a>
        </div>

        <div class="col-lg-5 col-md-5 align-self-center">
          <div class="slider-content">
            <h1 class="text-white mt-20">Te ayudamos a mejorar tu vida con tecnología</h1>
          </div>
        </div>

      </div>
    </div>
  </div>
</section> --}}


<section class="bg-dark parallax pt-90">
  <div class="">
    <div class="jumbotron jumbotron-fluid pt-0 pb-0 mb-0">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{asset('lacompaniadigital/images/portfolio/conecta.png')}}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{asset('lacompaniadigital/images/portfolio/conecta2.png')}}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{asset('lacompaniadigital/images/portfolio/conecta.png')}}" class="d-block w-100" alt="...">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </div>
</section>



<section class="page-section-pb pt-30 bg-gray2">
  <div class="container">
    <h2 class="text-dark">Últimas publicaciones</h2>
    <div class="row pt-30">
      <div class="col">
        <div class="owl-carousel" data-items="5" data-md-items="4" data-sm-items="3" data-xs-items="2" data-xx-items="2" data-nav-dots="false">
          
            @foreach ($last_posts as $post)
    
            <div class="item">
              <div class="blog-box blog-1 h-100 bg-white">
                <div class="blog-info">
                  <span class="post-category"><a class="bg-primary" href="#">{{$post->category->name}}</a></span>
                <h4> <a href="{{route('show_post', $post->slug)}}"> {{$post->title}}</a></h4>
                  <p>{{$post->slug}}</p>
                    <span>{{$post->created_at->diffForHumans()}}</span>
                </div>
                <div class="blog-box-img" style="background-image:url({{$post->image}});"></div>
              </div>
            </div>
            
            @endforeach


        </div>
      </div>
      
    </div>

    <div class="row pt-30">
      <div class="col-lg-12 col-md-12">
        <h2 class="text-dark pb-30">Comunidades
          <span class="float-right">
              <a class="btn btn-outline-info x-small" href="{{route('communities')}}">VER TODAS</a>
          </span>
        </h2>
      </div>
      <div class="col-lg-6 col-md-6 sm-mb-30">
         <div class="card">
          <div class="card-body">
            <h5 class="card-title">Destacadas</h5>
            <p class="card-text">Las que actualmente se destacan por su</p>
            <ul class="list-group">
              <a href="{{route('blog')}}" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                Desarrollo Web
                <span class="badge badge-primary badge-pill">14</span>
              </a>
              <a href="{{route('blog')}}" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                Marketing digital
                <span class="badge badge-primary badge-pill">2</span>
              </a>
              <a href="{{route('blog')}}" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                Programadores Tucuman
                <span class="badge badge-primary badge-pill">1</span>
              </a>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6">
          <div class="card">
          <div class="card-body">
            <h5 class="card-title">Últimas creadas</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <ul class="list-group">

                @foreach ($last_categories as $category)
                <a href="" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                    {{$category->name}}
                    <span class="badge badge-secondary">{{$category->created_at->diffForHumans()}}</span>
                </a>
                @endforeach
              
              
            </ul>
          </div>
        </div>
      </div>
   </div>
  </div>
</section>

<section class="clearfix">
  <div class="page-section-ptb bg-dark parallax pb-150" data-jarallax='{"speed": 0.6}' style="background-image: url(images/bg/06.jpg);">
    <div class="container">
     <div class="row justify-content-center">
       <div class="col-md-8">
        <div class="section-title text-center">
          <h3 class="text-white mb-20">Encontra tu COMPAÑÍA DIGITAL</h3>
          <h5 class="text-white fw-4">Conectando, compartiendo y colaborando con las personas adecuadas todo se vuelve más fácil. ¡Únidos siempre somos más!</h5>
        </div>

        </div>
      </div>
   </div>
 </div>
<div class="page-section-pb bg-gray2">
 <div class="container">
      <div class="skill-counter">
         <div class="row">
            <div class="col-md-6">
              <div class="section-title">
                <h6>Echemos un vistazo a</h6>
                <h3>Nuestras comunidades</h3>
              </div>
               <p class="mb-60"> Brindamos un espacio de conexión, comunicación y colaboración para los usuarios que compartan los mismos intereses, valores, costumbres y/o roles.</p>
               <div class="clearfix">
                 <div class="skill">
                      <div class="skill-bar" data-percent="80" data-delay="0" data-type="%">
                          <div class="skill-title">Adobe Photoshop</div>
                      </div>
                   </div>
                   <div class="skill">
                      <div class="skill-bar" data-percent="90" data-delay="0" data-type="%">
                          <div class="skill-title">WordPress</div>
                      </div>
                   </div>
               </div>
            </div>
            <div class="col-md-6 sm-mt-30">
              <div class="row">
                <div class="col-sm-6 mb-30">
                  <div class="counter left-icon counter-small ">
                    <span class="icon ti-user theme-color" aria-hidden="true"></span>
                    <span class="timer" data-to="4905" data-speed="10000">4905</span>
                    <label class="mt-0">Comunidades creadas</label>
                  </div>
                </div>
                 <div class="col-sm-6 mb-30">
                  <div class="counter left-icon counter-small ">
                   <span class="icon ti-help-alt theme-color" aria-hidden="true"></span>
                    <span class="timer" data-to="3750" data-speed="10000">3750</span>
                    <label class="mt-0">Publicaciones hechas</label>
                  </div>
                </div>
                 <div class="col-sm-6 xs-mb-30">
                  <div class="counter left-icon counter-small ">
                    <span class="icon ti-check-box theme-color" aria-hidden="true"></span>
                    <span class="timer" data-to="4782" data-speed="10000">4782</span>
                    <label class="mt-0">Usuarios registrados</label>
                  </div>
                </div>
                 <div class="col-sm-6">
                  <div class="counter left-icon counter-small ">
                    <span class="icon ti-face-smile theme-color" aria-hidden="true"></span>
                    <span class="timer" data-to="3237" data-speed="10000">3237</span>
                    <label class="mt-0">Discusiones iniciadas</label>
                  </div>
                </div>
              </div>
              <div class="row mt-40">
                <div class="col-12">
                  <div class="gray-bg p-4">
                    <div class="row">
                       <div class="col-lg-4">
                         <b>Seguinos en:</b>
                       </div>
                       <div class="col-lg-8">
                         <div class="social-icons color clearfix text-left text-sm-right sm-mt-10">
                           <ul>
                            <li class="social-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li class="social-instagram"><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li class="social-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li class="social-linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li class="social-youtube"><a href="#"><i class="fa fa-youtube"></i></a></li>
                            <li class="social-pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                          </ul>
                         </div>
                       </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
         </div>
      </div>
      <div class="">
        <div class="row mt-30">
         <div class="col-lg-4 col-md-4">
          <div class="feature-box bg-white">
            <div class="feature-box-content">
            <i class="fa fa-file blue"></i>
            <h4>Noticias</h4>
            <p>It's always nice to browse some nice and clean websites. It is a good way to get inspiration for future projects</p>
            </div>
            <a href="#">Leer más</a>
            <div class="feature-box-img" style="background-image: url('{{asset('lacompaniadigital/images/about/01.jpg')}}"></div>
            <span class="feature-border"></span>
          </div>
       </div>
        <div class="col-lg-4 col-md-4">
          <div class="feature-box bg-white">
            <div class="feature-box-content">
            <i class="fa fa-puzzle-piece blue"></i>
            <h4>Blog</h4>
            <p>It's always nice to browse some nice and clean websites. It is a good way to get inspiration for future projects</p>
            </div>
            <a href="#">Leer más</a>
            <div class="feature-box-img" style="background-image: url('{{asset('lacompaniadigital/images/about/01.jpg')}}"></div>
            <span class="feature-border"></span>
          </div>
       </div>
       <div class="col-lg-4 col-md-4">
        <div class="feature-box bg-white">
          <div class="feature-box-content">
          <i class="fa fa-comments blue"></i>
          <h4>Foro</h4>
          <p>It's always nice to browse some nice and clean websites. It is a good way to get inspiration for future projects</p>
          </div>
          <a href="#">Leer más</a>
          <div class="feature-box-img" style="background-image: url('{{asset('lacompaniadigital/images/about/01.jpg')}}"></div>
          <span class="feature-border"></span>
        </div>
       </div>
      </div>
 </div>
   </div>
  </div>
</section>


<section class="page-section-ptb">
  <div class="container">
   <div class="row">
     <div class="col-lg-6 sm-mb-30">
      <div class="js-video [youtube, widescreen] big">
        <iframe id="video" src="https://www.youtube.com/embed/nrJtHemSPW4?rel=0"></iframe>
      </div>
     </div>
     <div class="col-lg-6">
         <div class="section-title mb-20">
           <h6>Por qué buscar</h6>
           <h2>LA COMPAÑÍA DIGITAL</h2>
           <p>Sabemos que conectados, comunicados, colaborando y creando juntos podemos llegar mucho más lejos</p>
         </div>
         <p>I would like to <mark> Express my thanks </mark> and for ung tnd for your excellent writing. Good job and well done. I look forward to working with you in our next project. Nam nec tellus a odio tincidunt auctor a ornare odio.  </p>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="skill medium">
                   <div class="skill-bar" data-percent="85" data-delay="0" data-type="%">
                       <div class="skill-title">HTML5</div>
                   </div>
               </div>
             </div>
             <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="skill medium">
                   <div class="skill-bar" data-percent="90" data-delay="0" data-type="%">
                       <div class="skill-title">CSS3</div>
                   </div>
               </div>
             </div>
        </div>
     </div>
   </div>
  </div>
</section>

{{-- <section class="page-section-ptb" data-jarallax='{"speed": 0.6}' style="background: url({{asset('lacompaniadigital/images/bg/05.jpg')}});">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="p-3">
          <div class="section-title">
            <h6 class="text-white">¿Qué hacemos?</h6>
            <h3 class="text-white">Te conectamos con tu pares</h3>
            <p class="text-white">Gracias a nuestro sistema de comunidades digitales</p>
          </div>
          <p class="text-white">LA COMPAÑÍA DIGITAL está para impulsarte y conectarte con las personas que comparten tus mismos intereses.</p>
        </div>
        
      </div>
   </div>
  </div>
</section> --}}

<section class="page-section-pb bg-dark">
  <div class="container">
    <div class="row justify-content-center pt-30">
      <div class="col-12 text-center">
        <h4 class="text-white pt-10 pb-30">Social <span class="theme-bg text-dark">media</span></h4>
      </div>
      <div class="col-12 d-flex">
        <div class="col-4">
          <a class="twitter-timeline" data-lang="es" data-height="400" data-theme="light" href="https://twitter.com/CompaniaDigital?ref_src=twsrc%5Etfw">Tweets by CompaniaDigital</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>
        <div class="col-4">
          <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Flacompaniadigital%2F&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=129284427705486" width="340" height="400" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
        </div>
        <div class="col-4">
          <h4 class="text-white">Feed de Instragram</h4>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="page-section">
   <div class="mt-0">
     <img class="img-fluid mx-auto" src="lacompaniadigital/images/bg/23.jpg" alt="">
   </div>
</section>

@endsection