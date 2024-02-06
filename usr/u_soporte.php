<!doctype html>

  <?php
  session_start();
  if (@!$_SESSION['u_id']) {
    header("Location: u_soporte.php");
  }
  ?>

<head>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-8098815019324219",
    enable_page_level_ads: true
  });
</script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-139858148-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-139858148-1');
</script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <meta name="author" content="Ubicate">
    <meta name="description" content="Pon tu negocio en línea, ubicate" />
<meta name="keywords" content="mosquera, cundinamarca, negocio, microempresa, publicidad, ubicate" />
    <link rel="icon" href="../img/u.png">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <title>Ubícate</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/floating-labels/">
    <!-- Bootstrap core CSS -->
    <link href="../bootstrap-4.0.0/dist/css/bootstrap.min.css" rel="stylesheet">

  </head>

  <body>
 <nav class="navbar navbar-expand-sm navbar-dark bg-danger">
      <header id="cabecera">
       <a href="u_inscribir.php"><img src="../img/img_navbar.png"></a>
      </header>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
  
      <div class="collapse navbar-collapse" id="navbarsExample03">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link"><strong><?php echo $_SESSION['u_nom'];?></strong></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="u_inscribir.php">Mi empresa</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="u_index.php">Buscar</a>
          </li>
            <li class="nav-item active">
              <a class="nav-link" href="u_soporte.php">Soporte</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="desconectar.php"> Cerrar Sesión </a>
            </li>
          </ul>
       </div>
    </nav>
  <div style="margin-right: 10%; margin-left: 10%;">
    <main role="main" class="jumbotron">
      <section>
        <h5 style=" text-align: center;">Todo lo que necesitas saber:</h5>
        <article>
          <p style=" text-align: center;">Si eres nuevo en Ubícate te encontrarás en tu primer mes gratuito, y te será de gran ayuda leer la siguiente información. <br>Puedes tomar el servicio <strong> gratuito por tiempo ilimitado</strong>, publicando un producto o servicio que puedes modificar o cambiar a conveniencia las veces que quieras.</p>

          <p><strong style=" text-align: left;">Servicios</strong><br>
Ubícate es una compañía publicitaria que brinda servicios a pequeños, medianos comerciantes y todo aquel represéntate de la venta de cualquier tipo de servicio o producto con establecimiento definido o no. La compañía brinda dos diferentes servicios publicitaros:</p>
<p style="text-align: right;"> <strong> &raquo Estándar: <br></strong> 
Que cuenta con un mes gratuito de prueba, que consta del registro en el área de ventas en la plataforma, permitiendo la publicación de productos o servicios en la misma con la información correspondiente y pertinente de dichos productos.</p> 
<p style="text-align: left;"> <strong> &raquo Especial: <br></strong> Donde se adquiere el completo servicio del servicio estándar mas 4 publicaciones mensuales en nuestras redes, donde el cliente elegirá red donde lo la publicaremos, la descripción, contenido y fecha de publicación de los 4 post.</p>
<p style="text-align: center;"> <strong> Costos de inversión: </strong><br>
El valor de la inversión con el plan estándar, dependiendo de la cantidad de productos que desee publicar es de: <br><br>
<strong>Plan 1.</strong> -> 5 productos * (100 pesos del valor diario * 30 días del mes) = 15.000 <br>
<strong>Plan 2.</strong> -> 10 productos * (90 pesos del valor diario * 30 días del mes) = 27.000 <br> 
<strong>Plan 3.</strong> -> 15 productos * (80 pesos del valor diario * 30 días del mes) = 36.000 <br>
<strong>Plan 4.</strong> -> 20 productos * (70 pesos del valor diario * 30 días del mes) = 42.000 <br>
<strong>Plan 5.</strong> -> 25 productos * (60 pesos del valor diario * 30 días del mes) = 45.000 <br>
<strong>Plan 6.</strong> -> 30 productos * (55 pesos del valor diario * 30 días del mes) = 49.900 <br>
<strong>Plan 7.</strong> -> 35 productos * (50 pesos del valor diario * 30 días del mes) = 52.500 <br>
<strong>Plan 8.</strong> -> 40 productos * (50 pesos del valor diario * 30 días del mes) = 60.000 <br>
<strong>Plan 9.</strong> -> 45 productos * (50 pesos del valor diario * 30 días del mes) = 67.500 <br>
<strong>Plan 10.</strong> -> 50 productos * (50 pesos del valor diario * 30 días del mes) = 75.000 <br><br>
En el plan especial se manejarán, los mismos valores de inversión, más un adicional de $5.000 por las 4 publicaciones, y $1000 más por cada publicación extra que desee en su plan.</p>
        
  				<p style="text-align: center;">Comuníquese con nosotros y responderemos cualquier inquietud o dificultad que tenga sobre el servicio de ubicate.space en caso que algo no haya quedado claro. Comuníquese vía correo electronico al <strong>servicioalcliente@ubicate.space,</strong> <br> al teléfono celular <strong>302 353 16 70</strong> o al teléfono fijo <strong> 893 90 68 </strong> el horario de ateción via teléfono es de lunes a viernes de 8 am a 5 pm - sábados 8am a 2pm. <br><br> En caso de comunicarse via correo electrónico demoraremos un máximo de 48 horas o dos días hábiles en responder.</p>
  				<p style="text-align: center;">Tambíen puede escribir y mantenerse informado desde nuestras redes sociales: <a href="https://www.instagram.com/ubicate.space/">Instagram</a> o <a href="https://www.facebook.com/Ubicate-853825504981956/">Facebook.</a></p><br>
  			</article>
		  </section>
    </main>
  </div>
  

  </body>
  <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script>window.jQuery || document.write('<script src="../bootstrap-4.0.0/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../bootstrap-4.0.0/assets/js/vendor/popper.min.js"></script>
    <script src="../bootstrap-4.0.0/dist/js/bootstrap.min.js"></script>
  </body>

<footer class="page-footer font-small blue pt-4">

    <!-- Footer Links -->
    <div class="container-fluid text-center text-md-left">
      <!-- Grid row -->
      <div class="row">
      <!-- Grid column -->
        <div class="col-md-6 mt-md-0 mt-3">
          <!-- Content -->
          <h5 class="text">Contáctenos:</h5>
          <p> Solicite información especifica, asesórese acerca de todos los servicios. <br> Correo electrónico: servicioalcliente@ubicate.space <br>
          Teléfono celular/WhatsApp: 302 353 1670 <br>
          <a href="https://www.facebook.com/Ubicate-853825504981956/"><img src="../img/fb.png" width="20" height="25"></a> En Facebook como "Ubicate" <br>
          <a href="https://www.instagram.com/ubicate.space/"><img src="../img/inst.png" width="20" height="20"></a> En instagram como  "@ubicate.space"
          </p>
        </div>
        <!-- Grid column -->
        <hr class="clearfix w-100 d-md-none pb-3">

        <!-- Grid column -->
        <div class="col-md-3 mb-md-0 mb-3">

            <!-- Links -->
            <h5 class="text">Visitante</h5>

            <ul class="list-unstyled">
              <li>
                <a href="u_visitante.php">¿Qué tan confiable es?</a>
              </li>
              <li>
                <a href="u_visitante.php">¿Cómo estár al día de todas las ofertas?</a>
              </li>
              <li>
                <a href="u_visitante.php">¿Cómo puedo vender?</a>
              </li>
            </ul>

          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 mb-md-0 mb-3">

            <!-- Links -->
            <h5 class="text">Anunciante</h5>

            <ul class="list-unstyled">
              <li>
                <a href="u_anunciante.php">¿Cómo me inscribo?</a>
              </li>
              <li>
                <a href="u_anunciante.php">¿Cómo obtengo el mes gratis?</a>
              </li>
              <li>
                <a href="u_anunciante.php">¿Cuánto cuesta?</a>
              </li>
              <li>
                <a href="u_anunciante.php">¿Cómo pago?</a>
              </li>
            </ul>

          </div>
          <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2018 Copyright:
      <a href="https://mdbootstrap.com/education/bootstrap/"> MDBootstrap.com</a>/Ubicate.space
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->
</html>
