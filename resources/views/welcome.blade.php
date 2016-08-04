@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-lg-12 col-xs-12">
      <div id="carousel-example-generic" class="slider carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img src="http://s3-sa-east-1.amazonaws.com/store-templates/templates/059/863/twig/static/images/slider/megasports_running_nike.jpg" width="100%" height="auto" >
            <div class="carousel-caption">
              <h3 class="caption-title">RUNNING</h3>
              <p >
                Encontra los mejores modelos para correr
              </p>
            </div>
          </div>
          <div class="item">
            <img src="http://s3-sa-east-1.amazonaws.com/store-templates/templates/059/863/twig/static/images/slider/megasports_slide_socks.jpg" width="100%" height="auto" >
            <div class="carousel-caption">
              <h3 class="caption-title">ULTIMOS DIAS</h3>
              <p >
                Con la compra de cualquier producto llevate un set de medias deportivas
              </p>
            </div>
          </div>
          <div class="item">
            <img src="http://s3-sa-east-1.amazonaws.com/store-templates/templates/059/863/twig/static/images/slider/2016_05_28_megasports_slide_sorteo_camiseta.jpg" width="100%" height="auto" >
            <div class="carousel-caption">
              <h3 class="caption-title">CALZATE TUS COLORES</h3>
              <p >
                Participa en el sorteo de la nueva camiseta de la seleccion
              </p>
            </div>
          </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </div>
  <div class="clearout"></div>
  <div class="clearout"></div>
    <div class="row">
        <div class="col-md-12 ">

                <div class="bannerMarcas">
            			<a href="adidas"><img src="http://s3-sa-east-1.amazonaws.com/store-templates/templates/059/863/twig/static/images/marcas/icon_logo_adidas.png?1299830068" /></a>
            			<a href="nike"><img src="http://s3-sa-east-1.amazonaws.com/store-templates/templates/059/863/twig/static/images/marcas/icon_logo_nike.png?1299830068"  /></a>
            			<a href="reebok"><img src="http://s3-sa-east-1.amazonaws.com/store-templates/templates/059/863/twig/static/images/marcas/icon_logo_reebok.png?1299830068" /></a>
            			<a href="disney"><img src="http://s3-sa-east-1.amazonaws.com/store-templates/templates/059/863/twig/static/images/marcas/icon_logo_disney.png?1299830068" /></a>
            			<a href="lacoste"><img src="http://s3-sa-east-1.amazonaws.com/store-templates/templates/059/863/twig/static/images/marcas/icon_logo_lacoste.png?1299830068"  /></a>
            			<a href="topper"><img src="http://s3-sa-east-1.amazonaws.com/store-templates/templates/059/863/twig/static/images/marcas/icon_logo_topper.png?1299830068" /></a>
            			<a href="fila"><img src="http://s3-sa-east-1.amazonaws.com/store-templates/templates/059/863/twig/static/images/marcas/icon_logo_fila.png?1299830068"  /></a>
            			<a href="lecop"><img src="http://s3-sa-east-1.amazonaws.com/store-templates/templates/059/863/twig/static/images/marcas/icon_logo_lecoq.png?1299830068"  /></a>
            			<a href="la"><img src="http://s3-sa-east-1.amazonaws.com/store-templates/templates/059/863/twig/static/images/marcas/icon_logo_lagear.png?1299830068" /></a></li>
            			<a href="olimpycus"><img src="http://s3-sa-east-1.amazonaws.com/store-templates/templates/059/863/twig/static/images/marcas/icon_logo_olympikus.png?1299830068" /></a>
            			<a href="penalty"><img src="http://s3-sa-east-1.amazonaws.com/store-templates/templates/059/863/twig/static/images/marcas/icon_logo_penalty.png?1299830068" /></a>
            			<a href="kappa"><img src="http://s3-sa-east-1.amazonaws.com/store-templates/templates/059/863/twig/static/images/marcas/icon_logo_kappa.png?1299830068" /></a></li>
            			<a href="everlast"><img src="http://s3-sa-east-1.amazonaws.com/store-templates/templates/059/863/twig/static/images/marcas/icon_logo_everlast.png?1299830068" /></a>
            		</div>
                <div class="clearout"></div>
                <div class="clearout"></div>
                <div class="row">
                  <div class="col-xs-12 col-lg-12">
                    <div class="planesTarjetas">
              			<a href=""><img src="http://www.falabella.com.ar/static/site/catalog/HuinchaHome/ahora_12.jpg" width="100%" height="auto"/></a>
              		</div>
                  </div>

                    <div id="destacados" class="col-xs-12 col-md-12 col-lg-12 text-center">
                      <div class="clearout"></div>
                      <h1>DESTACADOS</h1>
                      <div class="clearout"></div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                      <div class="hovereffect">
                          <img class="img-responsive" src="http://stylesweekly.com/wp-content/uploads/2016/01/makeup.jpg" width="100%">
                              <div class="overlay">
                                  <p class="">
                                      <a href="{{ url('/vistaProducto') }}">xxxxx</a>
                                        <p>
                                          xxxxxx
                                        </p>
                                  </p>
                              </div>
                      </div>
                  </div>

                  <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="hovereffect">
                        <img class="img-responsive" src="http://stylesweekly.com/wp-content/uploads/2016/01/makeup.jpg" width="100%">
                            <div class="overlay">
                                <p class="">
                                    <a href="{{ url('/vistaProducto') }}">xxxxx</a>
                                      <p>
                                        xxxxxx
                                      </p>
                                </p>
                            </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                  <div class="hovereffect">
                      <img class="img-responsive" src="http://stylesweekly.com/wp-content/uploads/2016/01/makeup.jpg" width="100%">
                          <div class="overlay">
                              <p class="">
                                  <a href="{{ url('/vistaProducto') }}">xxxxx</a>
                                    <p>
                                      xxxxxx
                                    </p>
                              </p>
                          </div>
                  </div>
              </div>

                </div>


        </div>
    </div>
    <div class="row">

    </div>
</div>
@endsection
