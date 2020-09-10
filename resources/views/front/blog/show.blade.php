@extends('layouts.app')
@section('content')
<section class="page-title bg-overlay-black-60 parallax pb-10" data-jarallax='{"speed": 0.6}' style="background-image: url(images/bg/011.jpg);">
    <div class="container">
      <div class="row">
        <ul class="page-breadcrumb pb-10">
          <li><a href="#"><i class="fa fa-home"></i> Categorias</a> <i class="fa fa-angle-double-right"></i></li>
        <li><a href="index2.html">{{$post->category->name}}</a> <i class="fa fa-angle-double-right"></i></li>
          <li>Post</li>
        </ul>
        <div class="page-title-name">
        <h3 class="text-white">{{$post->title}}</h3>
        </div>
       <ul class="page-breadcrumb">
          <li><a href="{{route('profile')}}"><i class="fa fa-user"></i> {{$post->user->profile->name}}</a></li>
          <li><a class="text-white">&nbsp; 2222 puntos &nbsp;</a></li>
          <li><a class="text-white"><i class="fa fa-comment"></i>22 comentarios</a> </li>
        </ul>
    </div>
   </div>
</section>

<section class="blog masonry-main page-section-pb pt-20 bg-gray2">
 <div class="container">
   <div class="row">
      <div class="col-lg-2">
        <div class="sticky-top">
          <br>
          <button type="button" class="btn btn-outline-secondary btn-block">Atras</button>
          <button type="button" class="btn btn-outline-secondary btn-block">Secondary</button>
          <button type="button" class="btn btn-outline-secondary btn-block">Secondary</button>
          <button type="button" class="btn btn-outline-secondary btn-block">Secondary</button>
        </div>
        
      </div>
      <div class="col-lg-10 col-md-8 page-content">
        <br>
        <div class="blog-entry mb-10">
          <div class="blog-detail">
              <div class="entry-title mb-10">
                  <a href="#">{{$post->title}}</a>
              </div>
              <div class="entry-share mb-20">
              <div class="social list-style-none">
                <strong>Compartir : </strong>
                <ul>
                  <li>
                      <a href="#"> <i class="fa fa-facebook"></i> </a>
                  </li>
                  <li>
                      <a href="#"> <i class="fa fa-twitter"></i> </a>
                  </li>
                  <li>
                      <a href="#"> <i class="fa fa-pinterest-p"></i> </a>
                  </li>
                  <li>
                      <a href="#"> <i class="fa fa-dribbble"></i> </a>
                  </li>
                </ul>
              </div>
            </div>
              
            <div class="entry-content mb-20">
                {{$post->body}}
            </div>

          <h6 class="mb-20">Tags de la publicacion</h6>
          @foreach ($post->tags as $tag)    
            <span class="badge badge-secondary">{{$tag->name}}</span>
          @endforeach
          </div>
        </div>

  <!-- ================================================ -->
    <div class="port-post clearfix mt-40 bg-white">
     <div class="port-post-photo">
        <img class="rounded-circle" src="{{asset('lacompaniadigital/images/team/01.jpg')}}" alt="">
      </div>
      <div class="port-post-info">
        <h3 class="theme-color"><span>Post de:</span> {{$post->user->profile->name}} </h3>

        <ul class="breadcrumb">
          <li><a href="{{route('profile')}}">@ {{$post->user->profile->lastname}}</a></li>
          <li><a class="disabled">&nbsp; PUNTOS_TOTALES &nbsp;</a></li>
          <li><a class="disabled"><i class="fa fa-history"></i> HACE 7 HORAS</a> </li>
        </ul>
      </div>
    </div>
 <!-- ================================================ -->


    <div class="related-work mt-40">
      <div class="row">
        <div class="col-ld-12 col-md-12">
         <h3 class="theme-color mb-20">Notas relacionadas</h3>

          <div class="owl-carousel" data-nav-dots="false" data-items="2" data-xs-items="1" data-xx-items="1">
                  @foreach ($related_posts as $related)

                      <div class="item">
                        <div class="blog-box blog-1 active">
                          <div class="blog-info">
                            <span class="post-category"><a href="#">{{$related->category->name}}</a></span>
                            <h4> <a href="#"> {{$related->title}}</a></h4>
                            <p>{{$related->category->slug}}</p>
                            <p><i class="fa fa-user"></i> {{$related->user->name}}</p>
                            <p><i class="fa fa-calendar-check-o"></i> 21 April 2020 </p>
                            </div>
                            <div class="blog-box-img" style="background-image:url(images/blog/01.jpg);"></div>
                        </div>
                      </div>
                  @endforeach
          
            </div>
          </div>
        </div>

        <div class="related-work mt-40 bg-white card-body" id="comentarios">
          <div class="row">
            <div class="col-ld-12 col-md-12">
            <h3 class="text-dark mb-20">Comentarios</h3>

              <div class="blog-comments mt-40">
                <div class="comments-1">
                  <div class="comments-photo">
                    <img class="img-fluid" src="images/team/01.jpg" alt="">
                    </div>
                    <div class="comments-info">
                    <h4 class="theme-color"> Kevin Martin <span>Hace 3 horas</span></h4>
                      <div class="port-post-social float-right">
                        <a href="#">Responder</a>
                      </div>
                        <p>Sit amet nibh vulputate cursus a sit amet mauris lorem ipsum dolor sit amet of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio  <a href="#">http://themeforest.net</a> Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat </p>
                  </div>
                  </div>
                  <div class="comments-1 comments-2">
                  <div class="comments-photo">
                    <img class="img-fluid" src="images/team/02.jpg" alt="">
                    </div>
                    <div class="comments-info">
                    <h4 class="theme-color"> Kevin Martin <span>Hace 3 horas</span></h4>
                      <div class="port-post-social float-right">
                        <a href="#">Responder</a>
                      </div>
                        <p>Vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor Lorem ipsum dolor sit amet of Lorem Ipsum. Proin gravida nibh..</p>
                  </div>
                  </div>
                  
                  
              </div>

            
          </div>
        </div>

        

      </div>

      <h3 class="mb-30 mt-20">Deja tu comentario </h3>
      <div class="row">
         <div class="col-lg-12 col-md-12">
           <div id="formmessage">Success/Error Message Goes Here</div>
         </div>
       </div>
        <form id="contactform" class="gray-form form-row" role="form" method="post" action="php/contact-form.php">
             <div class="col-lg-6 col-md-6 col-sm-6">
                 <div class="form-group">
                     <input type="email" class="form-control" placeholder="Tu nombre">
                 </div>
             </div>
             <div class="col-lg-6 col-md-6 col-sm-6">
                 <div class="form-group">
                     <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Email">
                 </div>
             </div>
             <div class="col-lg-12 col-md-12">
                 <div class="form-group">
                     <textarea class="form-control" rows="7" placeholder="Escribe tu mensaje"></textarea>
                 </div>
             </div>
             <div class="col-lg-12 col-md-12">
             <div class="g-recaptcha section-field clearfix" data-sitekey="[Add your site key]"></div>
           </div>
             <div class="col-lg-12 col-md-12">
                 <input type="hidden" name="action" value="sendEmail">
                 <button id="submit" name="submit" type="submit" value="Send" class="button"><span>Comentar</span></button>
             </div>
         </form>
         <div id="ajaxloader" style="display:none"><img class="mx-auto mt-30 mb-30 d-block" src="images/pre-loader/loader-02.svg" alt=""></div>
    </div>
    </div>
  </div>
</section>
@endsection