<!-- jquery -->
<script src="{{asset('lacompaniadigital/js/jquery-3.4.1.min.js')}}"></script>

<!-- plugins-jquery -->
<script src="{{asset('lacompaniadigital/js/plugins-jquery.js')}}"></script>

<!-- plugin_path -->
<script>var plugin_path = 'lacompaniadigital/js/';</script>

<!-- REVOLUTION JS FILES -->
<script src="{{asset('lacompaniadigital/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('lacompaniadigital/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script src="{{asset('lacompaniadigital/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
<script src="{{asset('lacompaniadigital/revolution/js/extensions/revolution.extension.carousel.min.js')}}"></script>
<script src="{{asset('lacompaniadigital/revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
<script src="{{asset('lacompaniadigital/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script src="{{asset('lacompaniadigital/revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
<script src="{{asset('lacompaniadigital/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<script src="{{asset('lacompaniadigital/revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
<script src="{{asset('lacompaniadigital/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script src="{{asset('lacompaniadigital/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
<!-- revolution custom -->
<script src="{{asset('lacompaniadigital/revolution/js/revolution-custom.js')}}"></script>

<!-- custom -->
<script src="{{asset('lacompaniadigital/js/custom.js')}}"></script>

<script src="{{asset('lacompaniadigital/./js/owlcarousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('lacompaniadigital/./js/owlcarousel/owl.carousel.js')}}"></script>
<script type="text/javascript">
  var owl = $('.owl-carousel');
  owl.owlCarousel({
      items:4,
      loop:true,
      margin:10,
      autoplay:true,
      autoplayTimeout:3000,
      autoplayHoverPause:true,
  });
  $('.play').on('click',function(){
      owl.trigger('play.owl.autoplay',[1000])
  })
  $('.stop').on('click',function(){
      owl.trigger('stop.owl.autoplay')
  })

  $('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
    if (!$(this).next().hasClass('show')) {
      $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
    }
    var $subMenu = $(this).next(".dropdown-menu");
    $subMenu.toggleClass('show');


    $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
      $('.dropdown-submenu .show').removeClass("show");
    });


    return false;
  });
</script>