<!DOCTYPE html>
<html lang="en">

<head>
  <?php include ('./dotk/00head/analitycs.html'); ?>
  <?php include ('./dotk/00head/cabecera.html'); ?>
  <?php include ('./dotk/00head/estilos.html'); ?>
<style type="text/css">
  p { text-align:justify; }
  
  .titulo{font-family:Arial, Helvetica, sans-serif; 
         color:#663300; 
		 font-size:20px;
		 text-align:left;
		 font-weight:bold;}

  .card1{
	  width:200px;
	  margin-right:20px;}
  </style>
</head>
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
  <?php 
  echo '<link href="./imu/main.css" type="text/css" rel="stylesheet">';
  ?>
  </header>

    <?php include ('./dotk/01header/02begajoso/menu-pegajoso.html'); ?>


  <main>
    <div class="container marketing">

      <br />

      <b><p align="center" style="font-family:Arial, Helvetica, sans-serif; font-size:36px">Avisos</p></b>
<ul>
  <li><a href="http://www.upp.edu.mx/posgrado/avisosDbio.php">Doctorado en Ciencias en Biotecnología</a></li>
  <li><a href="http://www.upp.edu.mx/posgrado/avisosDCiencias.php">Doctorado en Ciencias y Tecnologías Avanzadas </a></li>
  <li> <a href="http://www.upp.edu.mx/posgrado/avisosMbio.php"> Maestría en Biotecnología    </a></li>
  <li><a href="http://www.upp.edu.mx/posgrado/avisosMmeca.php" >Maestría en Mecatrónica</a></li>
  <li><a href="http://www.upp.edu.mx/posgrado/avisosMTIC.php" > Maestría en TIC</a></li>
  <li><a href="http://www.upp.edu.mx/posgrado/avisosMmaec.php" >Maestría en Enseñanza de las Ciencias</a></li>
  <li><a href="http://www.upp.edu.mx/posgrado/avisosMfinanzas.php" >Maestría en Finanzas y Gestión </a></li>
  <li><a href="http://www.upp.edu.mx/posgrado/avisosSeguridad.php" > Especialidad en Seguridad Informatica</a></li>
<li><a href="http://www.upp.edu.mx/posgrado/avisosEspBio.php" > Especialidad en Biotecnología Ambiental</a></li>
  <li><a href="http://www.upp.edu.mx/posgrado/avisosEspMeca.php" > Especialidad  en Mecatrónica</a></li>

</ul>
      
  </div> 
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
