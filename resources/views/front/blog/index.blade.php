@extends('layouts.app')
@section('content')

<section class="page-title bg-dark parallax pb-10 pt-90" data-jarallax='{"speed": 0.6}' style="background-image: url(images/bg/programming2.jpg);">
    
</section>

<section class="page-sidebar page-section bg-gray2 masonry-main">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-3 col-md-3 page-content bg-white">
        <div class="sticky-top">
          <br>
          <div class="sidebar-widget">
            <h6 class="mb-20">Buscar</h6>
              <div class="widget-search">
                <i class="fa fa-search"></i>
                <input type="search" class="form-control" placeholder="Buscar en LA COMPAÑÍA...">
              </div>
              <div class="sidebar-widget mb-40">
                <h6 class="mt-40 mb-20">Comunidades destacadas </h6>
               <div class="recent-post clearfix">
                 <div class="recent-post-image">
                   <img class="img-fluid" src="{{asset('lacompaniadigital/images/blog/01.jpg')}}" alt="">
                 </div>
                <div class="recent-post-info">
                 <a href="#">Desarrollo Web</a>
                 <span>Cantidad_de_publicaciones</span>
                </div>
               </div>
               <div class="recent-post clearfix">
                 <div class="recent-post-image">
                   <img class="img-fluid" src="{{asset('lacompaniadigital/images/blog/02.jpg')}}" alt="">
                 </div>
                <div class="recent-post-info">
                 <a href="#">Marketing digital</a>
                 <span>Cantidad_de_publicaciones</span>
                </div>
               </div>
               <div class="recent-post clearfix">
                 <div class="recent-post-image">
                   <img class="img-fluid" src="{{asset('lacompaniadigital/images/blog/03.jpg')}}" alt="">
                 </div>
                <div class="recent-post-info">
                 <a href="#">Diseño gráfico</a>
                 <span>Cantidad_de_publicaciones</span>
                </div>
               </div>
             </div>

             <div class="sidebar-widget mb-40">
              <h6 class="mt-40 mb-20">Tus favoritas </h6>
             <div class="recent-post clearfix">
               <div class="recent-post-image">
                 <img class="img-fluid" src="{{asset('lacompaniadigital/images/blog/01.jpg')}}" alt="">
               </div>
              <div class="recent-post-info">
               <a href="#">Desarrollo Web</a>
               <span>Cantidad_de_publicaciones</span>
              </div>
             </div>
             <div class="recent-post clearfix">
               <div class="recent-post-image">
                 <img class="img-fluid" src="{{asset('lacompaniadigital/images/blog/02.jpg')}}" alt="">
               </div>
              <div class="recent-post-info">
               <a href="#">Marketing digital</a>
               <span>Cantidad_de_publicaciones</span>
              </div>
             </div>
             <div class="recent-post clearfix">
               <div class="recent-post-image">
                 <img class="img-fluid" src="{{asset('lacompaniadigital/images/blog/03.jpg')}}" alt="">
               </div>
              <div class="recent-post-info">
               <a href="#">Diseño gráfico</a>
               <span>Cantidad_de_publicaciones</span>
              </div>
             </div>
           </div>
          </div>
        </div>
      </div>
       <div class="col-lg-9 col-md-9 page-content">
        <br>
        <div class="container-fluid">
          <div class="row">
            <div class="col">
              <div class="blog-entry">
                <div class="blog-detail pb-0">
                  <ul class="breadcrumb">
                    <li><a class="text-dark" href="#"><i class="fa fa-home"></i> Todas las categorías</a> <i class="fa fa-angle-double-right"></i></li>
                    <li><a class="text-dark" href="">Desarrollo Web</a></li>
                  </ul>
                  
                    <h3 class="text-primary">Desarrollo Web</h3>
                    <p>Dolor sit consectetur conseqt quibusdam, enim expedita sed quia nesciunt</p>

                    <ul class="nav nav-tabs nav-center" id="myTab" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link" id="community-06-tab" data-toggle="tab" href="#community-06" role="tab" aria-controls="community-06" aria-selected="true"> <i class="fa fa-home mr-2"></i> Comunidad</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active show" id="home-06-tab" data-toggle="tab" href="#home-06" role="tab" aria-controls="home-06" aria-selected="true"> <i class="fa fa-home mr-2"></i> Blog</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="portfolio-06-tab" data-toggle="tab" href="#portfolio-06" role="tab" aria-controls="portfolio-06" aria-selected="false"><i class="fa fa-picture-o mr-2"></i> Noticias </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="profile-06-tab" data-toggle="tab" href="#profile-06" role="tab" aria-controls="profile-06" aria-selected="false"><i class="fa fa-user mr-2"></i> Foro  </a>
                      </li>
                     
                    </ul>
                </div>
              </div>
           </div>
          </div>
          <br>
          <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>¿Primera vez por aquí?</strong> Mirá la <a href="">Introduccion a las comunidades</a>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <div class="tab tab-border nav-center">
            <div class="tab-content" id="myTabContent" style="min-height: 40vh">
            <div class="tab-pane fade" id="community-06" role="tabpanel" aria-labelledby="community-06-tab">
                <div class="col-12">
                  <div class="row">
                    <div class="col-lg-4 col-sm-6 sm-mb-30">
                      <div class="card">
                        <div class="card-body">
                          <div class="counter left-icon">
                            <span class="icon ti-user theme-color" aria-hidden="true"></span>
                            <span class="timer" data-to="4905" data-speed="10000">4905</span>
                            <label>Usuarios registradoss</label>
                          </div>
                        </div>
                      </div>
                      
                    </div>
                    <div class="col-lg-4 col-sm-6 sm-mb-30">
                      <div class="card">
                        <div class="card-body">
                          <div class="counter left-icon">
                            <span class="icon ti-help-alt theme-color" aria-hidden="true"></span>
                              <span class="timer" data-to="3750" data-speed="10000">3750</span>
                              <label>Entradas publicadas</label>
                            </div>
                        </div>
                      </div>
                      
                    </div>
                    <div class="col-lg-4 col-sm-6 xs-mb-30">
                      <div class="card">
                        <div class="card-body">
                          <div class="counter left-icon">
                            <span class="icon ti-check-box theme-color" aria-hidden="true"></span>
                            <span class="timer" data-to="4782" data-speed="10000">4782</span>
                            <label>Debates abiertos</label>
                          </div>
                        </div>
                      </div>
                      
                    </div>
                  </div>
                  
                  <div class="row mt-20">
                    <div class="col-md-6">
                      <div class="card">
                        <div class="card-body">
                          <h5 class="mt-20">Top usuarios</h5>
                          <p>So, there you have it; the six steps that will help you to the fabled land of achievement and success! You now have the opportunity to push ahead and reach your potential. No more excuses.</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="card">
                        <div class="card-body">
                          <h5 class="mt-20">Lo más relevante</h5>
                          <p>So, there you have it; the six steps that will help you to the fabled land of achievement and success! You now have the opportunity to push ahead and reach your potential. No more excuses.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade active show" id="home-06" role="tabpanel" aria-labelledby="home-06-tab">
                <div class="col-12">
                  <div class="masonry columns-3">
                    <div class="grid-sizer"></div>
  
                      @foreach ($posts as $post)
                          
                      
                      <div class="masonry-item">
  
                        <div class="blog-entry">
                          <div class="entry-image clearfix">
                                <img src="{{asset('lacompaniadigital/images/blog/011.jpg')}}" alt="">
                            </div>
                            <div class="blog-detail">
                              <div class="media">
                                <div class="media-body">
                                  <div class="entry-title mb-10">
                                      <a href="{{route('show_post', $post->slug)}}">{{$post->title}}</a>
                                  </div>
                                </div>
                              </div>
                                  <div class="entry-share clearfix">
                                    <div class="entry-button">
                                      <div class="entry-meta">
                                        <div class="listing-post-meta clearfix">
                                          <ul class="list-unstyled d-inline-block">
                                              <li><a href="#"><i class="fa fa-comment-o text-gray"></i> 4</a></li>
                                              <li><a href="#"><i class="fa fa-heart-o text-gray"></i> 95</a></li>
  
                                          </ul>
                                          <div class="list-style-none float-right mt-1">
                                            <span class="badge badge-secondary">Diseño</span>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                            </div>
                        </div>
                      
                      </div>
                      @endforeach
  
                    
                  </div>
  
                  <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                      {{$posts->links()}}
                      {{-- <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                      </li>
                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                      </li> --}}
                    </ul>
                  </nav>
                </div>
              </div>
              <div class="tab-pane fade" id="profile-06" role="tabpanel" aria-labelledby="profile-06-tab">
                <div class="col-lg-12">
                    <div class="text-center">
                        <i class="fa fa-cog fa-spin fa-5x fa-fw margin-bottom"></i>
                        <h3 class="theme-color mt-20">Sección en desarrollo</h3>
                        <p>Estamos trabajando para habilitarla lo antes posible.</p>
                    </div>
                </div>
              </div>
              <div class="tab-pane fade" id="portfolio-06" role="tabpanel" aria-labelledby="portfolio-06-tab">
                <p>Benjamin Franklin, inventor, statesman, writer, publisher and economist relates in his autobiography that early in his life he decided to focus on arriving at moral perfection. He made a list of 13 virtues, assigning a page to each. Under each virtue he wrote a summary that gave it fuller meaning. Then he practiced each one for a certain length of time. To make these virtues a habit, Franklin can up with a method to grade himself on his daily actions.</p>
              </div>
            </div>
        </div>
       </div>
        

       

        
       </div>
        
    </div>
  </div>
</section>

@endsection