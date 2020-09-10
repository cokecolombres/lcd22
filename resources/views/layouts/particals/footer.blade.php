<footer class="footer page-section bg-dark">
 <div class="container">
  <div class="row">
    <div class="col-lg-4 col-md-6 col-sm-6 sm-mb-30">
      <div class="footer-logo">
        <img id="logo-footer" class="mb-20" src="{{asset('lacompaniadigital/images/logo-06.png')}}" alt="">
      </div>
      <p class="text-white pb-10">Noticias, opiniones y consejos sobre los medios digitales y su uso</p>
      <div class="social-icons medium color clearfix">
        <ul>
         <li class="social-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
         <li class="social-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
         <li class="social-dribbble"><a href="#"><i class="fa fa-dribbble"></i> </a></li>
         <li class="social-linkedin"><a href="#"><i class="fa fa-linkedin"></i> </a></li>
        </ul>
      </div>
    </div>
    <div class="col-lg-4 col-md-3 col-sm-6 sm-mb-30 pt-20">
      <div class="footer-useful-link footer-hedding">
        <h6 class="text-white mb-20 mt-10 text-uppercase">Comunidades destacadas</h6>
        <ul class="list list-unstyled mb-30">
          <li><a href=""> <i class="fa fa-angle-right"></i> Desarrollo web  </a></li>
          <li><a href=""> <i class="fa fa-angle-right"></i> Marketing  </a></li>
          <li><a href=""> <i class="fa fa-angle-right"></i> Diseño gráfico </a></li>
          <li><a href=""> <i class="fa fa-angle-right"></i> Gestión de proyectos  </a></li>
          <li><a href=""> <i class="fa fa-angle-right"></i> Asesoría </a></li>
        </ul>
      </div>
    </div>
    <div class="col-lg-4 col-md-3 col-sm-6 sm-mb-30 pt-20">
      <div class="footer-useful-link footer-hedding">
        <div class="">
          <div class="mb-30">
            <h6 class="text-white mt-10 text-uppercase">Suscribite a nuestro newsletter</h6>
             <p class="text-white">Suscribite a nuestro Newsletter para recibir las últimas noticias, opiniones y consejos sobre tecnolog[ia].</p>
           </div>
            <div class="newsletter">
             <div id="mc_embed_signup_scroll">
               <form action="php/mailchimp-action.php" method="POST" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate">
                <div id="msg"> </div>
                 <div id="mc_embed_signup_scroll_2">
                   <input id="mce-EMAIL" class="form-control" type="text" placeholder="Email" name="email1" value="">
                 </div>
                 <div id="mce-responses" class="clear">
                   <div class="response" id="mce-error-response" style="display:none"></div>
                   <div class="response" id="mce-success-response" style="display:none"></div>
                   </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                   <div style="position: absolute; left: -5000px;" aria-hidden="true">
                       <input type="text" name="b_b7ef45306f8b17781aa5ae58a_6b09f39a55" tabindex="-1" value="">
                   </div>
                   <div class="clear">
                     <button type="submit" name="submitbtn" id="mc-embedded-subscribe" class="button button-border mt-20 form-button"> Suscribirme </button>
                   </div>
                 </form>
               </div>
               </div>
            </div>
        {{-- <ul>
          <li><a href="{{route('help')}}">Ayuda </a></li>
          <li><a href="about.html">Servicios</a></li>
          <li><a href="about.html">Nosotros</a></li>
        </ul>
        <ul>
          <li><a href="{{route('news')}}">Noticias </a></li>
          <li><a href="{{route('blog')}}">Blog </a></li>
          <li><a href="{{route('foro')}}">Foro </a></li>
        </ul> --}}
      </div>
    </div>
  </div>
  <div class="footer-widget mt-20">
    <div class="row">
      <div class="col-lg-6 col-md-6">
        <p class="mt-15"> &copy;Copyright <span id="copyright"> <script>document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))</script></span> <a href="#"> LA COMPAÑIA DIGITAL </a> All Rights Reserved </p>
      </div>
      <div class="col-lg-6 col-md-6 ">
        <div class="footer-social mt-10">
          <ul class="text-left text-md-right">
             <li class="list-inline-item"><a href="#">Terms &amp; Conditions </a> &nbsp;&nbsp;&nbsp;|</li>
             <li class="list-inline-item"><a href="#">API Use Policy </a> &nbsp;&nbsp;&nbsp;|</li>
             <li class="list-inline-item"><a href="#">Privacy Policy </a> </li>
          </ul>
          </div>
      </div>
    </div>
  </div>
  </div>
</footer>