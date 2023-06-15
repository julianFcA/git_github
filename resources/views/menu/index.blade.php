<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="webthemez">
    <title>Pagina principal | Admin</title>
	<!-- core CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
</head> 

<body id="home">

    <header id="header">
        <nav id="main-nav" class="navbar navbar-default navbar-fixed-top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php"><img src="" alt=""></a>
                </div>

                <div class="navbar-header">
                    <h1>Bienvenido </h1>
                </div>

                <div>
                    <form action="/logout"  method="POST">
                        @csrf 
                        <a href="{{route('login') }}" class="btn btn-secondary dropdown" onclick="this.closest('form').submit()">Cerrar Sesion</a>
                    </form>
                </div>
                    
                    <!-- <ul class="nav navbar-nav">
                        <li ><form  method="POST"><input type="submit"  class="btn btn-info" style="margin-top: 4rem;" value="Cerrar sesion" name="btncerrar"></form></li>                       
                    </ul> -->
                
                
            </div><!--/.container-->
        </nav><!--/nav-->
    </header><!--/header-->


	<section id="services" >
        <div class="container">

            <div class="section-header">
                <h2 class="section-title wow fadeInDown white">SERVICIOS</h2>
            </div>

            <div class="row">
                <div class="features">
                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-flag-o"></i>
                            </div>
                            <div class="btn-group">
                              <li>
                                <a href="{{route('empleado.index') }}" class="btn btn-secondary dropdown">EMPLEADO
                                </a>
                              </li>
                             
                            </div>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-flag-o"></i>
                            </div>
                            <div class="btn-group">
                              <li>
                                <a href="{{route('cliente.index') }}" class="btn btn-secondary dropdown">CLIENTE
                                </a>
                              </li>
                              
                            </div>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="100ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-heart-o"></i>
                            </div>
                            <div >
                              <li>
                                <a href="{{route('celular.index') }}" class="btn btn-secondary dropdown">CELULAR
                                </a>
                              </li>

                            </div>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="200ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-send-o"></i>
                            </div>
                            <div >
                              <li>
                                <a href="{{route('referencia.index') }}" class="btn btn-secondary ">REFERENCIA
                                </a>
                              </li>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="300ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-retweet"></i>
                            </div>
                            <div >
                              <li>
                                <a href="{{route('compra.index') }}" class="btn btn-secondary dropdown">COMPRA
                                </a>
                              </li>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->
                </div>
            </div><!--/.row-->    
        </div><!--/.container-->
    </section><!--/#services-->
</body>
</html>

