
<!doctype html>
<html lang="es">
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
    <link rel="icon" href="img/u.png">

    <title>Ubícate</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/floating-labels/">

    <!-- Bootstrap core CSS -->
    <link href="bootstrap-4.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/estilo_articulo.css">
  </head>

  <body>

 <nav class="navbar navbar-expand-sm navbar-dark bg-danger">
      <header id="cabecera">
       <a href="index.php"><img src="img/img_navbar.png"></a>
      </header>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample03">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="busqueda.php">Buscar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="saber.php">¿Qué hacemos?</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="inicio.php">Ingresar</a>
          </li>
	  <li class="nav-item">
            <a class="nav-link" href="unete.php">Registrarme</a>
          </li>
          <!--<li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
            <div class="dropdown-menu" aria-labelledby="dropdown03">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>-->
        </ul>
       </div>
    </nav><br>

    <form method="post" action="" class="form-signin">
    <center style="margin-left: 10%; margin-right: 10%; text-align: center;">
        <img src="img/usr.png" width="85" height="85"><br>
        <h3>Registro</h3>
    <div class="form-label-group">
      <input class="form-control" type="text" name="usuario" placeholder="Nombre" required><br>
    </div>
    <div class="form-label-group">
      <input class="form-control" type="email" name="email" required placeholder="Correo electrónico"><br>
    </div>
    <div class="form-label-group">
      <input type="password" class="form-control" name="pass" required placeholder="Contraseña"><br>
    </div>
    <div class="form-label-group">
      <input type="password" name="rpass" required class="form-control" placeholder="Repite Contraseña"><br>
    </div>
    <div class="form-label-group">
      <input type="text" name="numero" placeholder="Número telefonico" class="form-control" required><br>
    </div>
    <div class="form-label-group">
      <input type="text" class="form-control" name="nneg" required placeholder="Nombre del establecimiento"><br>
    </div>
    <div class="form-label-group">
      <input type="text" name="dir" class="form-control" placeholder="Dirección del establecimiento" required><br><br>
    </div>
      <input class="btn btn-lg btn-red btn-block" type="submit" name="submit" value="Registrarse"><br>
	</center>
</form>
  <?php
    if(isset($_POST['submit'])){
      require("registro.php");
    }
  ?> 

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script>window.jQuery || document.write('<script src="bootstrap-4.0.0/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="bootstrap-4.0.0/assets/js/vendor/popper.min.js"></script>
    <script src="bootstrap-4.0.0/dist/js/bootstrap.min.js"></script>

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
          <a href="https://www.facebook.com/Ubicate-853825504981956/"><img src="img/fb.png" width="20" height="25"></a> En Facebook como "Ubicate" <br>
          <a href="https://www.instagram.com/ubicate.space/"><img src="img/inst.png" width="20" height="20"></a> En instagram como  "@ubicate.space"
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
                <a href="visitante.php">¿Qué tan confiable es?</a>
              </li>
              <li>
                <a href="visitante.php">¿Cómo estár al día de todas las ofertas?</a>
              </li>
              <li>
                <a href="visitante.php">¿Cómo puedo vender?</a>
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
                <a href="anunciante.php">¿Cómo me inscribo?</a>
              </li>
              <li>
                <a href="anunciante.php">¿Cómo obtengo el mes gratis?</a>
              </li>
              <li>
                <a href="anunciante.php">¿Cuánto cuesta?</a>
              </li>
              <li>
                <a href="anunciante.php">¿Cómo pago?</a>
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

</html>
