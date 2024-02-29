<?php $titulo = "Avisos" ?>

<!DOCTYPE html>
<html lang="es">

<head>
  <?php
    include ('./dotk/00head/analitycs.html');
    include ('../lib20/core/10cabecera.html');
    include ('../lib20/core/20estilos.html');
    include ('../lib20/hgo/zoram_style_header.html');
  ?>
<style type="text/css">
  p { text-align:justify; }
  
  .titulo{font-family:Arial, Helvetica, sans-serif; 
         color:#084866; 
		 font-size:20px;
		 text-align:left;
		 font-weight:bold;}

  .card1{
	  width:200px;
	  margin-right:20px;}
  </style>
</head>

<body>
  <a id="arriba"></a>
  <header>
    <!-- Logos e imagen de hidalgo -->
    <?php
    //include ('../lib18/seph/hf/header.html');
  	//include ('../lib20/hgo/header.html');
  	?>
    <?php include ('../lib20/hgo/veda_navbar.html'); ?>
    <!-- Slider principal -->
    
  </header>

  <?php include ('./dotk/01header/02begajoso/menu-pegajoso.html'); ?>

  <main>
  
<!--inicio contenido-->

<div class="container marketing">

      <br />

      <b><p align="center" style="font-family:Arial, Helvetica, sans-serif; font-size:36px">Avisos</p></b>
<ul>
  <li><a href="./avisosDbio.php">Doctorado en Ciencias en Biotecnología</a></li>
  <li><a href="./avisosDCiencias.php">Doctorado en Ciencias y Tecnologías Avanzadas </a></li>
  <li><a href="./avisosMbio.php"> Maestría en Biotecnología    </a></li>
  <li><a href="./avisosMmeca.php" >Maestría en Mecatrónica</a></li>
  <li><a href="./avisosMTIC.php" > Maestría en TIC</a></li>
  <li><a href="./avisosMmaec.php" >Maestría en Enseñanza de las Ciencias</a></li>
  <li><a href="./avisosMfinanzas.php" >Maestría en Finanzas y Gestión </a></li>
  <li><a href="./avisosSeguridad.php" > Especialidad en Seguridad Informatica</a></li>
  <li><a href="./avisosEspBio.php" > Especialidad en Biotecnología Ambiental</a></li>
  <li><a href="./avisosEspMeca.php" > Especialidad  en Mecatrónica</a></li>
</ul>
      
  </div> 

<!--fin contenido-->



    <div class="container marketing">
      <a id="mapadesitio"></a>
      <br />
      <hr class="featurette-divider">
      <!-- Menu con todos los sitios y mini sitios de la página -->
      <?php include ('../lib20/core/60menufooter.php'); ?>
    </div>
  </main>

  <footer>
    <!-- footer de gobierno del estado -->
    <?php //include ('../lib20/seph/hf/footer.html'); ?>
    <?php //include ('../lib20/hgo/footer.html'); ?>
    <?php include ('../lib20/hgo/veda_footer.html'); ?>
  </footer>

  <?php
    include ('../lib20/core/80js.html');
    //include ('../lib20/hgo/zoram_js_footer.html');
  ?>

  <!-- Script para dar la animacion al boton flotante que lleva arriba
  <a href="#" class="back-to-top">Volver arriba</a>
  <script src="../lib20/core/31script.js"></script>-->


</body>

</html>
