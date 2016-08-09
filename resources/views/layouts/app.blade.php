<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>E-Commerce</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <link href="../css/bootstrap.min.css" rel="stylesheet">


    <link rel="stylesheet" href="../css/index.css" media="screen" title="no title" charset="utf-8">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>



    <link rel="stylesheet" href="../css/index.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="../css/reset.min.css" media="screen" title="no title" charset="utf-8">
    <link href='https://fonts.googleapis.com/css?family=Economica:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oxygen|PT+Sans+Narrow' rel='stylesheet' type='text/css'>


    <link rel="stylesheet" href="../font-awesome-4.6.3/css/font-awesome.min.css">

      </head>

<body id="app-layout">
<<<<<<< HEAD

  <div class="supNav">
      <div class="">

          <div class="">

              <ul class="rightNav">
                @if (Auth::guest())
                  <li class="menuSup"><a href="{{ url('/preguntasFrecuentes') }}">FAQ</a></li>
                  <li class="lineaVertical"></li>
                  <li class="menuSup"><a href="{{ url('/register') }}">REGISTRARSE</a></li>
                  <li class="lineaVertical"></li>
                  <li class="menuSup"><a href="{{ url('/login') }}">INICIAR SESIÓN</a></li>
                  <li class="divider-vertical"></li>
                  <li class="menuSup"><div class="comprar">
                    <button type="submit" class="misCompras btn btn-default">COMPRAR</button>
                  </div>
                  </li>
                  @else


                  <li class="nav-item dropdown userDrop">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
                    <div class="dropdown-menu">
                      <ul>
                        <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                        <li>  <a href="{{ url('/editarUsuario') }}"><i class="fa fa-btn fa-sign-out"></i>Editar Usuario</a></li>
                        <li><a href="{{ url('/buscarPersonas') }}">Buscar Vendedores</a></li>
                        <li><a href="{{ url('/cargarProducto') }}">Cargar Producto</a></li>
                      </ul>
                    </div>
                  </li>

                  @endif
              </ul>
          </div>

  </div>
  </div>
  <nav class="infNavBar  navbar navbar-inverse">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="logo navbar-brand" href="{{ url('/') }}"><img src="../img/logo.png"></a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="infNav nav navbar-nav">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">HOMBRE <span class=""></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">ZAPATILLAS</a></li>
              <li><a href="#">BOTINES</a></li>
              <li><a href="#">INDUMENTARIA</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">CAMISETAS DE FUTBOL</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">MUJERES <span class=""></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">ZAPATILLAS</a></li>
              <li><a href="#">BOTINES</a></li>
              <li><a href="#">INDUMENTARIA</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">NIÑOS <span class=""></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">ZAPATILLAS</a></li>
              <li><a href="#">BOTINES</a></li>
              <li><a href="#">INDUMENTARIA</a></li>
            </ul>
          </li>
          <li class=""><a href="#">ACCESORIOS <span class="sr-only">(current)</span></a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">MARCAS <span class=""></span></a>
          <ul class="dropdown-menu">
            <li><a href="nike.php">NIKE</a></li>
            <li><a href="adidas.php">ADIDAS</a></li>
            <li><a href="rebook.php">REBOOK</a></li>
            <li><a href="fila.php">FILA</a></li>
            <li><a href="lecopSportif.php">LECOP SPORTIF</a></li>
            <li><a href="olympicus.php">OLYMPIKUS</a></li>
            <li><a href="topper.php">TOPPER</a></li>
            <li><a href="lacoste.php">LACOSTE</a></li>
            <li><a href="penalty.php">PENALTY</a></li>
            <li><a href="everlast.php">EVERLAST</a></li>
            <li><a href="disney.php">DISNEY</a></li>
            <li><a href="kappa.php">KAPPA</a></li>
          </ul>
          </li>
        </ul>
        <form class="navbar-form navbar-right">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Ingrese su busqueda">
          </div>
          <button type="submit" class="btn btn-default">BUSCAR</button>
        </form>

      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
  <div class="clearout"></div>
  <div class="clearout"></div>

  @yield('content')

  @yield('people')

  @yield('products')

  <!-- JavaScripts -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
<div class="clearout"></div>
<div class="clearout"></div>
<div class="container-fluid navbar-inverse">
  <div class="container footer ">
    <div class="col-lg-2 col-xs-4 ">
    <ul class="footerCol">
      <li>INSTITUCIONAL</li>
      <li><a href="#">EMPRESA</a></li>
      <li><a href="#">GIFT CHECK</a></li>
      <li><a href="#">CREDITOS PERSONALES</a></li>
      <li><a href="faq.php">AYUDA</a></li>
      <li><a href="#">CONTACTO</a></li>
    </ul>
    </div>
    <div class="col-lg-2 col-xs-4">
    <ul class="footerCol">
      <li>MEDIOS DE PAGO</li>
      <li>CUOTAS SIN INTERES CON MERCADOPAGO</li>
      <li><a href="#"><img src="" alt="" /></a></li>
      <li><a href="#"><img src="" alt="" /></li>
      <li><a href="#"><img src="" alt="" /></a></li>
      <li><a href="#"><img src="" alt="" /></a></li>
      <li><a href="ofertas.php">>>VER PROMOCIONES VIGENTES</a></li>
    </ul>
    </div>
    <div class="col-lg-2 col-xs-4">
    <ul class="footerCol">
      <li>ENVIO GRATIS</li>
      <li>A TODO EL PAIS</li>
      <li><img src="" alt="" /></li>
      <li><a href="#"></li>
      <li><a href="#"><img src="" alt="" /></a></li>
      <li><a href="#"><img src="" alt="" /></a></li>
      <li><a href="#">>>METODOS DE ENVIO</a></li>
    </ul>
    </div>
    <div class="col-lg-2 col-xs-4">
    <ul class="footerCol">
      <li><strong>CONTACTO</strong></li>
      <li><img src="" alt="" />XX - XXXX - XXXX </li>
      <li><img src="" alt="" /><a href="#">VENTAWEB@INFIPORT.COM.AR</a></li>
    </ul>
    </div>
  </div>
</div>
<div class="container-fluid">

</div>



  <!-- JavaScripts -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
=======
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    E-Commerce
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/home') }}">Home</a></li>
                    <li><a href="{{ url('/comprar') }}">Comprar</a></li>
                    <li><a href="{{ url('/vender') }}">Vender</a></li>
                    <li><a href="{{ url('/buscarPersonas') }}">Buscar personas</a></li>
                    <li><a href="{{ url('/preguntasFrecuentes') }}"><span class= "glyphicon glyphicon-question-sign"></span></a></li>

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                  <li><a href="{{ route('product.agregarCarro') }}"><i class="fa fa-shopping-cart" aria-hidden="true"></i>
                    Carrito
                    <span class="badge">{{ Session::has('cart') ? Session::get('cart')->totalQty : '' }}</span>
                  </a>
                  </li>

                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                                <li><a href="{{ url('/editarUsuario') }}"><i class="fa fa-btn fa-sign-out"></i>Editar Usuario</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    @yield('people')

    @yield('products')

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
>>>>>>> carrito
</body>
</html>
