@extends('layouts.site')
@section('content')
  <section class="theme-color pad-top-bottom text-center">
    <div class="container">
      <div class="row"> 
        <div class="col-md-12 animated" data-animation="fadeIn">
          <img src="{{url('img/somos-energia-que-transforma.jpg')}}" style="margin-top:-25px">
          <header>
            <div id="quemsomos"></div>
            <h1>Apresentação O Pequeno Nazareno </h1>
            <span class="line"> <span></span> </span>
            <h5>Que futuro terá uma sociedade que nega à suas crianças o direito a um presente?</h5>
          </header>
        </div>
        <div class="col-md-4 col-sm-4 block-item animated" data-animation="fadeIn">
          <img src="{{url('img/logo.jpg')}}" style="width:100px; margin-top:-30px">
          <!--
          <p><i class="fa fa-cloud active"></i></p>
          -->
          <div id="quemsomos"></div>
          <h3>Somos Luz</h3>
          <p>A Associação O Pequeno Nazareno é uma organização não governamental sem fins lucrativos, especializada no trabalho com de crianças e adolescentes em situação de moradias nas ruas e suas famílias...</p>
          <p><a href="" class="square-btn">Veja mais</a></p><!--web_designer_roger_ugarte.html-->
        </div>
        <div class="col-md-4 col-sm-4 block-item animated" data-animation="fadeIn">
          <p><i class="fa fa-trophy"></i></p>
          <h3>Somos Força</h3>
          <p>Pendência de texto</p>
          <p><a href="" class="square-btn">Veja mais</a></p>
        </div>
        <div class="col-md-4 col-sm-4 block-item animated" data-animation="fadeIn">
          <p><i class="fa fa-bolt"></i></p>
          <h3>Somos Transformação</h3>
          <p>Pendência de texto</p>
          <p><a href="" class="square-btn">Veja mais</a></p>
        </div>
      </div>
    </div>
  </section>
  <section class="full-witdh what-we-do darkness" data-stellar-background-ratio="0.5">
    <div class="transparent-bg">
      <div class="container pad-top-bottom text-center">
        <div class="row"> 
          <div class="col-md-12 animated" data-animation="fadeIn">
            <header>
              <h1>Somos Luz</h1>
              <span class="line"> <span>
              <p><a href="" class="square-btn">Veja mais</a></p><!--web_designer_servicos.html-->
              </span> </span> </header>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-6" data-animation="fadeIn" style="margin: 0 -90px 0 60px">
            <ul class="flt-right">
              <li class="animated" data-animation="fadeInUp" data-animation-delay="200">
                <i class=""></i>Educação Social de Rua <!--<i class="fa fa-apple"></i>-->
              </li>
              <li class="animated" data-animation="fadeInUp" data-animation-delay="400">
                <i class=""></i>Acolhimento Institucional<!--<i class="fa fa-android"></i>-->
              </li>
              <li class="animated" data-animation="fadeInUp" data-animation-delay="600">
                <i class=""></i>Inserção Mercado<!--<i class="fa fa-windows"></i>-->
              </li>
              <!--
              <li class="animated" data-animation="fadeInUp" data-animation-delay="800">
                <i class="fa fa-code"></i> Texto 04
              </li>
              -->
            </ul>
          </div>
          <div class="col-md-4 col-sm-4 hide-mob animated text-center" data-animation="bounceInUp"> 
            <!--
            <img src="img/mobile.png" /> 
            -->
          </div>
          <div class="col-md-4 col-sm-4 col-xs-6" style="margin-left:-90px">
            <ul class="flt-left">
              <li class="animated" data-animation="fadeInUp" data-animation-delay="200">
                <i class=""></i> Acompanhamento Familiar<!--<i class="fa fa-film"></i>-->
              </li>
              <li class="animated" data-animation="fadeInUp" data-animation-delay="400">
                <i class=""></i> Desenvolvimento Comunitário<!--<i class="fa fa-bar-chart-o"></i>-->
              </li>
              <li class="animated" data-animation="fadeInUp" data-animation-delay="600">
                <i class=""></i> Mobilização Social<!--<i class="fa fa-html5"></i>-->
              </li>
              <!--
              <li class="animated" data-animation="fadeInUp" data-animation-delay="800">
                <i class="fa fa-css3"></i> Texto 08
              </li>
              -->
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="theme-color pad-top-bottom text-center">
    <div class="row"> 
      <div class="col-md-12 animated" data-animation="fadeIn">
        <header>
          <h1>ONDE ESTAMOS</h1>
          <span class="line"> <span></span> </span> 
        </header>
      </div>
      <!--
      <div class="col-md-12 portfolioFilter clearfix animated" data-animation="fadeInDown">
        <ul>
          <li><a href="#" data-filter="*" class="current">Todas</a></li>
          <li><a href="#" data-filter=".illustration">Sites</a></li>
          <li><a href="#" data-filter=".branding">Edição de Images</a></li>
          <li><a href="http://arteugarte.com/web_designer_modelos.html" data-filter=".print">Mais Modelos</a></li>
        </ul>
      </div>
      -->
      <div class="portfolioContainer" align="center">
        <div class="portfolio-sample">
          <img src="{{url('img/portfolio/p1(95).JPG')}}" />
          <div class="overlay text-center">
            <h3>Fortaleza</h3>
            <h5>Texto</h5>
            <a href="{{url('img/portfolio/1(95).JPG')}}" data-fancybox-group="gallery" class="fancybox-effects-b">
              <i class="fa fa-search"></i>
            </a> 
            <a href="" target="_blank">
              <i class="fa fa-link"></i>
            </a> 
          </div>
        </div>
        <div class="portfolio-sample">
          <img src="{{url('img/portfolio/p1(125).JPG')}}">
          <div class="overlay text-center">
            <h3>Recife</h3>
            <h5>Texto</h5>
            <a href="{{url('img/portfolio/1(125).JPG')}}" data-fancybox-group="gallery" class="fancybox-effects-b">
              <i class="fa fa-search"></i>
            </a> 
            <a href="" target="_blank">
              <i class="fa fa-link"></i>
            </a> 
          </div>
        </div>
        <div class="portfolio-sample">
          <img src="{{url('img/portfolio/p1(126).JPG')}}">
          <div class="overlay text-center">
            <h3>Manaus</h3>
            <h5>Texto</h5>
            <a href="{{url('img/portfolio/1(126).JPG')}}" data-fancybox-group="gallery" class="fancybox-effects-b">
              <i class="fa fa-search"></i>
            </a> 
            <a href="" target="_blank">
              <i class="fa fa-link"></i>
            </a> 
          </div>
        </div>
        <div>
          <header>
            <h1 style="margin-top: 50px">VÍDEOS</h1>
            <span class="line"> <span></span> </span> 
          </header>
          <div class="row">
          @foreach($videos as $v)
          <iframe width="560" height="315" src="{{$v->link}}" frameborder="0" allowfullscreen></iframe>
          @endforeach
          </div>
          
        </div>
      </div>
      <div class="col-md-12 pad-top-60 view-more animated" data-animation="fadeInUp"> 
        <a href="{{url('videos')}}">Outros Vídeos</a><!--web_designer_modelos.html--> 
      </div>
      <img src="{{url('img/sua-energia-e-a-nossa-forca.jpg')}}" style="margin-top:50px"/>
      
    </div>
  </section>
  <section class="full-width grey-bg"></section>
  <!--
  <section class="theme-color pad-top-bottom text-center">
    <div class="container">
      <div class="row"> 
        <div class="col-md-12 animated" data-animation="fadeIn">
          <header>
            <h1>ALGUNS FATOS INTERESSANTES</h1>
            <span class="line"> <span></span> </span> 
          </header>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-6 animated" data-animation="fadeInUp">
          <div class="fun-facts">
            <div class="icon-facts"> <i class="fa fa-gears"></i> </div>
            <h1 class="counter">200</h1>
            <h5>AÇÕES</h5>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-6 animated" data-animation="fadeInUp">
          <div class="fun-facts">
            <div class="icon-facts"> <i class="fa fa-briefcase"></i> </div>
            <h1 class="counter">100</h1>
            <h5>COLABORADORES</h5>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-6 animated" data-animation="fadeInUp">
          <div class="fun-facts">
            <div class="icon-facts"> <i class="fa fa-gift"></i> </div>
            <h1 class="counter">500</h1>
            <h5>VISITAS DIÁRIAS NO SITE</h5>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-6 animated" data-animation="fadeInUp">
          <div class="fun-facts">
            <div class="icon-facts"> <i class="fa fa-heart-o"></i> </div>
            <h1>+ 4000</h1>
            <h5>facebook curtidas</h5>
          </div>
        </div>
      </div>
    </div>
  </section>
  -->
  <section class="full-witdh newsletter darkness">
    <div class="transparent-bg">
      <div class="container pad-top-bottom text-center">
        <div class="row"> 
          <div class="col-md-12 animated" data-animation="fadeInDown">
            <header>
              <h1>Seja energia que transforma</h1>
              <h2>ASSINE NOSSA NEWSLETTER</h2>
              <span class="line"> <span></span> </span>
            </header>
          </div>
          <div class="col-md-12 animated" id="contactForm" data-animation="fadeInUp">
            <div class="done"> <strong>OBRIGADO</strong> Recebemos sua mensagem. </div>
            
            <form class="form-newsletter">
              
              <h4>E-MAIL:</h4>
              <br>
              <input type="text" id="email-newsletter" name="email" size="24">
              <br>
              
            </form>
            <button class="btn-newsletter">OBRIGADO</button>
            <div style="color: #fff;" id="resposta-newsletter"></div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--
  <section class="theme-color full-width">
    <div class="container pad-top-100 text-center">
      <div class="row"> 
        <div class="col-md-12 animated" data-animation="fadeIn">
          <header>
            <h1>Sua energia é a nossa força</h1>
            <span class="line"> <span></span> </span> 
          </header>
        </div>
      </div>
    </div>
    <div class="process-bg full-width text-center">
      <div class="container">
        <div class="row"> 
          <div class="col-md-2 col-sm-4 col-xs-6 animated" data-animation="bounceIn" data-animation-delay="100">
            <div class="cricle-process"> <i class="fa fa-coffee"></i>
              <h4>TEXTO 01</h4>
            </div>
          </div>
          <div class="col-md-2 col-sm-4 col-xs-6 animated" data-animation="bounceIn" data-animation-delay="500">
            <div class="cricle-process"> <i class="fa fa-edit"></i>
              <h4>TEXTO 02</h4>
            </div>
          </div>
          <div class="col-md-2 col-sm-4 col-xs-6 animated" data-animation="bounceIn" data-animation-delay="900">
            <div class="cricle-process"> <i class="fa fa-pencil"></i>
              <h4>TEXTO 03</h4>
            </div>
          </div>
          <div class="col-md-2 col-sm-4 col-xs-6 animated" data-animation="bounceIn" data-animation-delay="1300">
            <div class="cricle-process"> <i class="fa fa-building"></i>
              <h4>TEXTO 04</h4>
            </div>
          </div>
          <div class="col-md-2 col-sm-4 col-xs-6 animated" data-animation="bounceIn" data-animation-delay="1700">
            <div class="cricle-process"> <i class="fa fa-gears"></i>
              <h4>TEXTO 05</h4>
            </div>
          </div>
          <div class="col-md-2 col-sm-4 col-xs-6 animated" data-animation="bounceIn" data-animation-delay="2100">
            <div class="cricle-process"> <i class="fa fa-paper-plane"></i>
              <h4>TEXTO 05</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  -->
  <section class="full-witdh newsletter darkness"> </section>
  <!--
  <section class="full-witdh video-bg darkness">
    <div class="video-wrapper">
      <div class="transparent-bg">
        <div class="container pad-top-bottom text-center video-text">
          <div class="row"> 
            <div class="col-md-12 animated" data-animation="fadeInUp">
              <h1>LOJA O Pequeno Nazareno</h1>
              <h4>VEJA NOSSOS PRODUTOS E AJUDE A ORGANIZAÇÃO</h4>
              <p><a href="" class="slide-btn">veja mais</a></p> <!--web_designer_quem_somos.html->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  -->
  <section class="full-witdh loja darkness">
    <div class="transparent-bg">
      <div class="container pad-top-bottom text-center">
        <div class="row"> 
          <div class="col-md-12 animated" data-animation="fadeInDown">
            <header>
              <h1>LOJA O Pequeno Nazareno</h1>
              <h4>VEJA NOSSOS PRODUTOS E AJUDE A ORGANIZAÇÃO</h4>
              <p><a href="{{url('loja')}}" class="slide-btn">veja mais</a></p><!--web_designer_quem_somos.html-->
              <span class="line"> <span></span> </span>
            </header>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection()

@section('scripts')
  <script type="text/javascript">
    $(document).ready(function(){
      $(".btn-newsletter").click(function(){

        var emailInput = $('#email-newsletter').val();
        if(emailInput == '' | emailInput == null){
          $('#resposta-newsletter').html('Por favor, preencha o campo com seu email.');
          return false;
        }
        var url = "<?php echo url('newsletter/store'); ?>";
        
        $.get(
          url+'?email='+emailInput,
          function(data){
            if(data.success){
              $('#resposta-newsletter').html('<div class="alert alert-success" role="alert">'+data.success+'</div>');  
            } else {
              $('#resposta-newsletter').html('<div class="alert alert-danger" role="alert">'+data.email[0]+'</div>');  
            }
          });

      });
    });
  </script>
@endsection()