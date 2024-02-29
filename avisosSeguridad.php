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
      <b><p align="center" style="font-family:Arial, Helvetica, sans-serif; color:#084866; font-size:36px">Avisos - Especialidad en Seguridad Informática</p></b>
      <div class="table-responsive-sm col-md-10">

 <table class="table table-striped table-sm">
  <thead>
    <tr class="bg-secondary">
      <th   scope="col">&nbsp;</th>
      <th   scope="col">Aviso</th>
      <th scope="col">Fecha de publicación</th>
    </tr>
  </thead>
  <tbody>
<!--
<tr>
      <th scope="row">-</th>
      <td> <a href="./docs/convocatorias2024/CONV posgrado 2024 ESPECIALIDADES_SEGURIDAD.pdf" target="_blank">Convocatoria 2024 </a></td>
      <td>Febrero 2024</td>
 </tr>
-->
<tr>
      <th scope="row">-</th>
      <td> <a href="./docs/convocatorias2023/CONV ESI 2023.pdf" target="_blank">Convocatoria 2023 </a></td>
      <td>Febrero 2023</td>
    </tr>
 <tr>
      <th scope="row">-</th>
      <td><a href="./docs/Convocatoria Inscripcion Posgrado 223 040822.pdf" target="_blank">Inscripciones posgrado periodo septiembre-diciembre 2022 </a></b>
</td>
      <td>Agosto/2022</td>
    </tr>

<tr>
      <th scope="row">-</th>
      <td> <a href="./docs/convocatoria2022/CONV ESI2022.pdf" target="_blank">Convocatoria 2022 </a></td>
      <td>Marzo 2022</td>
    </tr>

 <tr>
      <th scope="row">-</th>
      <td><a href="./docs/Convocatoria Inscripcion Posgrado 221 091221.pdf" target="_blank">Inscripciones posgrado periodo enero-abril 2021</a></b>
</td>
      <td>diciembre 2021</td>
    </tr>
 <tr>
      <th scope="row">-</th>
      <td><b>Examen psicom&eacute;trico:</b> a partir de las 08:00hrs del 07 de julio hasta las 23:00hrs. del 08 de julio 2021. Liga:<a href="http://psicometricos.upp.edu.mx" target="_blank">http://psicometricos.upp.edu.mx</a> /</td>
      <td>Julio 2021</td>
 </tr>
 <tr>
      <th scope="row">-</th>
      <td> <a href="./docs/convocatoria2021/ESI_2021.png" target="_blank"" target="_blank">Convocatoria 2021 </a></td>
      <td>Marzo 2021</td>
    </tr>
 <tr>
      <th scope="row">-</th>
      <td><a href="./docs/CONVOCATORIA_INSCRIPCIONES_203_POSGRADO_03082020.pdf" target="_blank">Inscripciones posgrado periodo septiembre-diciembre 2020 </a></b>
</td>
      <td>04/Agosto/2020</td>
    </tr>
 <tr>
      <th scope="row">-</th>
      <td><b>Examen psicom&eacute;trico:</b> a partir de las 08:00hrs. del 06 de julio hasta las 23:00hrs. del 07 de julio 2020. Liga: http://psicometricos.upp.edu.mx/</td>
      <td>Julio 2020</td>
    </tr>

   <tr>
      <th scope="row">-</th>
      <td> <a href="./docs/convocatoria2020/ESI_2020.png" target="_blank">Convocatoria 2020 </a></td>
      <td>Abril 2020</td>
    </tr>
    <tr>
      <th scope="row">-</th>
      <td> <a href="./docs/convocatoria2019/convocatoria_E_SEGINF.png" target="_blank">Convocatoria </a></td>
      <td>2019</td>
    <tr>
      <th scope="row">-</th>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
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
