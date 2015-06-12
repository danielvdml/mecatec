


<!DOCTYPE html>
<html>
<head>

  <!-- EXTRA HEAD PARA LA FECHA-->
     

    
  <!-- FIN EXTRA HEAD -->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title> Encabezado </title>

    {{HTML::style('assets/css/bootstrap.css');}}  
    {{HTML::style('assets/font-awesome/css/font-awesome.css');}}  
    {{HTML::style('assets/css/zabuto_calendar.css');}}
    {{HTML::style('assets/js/gritter/css/jquery.gritter.css');}}
    {{HTML::style('assets/css/style.css');}}
    {{HTML::style('assets/css/style-responsive.css');}}
    {{HTML::script('assets/js/chart-master/Chart.js');}} 

    
    {{HTML::script('http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js');}}

        
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
      h1.tree{
          border-width: 1px;
          border-style: solid;
          background-color: #68dff0;
          border-color: yellow;
          font-size: 30px;
      }

    </style> 
</head>
<body>

	<!-- ////////////////////////////////// MENÚ DE NOTIFICACIONES ///////////////////////////////////////////////////-->


<div>
	<header class="header black-bg">
            <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
            </div>
            <!--logo start-->
            <a href="home" class="logo"><b>MECATEC PERÚ</b></a>
            
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="login">Logout</a></li>
            	</ul>
            </div>
    </header>

  
  <!-- ////////////////////////////////////////////// MENÚ PRINCIPAL /////////////////////////////////////////////////-->

   <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
                  <p class="centered"><a href="profile.html"><img src={{asset('assets/img/tract.jpg');}} class="img-circle" width="150"></a></p>
                  <h5 class="centered">Cliente</h5> 
                    
                  <li class="mt">
                      <a class="active" href="home">
                          <i class="fa fa-home"></i>
                          <span>Home</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-desktop"></i>
                          <span>Cuenta</span>
                      </a>
                      <ul class="sub">
                          
                          <li><a  href="buttons.html">Ver Perfil</a></li>
                          <li><a  href="panels.html">Actualizar Datos</a></li>
                          
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-cogs"></i>
                          <span>Cotizaciones</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="solicitar" >Solicitar cotización</a></li>
                          <li><a  href="cotizacion">Cotizaciones Pasadas</a></li>
                          
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-book"></i>
                          <span>Servicio</span>
                      </a>
                      <ul class="sub">
                       
                          <li><a  href="estado">Revisar Estado de Servicio</a></li>
                         
                         
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-tasks"></i>
                          <span>Servicio Post Venta</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="reclamo">Realizar Reclamo</a></li>
                          <li><a  href="ContactoEmpresaCli.html">Contactar con la empresa</a></li>
                      </ul>
                  </li>
                  <!--
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-th"></i>
                          <span>Data Tables</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="basic_table.html">Basic Table</a></li>
                          <li><a  href="responsive_table.html">Responsive Table</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class=" fa fa-bar-chart-o"></i>
                          <span>Charts</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="morris.html">Morris</a></li>
                          <li><a  href="chartjs.html">Chartjs</a></li>
                      </ul>
                  </li> -->

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>


	@section('SolicitarCotizacion')
		 {{HTML::script('assets/js/SolicitarCotizacion.js');}}
	@show
	@section('HomeCliente')
		 {{HTML::script('assets/js/HomeCliente.js');}}
	@show

	@section('login')
		{{HTML::script('assets/js/login.js');}}
		{{HTML::style('assets/css/login.css');}}  
	@show
	
</div>

 	{{HTML::script('assets/js/chart-master/Chart.js');}} 
    {{HTML::script('assets/js/jquery.js');}}
    {{HTML::script('assets/js/jquery-1.8.3.min.js');}}
    {{HTML::script('assets/js/bootstrap.min.js');}}
    {{HTML::script('assets/js/jquery.dcjqaccordion.2.7.js');}}
    {{HTML::script('assets/js/jquery.scrollTo.min.js');}}
    {{HTML::script('assets/js/jquery.nicescroll.js" type="text/javascript');}}
    {{HTML::script('assets/js/jquery.sparkline.js');}}


    <!--common script for all pages-->
    {{HTML::script('assets/js/common-scripts.js');}}
    
    {{HTML::script('assets/js/gritter/js/jquery.gritter.js');}}
    {{HTML::script('assets/js/gritter-conf.js');}}

    <!--script for this page-->
    {{HTML::script('assets/js/sparkline-chart.js');}}    
    {{HTML::script('assets/js/zabuto_calendar.js');}}  
</body>
</html>