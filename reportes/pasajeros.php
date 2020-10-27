<?php
require_once('../vendor/autoload.php');

$placa = $_GET['nro_placa'];
$socio = $_GET['socio'];
$fecha = $_GET['fecha'];
$hora = $_GET['hora'];
$codigo = $_GET['codigo'];
$nro_pasajeros = $_GET['nro_pasajeros'];
$ruta = $_GET['ruta'];
$pasajeros = $_GET['pasajeros'];
$html = '<body>
<header class="clearfix">
  <div id="logo">
    <img
      style="width: 250px; height: 150px;"
      src="../assets/img/sob/logo.png"
    />
  </div>
  <h1>'.$ruta.'</h1>
  <div id="project">
    <div><span>NRO PLACA:</span>'.$placa.'</div>
    <div><span>CHOFER:</span>'.$socio.'</div>
    <div><span>FECHA DE SALIDA:</span>'.$fecha.'</div>
    <div><span>HORA DE SALIDA:</span>'.$hora.'</div>
    <div><span>CODIGO DE VIAJE:</span>'.$codigo.'</div>
    <div><span>NRO PASAJEROS:</span>'.$nro_pasajeros.'</div>
  </div>
</header>
<main>
  <table>
    <thead>
      <tr>
        <th class="service">NOMBRE</th>
        <th class="desc" style="width:150px;">APELLIDO</th>
        <th>DOCUMENTO</th>
        <th>TIPO DOCUMENTO</th>
        <th>CODIGO PASAJE</th>
        <th>NRO ASIENTO</th>
      </tr>
    </thead>
    <tbody>
    '.$pasajeros.'
    </tbody>
  </table>
  <div id="notices">
    <div></div>
    <div class="notice">

    </div>
  </div>
</main>
<footer>
  
</footer>
</body>'; 

$css = file_get_contents('./plantillas/style.css');
$mpdf = new \Mpdf\Mpdf([

]);
$mpdf->writeHtml($css,\Mpdf\HTMLParserMode::HEADER_CSS);
$mpdf->writeHtml($html,\Mpdf\HTMLParserMode::HTML_BODY);

$mpdf->Output();

?>