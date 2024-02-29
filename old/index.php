<!DOCTYPE html>
<html lang="es">

<head>
  <?php include ('./dotk/00head/analitycs.html'); ?>
  <?php include ('./dotk/00head/cabecera.html'); ?>
  <?php include ('./dotk/00head/estilos.html'); ?>

  <link href="./imu/prettyPhoto.css" rel="stylesheet">
  <!-- iconos -->
  <link href="./imu/animate.css" rel="stylesheet">
  <link href="./imu/main.css" rel="stylesheet">
  <link href="./imu/responsive.css" rel="stylesheet">


</head>

<body>

  <a id="arriba"></a>
  <header>

    <!-- Logos e imagen de hidalgo -->
    <?php include ('../lib18/seph/hf/header.html'); ?>

    <nav>
      <!-- Menu principal superior -->
      <?php //include ('../lib18/coreFRONTx/01header/nav/menu-superior/menu.html'); ?>
    </nav>

    <!-- Slider principal -->
    <?php include ('./dotk/01header/01carousel-principal/carousel.html'); ?>

  </header>

  <?php include ('./dotk/01header/02begajoso/menu-pegajoso.html'); ?>

  <main>


      <br />


      <?php include ('./dotk/05main/contenido.html'); ?>

    <div class="container marketing">

      <br />
      <br />
      <a id="mapadesitio"></a>
      <hr class="featurette-divider">
      <!-- Menu con todos los sitios y mini sitios de la página -->
      <?php include ('../lib18/coreFRONTx/main/tmenu-footer/menufooter.php'); ?>

    </div>

  </main>

  <footer>
    <!-- footer de gobierno del estado -->
    <?php include ('../lib18/seph/hf/footer.html'); ?>
  </footer>

  <?php include ('../lib18/coreFRONTx/09js/java.html'); ?>

  <!-- Script para dar la animacion al boton flotante que lleva arriba -->
  <a href="#" class="back-to-top">Volver arriba</a>
  <script src="../lib18/coreFRONTx/10boton-arriba/script.js"></script>

</body>

</html>
