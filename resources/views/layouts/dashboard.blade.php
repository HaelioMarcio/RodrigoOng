<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>O Pequeno Nazareno</title>	
    <!-- Bootstrap -->
    <link href="{{url('')}}/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{url('')}}/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{url('')}}/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{url('')}}/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="{{url('')}}/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="{{url('')}}/build/css/custom.min.css" rel="stylesheet">
    @yield('scripts')
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="{{url('dashboard')}}" class="site_title"><i class="fa fa-sun-o"></i> 
              	<span>
              		O Pequeno N.
              	</span></a>
            </div>
            <div class="clearfix"></div>
            <!-- menu profile quick info -->
            <div class="profile">
              <div class="profile_pic">
                <img src="{{url('')}}/images/user.png" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Seja bem vindo,</span>
	            <br>
	            <p>{{Auth::user()->name}}</p>
              </div>
            </div>
            <!-- /menu profile quick info -->
            <br />
            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{url('dashboard')}}">Dashboard</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-th-list"></i> Catálogo de Produtos <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{url('dashboard/produto')}}">Produtos</a></li>
                      <li><a href="{{url('dashboard/categoria')}}">Categoria</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Site <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{url('dashboard/galeria')}}">Galeria</a></li>
                      <li><a href="{{url('dashboard/video')}}">Vídeos</a></li>
                      <li><a href="{{url('dashboard/slideshow')}}">Slideshow</a></li>
                      <li><a href="{{url('dashboard/parametro')}}">Parâmetros / Posições</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-desktop"></i> Relatórios <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{url('alunos/export-excel')}}"></a></li>
                    </ul>
                  </li>
                  
                  @if(Auth::user()->type == "Administrador")
                  <li><a><i class="fa fa-group"></i> Usuários <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{url('dashboard/usuario')}}">Lista</a></li>
                      <li><a href="{{url('dashboard/usuario/novo')}}">Novo Usuário</a></li>
                    </ul>
                  </li>
                  @endif

                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->
            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a href="{{url('logout')}}" data-toggle="tooltip" data-placement="top" title="Logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>
        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>

              </div>
              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="{{url('')}}/images/user.png" alt="...">
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    @if(Auth::user()->type == "Administrador")
                  		<li><a href="{{url('dashboard/usuario')}}">Usuários</a></li>
                    @endif()
                    <li><a href="{{url('logout')}}"><i class="fa fa-sign-out pull-right"></i> Sair</a></li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          @yield('content')
          <!-- /top tiles -->
          <br />
        </div>
        <!-- /page content -->
			
        <!-- footer content -->
        <footer>
          <div class="pull-right">
            O Pequeno Nazareno - <a href="https://colorlib.com">RM SISTEMAS</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="{{url('')}}/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="{{url('')}}/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="{{url('')}}/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="{{url('')}}/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="{{url('')}}/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="{{url('')}}/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="{{url('')}}/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="{{url('')}}/vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="{{url('')}}/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="{{url('')}}/vendors/Flot/jquery.flot.js"></script>
    <script src="{{url('')}}/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="{{url('')}}/vendors/Flot/jquery.flot.time.js"></script>
    <script src="{{url('')}}/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="{{url('')}}/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="{{url('')}}/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="{{url('')}}/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="{{url('')}}/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="{{url('')}}/vendors/DateJS/build/date.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{url('')}}/js/moment/moment.min.js"></script>
  
    <!-- jquery.inputmask -->
    <script src="{{url('')}}/vendors/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="{{url('')}}/build/js/custom.min.js"></script>
    
    

    <!-- /bootstrap-daterangepicker -->
    <script>
      //Mask
      $(":input").inputmask();
    </script>
    
    @yield('scripts')

    <script>
      $(document).ready(function(){
        $("#gravarForm").click(function(){
        tinymce.triggerSave(true,true);
          var descricao = $("#descricao").val();
          alert(descricao);
        });
      });
    </script>

  </body>
</html>
