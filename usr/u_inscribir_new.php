<!doctype html>

  <?php
  session_start();
  if (@!$_SESSION['u_id']) {
    header("Location: u_inscribir_new.php");
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
            <li class="nav-item">
              <a class="nav-link" href="u_soporte.php">Soporte</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="desconectar.php"> Cerrar Sesión </a>
            </li>
          </ul>
       </div>
    </nav>

<form action="guardar.php" method="POST" enctype="multipart/form-data" class="form-signin" style="margin-left: 10%; margin-right: 10%; text-align: center;">
      <div class="text-center mb-4"><br>
        <img src="../img/usr.png" width="85" height="85"><br>
      </div>
      <div class="form-label-group">
        <input type="text" name="nombre" id="inputEmail" class="form-control" placeholder="Nombre del nuevo producto.*" required><br>
      </div>
      <div class="form-label-group">
        <input type="text" name="precio" id="inputEmail" class="form-control" required placeholder="Costo del producto.*"><br>      
      </div>
      <div class="form-label-group">
        <input type="text" name="tel" id="inputEmail" class="form-control" required placeholder="Telefono(s) de contacto.*"><br>      
      </div>
      <div class="form-label-group">
        <input type="text" name="dir" id="inputEmail" class="form-control" required placeholder="Dirección del establecimiento.*"><br>
      </div>
       <div class="form-label-group">
        <input type="text" name="des" id="inputEmail" class="form-control" required placeholder="Breve descripción del producto.*"><br>
      </div>
      <div class="form-label-group">
        <input type="text" name="hor" id="inputEmail" class="form-control" required placeholder="Horario en que se puede comprar(establecimiento).*"><br>
      </div>
      <div class="form-label-group">
       <h5>Imagen del producto/servicio:</h5> <input type="file" class="form-control" id="archivo" name="archivo" accept="image/*">
      </div>
      <h5>Confirmación de seguridad</h5>
      <div class="form-label-group">
        <input type="email" name="email" id="inputEmail" class="form-control" required placeholder="email@mail.com...*"><br>
      </div>
      <div class="form-label-group">
        <input type="password" name="pass" id="inputEmail" class="form-control" required placeholder="********"><br>
      </div>

      <div style="margin-left: 20%; margin-right: 20%; text-align: center;">
       <button class="btn btn-lg btn-red btn-block" type="submit" ">Registrar</button>
      </div>
    </form>

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
