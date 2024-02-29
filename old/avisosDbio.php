<!DOCTYPE html>
<html lang="en">

<head>
  <?php include ('./dotk/00head/analitycs.html'); ?>
  <?php include ('./dotk/00head/cabecera.html'); ?>
  <?php include ('./dotk/00head/estilos.html'); ?>
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
      <b><p align="center" style="font-family:Arial, Helvetica, sans-serif; color:#084866; font-size:36px">Avisos - Doctorado en Ciencias en Biotecnología</p></b>
      <div class="table-responsive-sm col-md-10">
     <table class="table table-striped table-sm">
  <thead>
    <tr class="bg-info">
      <th   scope="col">&nbsp;</th>
      <th   scope="col">Aviso</th>
      <th scope="col">Fecha de publicación</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">-</th>
      <td> <a href="./docs/convocatoria2020/DCB_2020.png" target="_blank">Convocatoria 2020 </a></td>
      <td>Abril 2020</td>
    </tr>

    <tr>
      <th scope="row">-</th>
      <td><a href="./docs/CONVOCATORIA_INSCRIPCIONES201_POSGRADO_DIC2019.pdf" target="_blank">Convocatoria de inscripciones</a></td>
      <td>Diciembre 2019</td>
    </tr>
    <tr>
      <th scope="row">-</th>
      <td><a href="./docs/Aspirantes_aceptados_PE_DCB_sept_dic_2019.pdf" target="_blank">Aspirantes aceptados </a></td>
      <td>Diciembre 2019</td>
    </tr>
    <tr>
      <th scope="row">-</th>
      <td> <a href="./docs/convocatoria2019/convocatoria_D_BIOTEC.png" target="_blank">Convocatoria </a></td>
      <td>2019</td>
    </tr>
    <tr>
      <th scope="row">-</th>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </tbody>
</table>
</div>
      <br>
            
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
