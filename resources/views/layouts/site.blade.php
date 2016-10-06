<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width">
<title>O Pequeno Nazareno</title>
<link rel="shortcut icon" href="img/favicon.ico">
<link rel="apple-touch-icon" href="img/apple/apple_touch_icon_57.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/apple/apple_touch_icon_72.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/apple/apple_touch_icon_114.png">
<link rel="stylesheet" href="{{url('css/bootstrap/bootstrap.min.css')}}" />
<link rel="stylesheet" href="{{url('css/bootstrap/bootstrap-custom.css')}}" />
<link rel="stylesheet" href="{{url('js/fancybox/jquery.fancybox.css')}}" />
<link rel="stylesheet" href="{{url('js/fancybox/helpers/jquery.fancybox-thumbs.css')}}" />
<link rel="stylesheet" href="{{url('css/style.css')}}" />
<link rel="stylesheet" href="{{url('css/theme/light.css')}}" />
<link rel="stylesheet" href="{{url('css/color/alizarin.css')}}" />
<link rel="stylesheet" href="{{url('css/home/index05.css')}}" />
<link rel="stylesheet" href="{{url('css/responsive.css')}}" />
<script type="text/javascript" src="{{url('js/modernizr.custom.79639.js')}}"></script>
<script type="text/javascript">
    var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-4359696-1']);
      _gaq.push(['_trackPageview']);
    
      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
  </script>
</head>
<body>
<div id="loading"> 
  <img src="{{url('img/loader.gif')}}"/> 
</div>
<nav id="slidemenu" class="menu">
  <div class="slidemeu-content">
    <div class="logo"> 
      <a href="index.html" title="Home"> 
        <img src="{{url('img/logo/logo.png')}}" width="184" height="99"> 
      </a> 
    </div>
    <div class="links">
      <div id="accordian">
        <ul>
          <li>
            <h3><a href="{{url('')}}">Home</a></h3>
          </li>
          <li>
            <h3><a href="#quemsomos">Quem Somos</a></h3>
          </li>
          <li>
            <h3><a href="#direcao">Direção</a></h3>
          </li>
          <li>
            <h3><a href="#servicos">Serviços</a></h3>
          </li>
          <li>
            <h3><a href="#portfolio">Portfólio</a></h3>
          </li>
          <!--
          <li>
            <h3><a href="modelos.html">Ideias de Sites</a></h3>
          </li>
          -->
          <li>
            <h3><a href="#blog">Blog</a></h3>
          </li>
          <li>
            <h3><a href="#contato">Contato</a></h3>
          </li>
        </ul>
      </div>
    </div>
    <div class="menu-info">
      <div> 
        <i class="fa fa-envelope-o"></i>
        <span>marketing
        @pequenonazareno.org.br</span> 
      </div>
      <div> 
        <i class="fa fa-phone"></i> 
        <span>(85)985569794
        (85)999806867</span> 
      </div>
    </div>
  </div>
  <div id="overflow-icon"></div>
</nav>
<section id="full-page" class="slide_animate"> 
  <section id="home-header" class="fullwidth-slider_3">
    <div class="transparent-bg"> 
      <ul id="cbp-bislideshow" class="cbp-bislideshow">
        @foreach($images as $image)
        <li><img src="{{url('images/slideshow')}}/{{$image}}"></li>
        @endforeach
      </ul>
      <!--
      <div class="container text-center">
        <div class="row">
          <div class="col-md-12"> 
            <ul id="fade">
              <li>
                <h1 class="title-slide-bold"> <span>WEB</span>DESIGNER</h1>
              </li>
              <li>
                <h1 class="title-slide-bold">EXPRESSÃO<span>DE</span> CRIATIVIDADE</h1>
              </li>
              <li>
                <h1 class="title-slide-bold">DEFINIÇÃO<span>DE</span> INOVAÇAO</h1>
              </li>
              <li>
                <h1 class="title-slide-bold">VISÃO<span>COM</span>AÇÃO</h1>
              </li>
            </ul>
            <h3>Paixão por tecnologia</h3>
            <span class="line"><span></span></span> 
            
            <ul class="app-slide">
              <li><i class="fa fa-html5"></i></li>
              <li><i class="fa fa-css3"></i></li>
              <li><i class="fa fa-apple"></i></li>
              <li><i class="fa fa-windows"></i></li>
              <li><i class="fa fa-android"></i></li>
            </ul>
            
            <div> 
              <a href="servicos.html" class="slide-btn-2">NOSSOS SERVIÇOS</a> 
              <a href="contato.html" class="slide-btn-2">CONTATO</a> 
            </div>
          </div>
        </div>
      </div>
      -->
    </div>
  </section>
    @yield('content')
  <footer id="footer"> 
    <div class="top-footer">
      <div class="container">
        <div class="row"> 
          <div class="col-md-6  col-sm-12 col-xs-12">
            <h5><img src="{{url('img/logo/logo.png')}}" width="184" height="99" alt="Logo"></h5>
            <p>"Não adiantaria acolher a criança da rua, mudando o lugar em que ela vive, sem que houvesse uma mudança de valores na vida dela."</p>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-6">
            <h4>CONTATO</h4>
            <ul class="contact-information-footer">
              <li><i class="fa fa-map-marker"></i>Rua  Senador Alencar,1324 - Centro - Fortaleza-Ce</li>
              <li><i class="fa fa-envelope-o"></i>comunicacao@opequenonazareno.org.br</li>
              <li><i class="fa fa-phone"></i>(85)3212 5727</li>
            </ul>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-6">
            <h4>Rede Social</h4>
            <ul class="social-network-footer">
              <li>
                <a href="https://twitter.com/pequenonazareno" target="_blank">
                  <i class="fa fa-twitter"></i>
                </a>
              </li>
              <li>
                <a href="https://www.facebook.com/opequenonazarenobrasil/" target="_blank">
                  <i class="fa fa-facebook"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="bottom-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <p>&copy; COPYRIGHT TODOS OS DIREITOS RESERVADOS - O PEQUENO NAZARENO </a></p>
          </div>
        </div>
      </div>
    </div>
  </footer>
</section>
<div id="back-top"> 
  <a href="#top">
    <i class="fa fa-angle-up"></i>
  </a> 
</div>
<!--
<div class="whats" id="whats"> 
  <img src="img/whatsapp.png" width="190" height="50"/> 
</div>
-->
<!--chancela redecenica
<div class="footer1">
  <div class="container1">
   <div class="container1 twitterd1">
    <ul id="twittertwo1">
     <li><p>APOIO CULTURAL:</p><img src="../redecenica/img/chancela/coelce.png"width="55"height="55"class="img-responsive1"/></li>
     <li><p>&nbsp;</p><img src="../redecenica/img/chancela/secretaria.png" class="img-responsive1"/></li>
     <li><p>&nbsp;</p><img src="../redecenica/img/chancela/governo.png" class="img-responsive1"/></li>
     <li><p>APOIO:</p><img src="../redecenica/img/chancela/observatorio.png" class="img-responsive1"/></li>
 	 <li><p>REALIZAÇÃO:</p><img src="../redecenica/img/chancela/cia-dita.png" class="img-responsive1"/></li>
    </ul>
    <div class="clearfix1 carousel-buttons1"><a id="cprevtwo1"><img src="../redecenica/img/prev.png"/></a>
     <a id="cnexttwo1"><img src="../redecenica/img/next.png"/></a>
    </div>
    <div class="cmmnt-crsl-bull1" id="bulletstwo1"></div>
   </div>
  </div>    
</div>
-->

<script src="{{url('js/jquery-1.11.0.min.js')}}"></script> 
<script src="{{url('js/bootstrap.min.js')}}"></script><!-- Bootstrap --> 
<!--
[if lte IE 8]>
 <script src="js/respond.min.js"></script>
<![endif]
--> 
<script src="{{url('js/modernizr.js')}}"></script> 
<script src="{{url('js/jquery.easing.1.3.js')}}"></script>
<script src="{{url('js/jquery.mousewheel.js')}}"></script> 
<script src="{{url('js/retina.js')}}"></script>
<script src="{{url('js/animate.js')}}"></script> 
<script src="{{url('js/jquery.appear.js')}}"></script>
<script src="{{url('js/jquery.stellar.js')}}"></script> 
<script src="{{url('js/smoothScroll.js')}}"></script> 
<script src="{{url('js/jquery.isotope.js')}}"></script>
<script src="{{url('js/fancybox/jquery.fancybox.js')}}"></script> 
<script src="{{url('js/fancybox/helpers/jquery.fancybox-media.js')}}"></script> 
<script src="{{url('js/fancybox/helpers/jquery.fancybox-thumbs.js')}}"></script> 
<script src="{{url('js/waypoints.min.js')}}"></script>  
<script src="{{url('js/jquery.counterup.min.js')}}"></script>  
<script src="{{url('js/jquery.nicescroll.min.js')}}"></script> 
<script src="{{url('js/carousal/owl.carousel.js')}}"></script>
<script src="{{url('js/video_plugin/jquery.videobackground.js')}}"></script> 
<script src="{{url('js/video_plugin/devices.js')}}"></script>  
<script src="{{url('js/video_plugin/vidscale.js')}}"></script>
<script src="{{url('js/masonry.pkgd.min.js')}}"></script> 
<script src="{{url('js/ticker.js')}}"></script> 
<script src="{{url('js/jflickrfeed.min.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=&amp;sensor=false&amp;extension=.js"></script> 
<script src="{{url('js/scripts.js')}}"></script>

<!-- Só para essa página --> 
<script src="{{url('js/slider/cbp_bg_slideshow/cbpBGSlideshow.min.js')}}"></script> 
<script src="{{url('js/slider/cbp_bg_slideshow/jquery.imagesloaded.min.js')}}"></script>
<script>
$(function() {
	cbpBGSlideshow.init();
});
</script>
</body>
</html>