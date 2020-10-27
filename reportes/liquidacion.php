<?php
require_once('../vendor/autoload.php');

$ruta = $_GET['ruta'];
$placa = $_GET['placa'];
$socio = $_GET['socio'];
$fecha = $_GET['fecha'];
$total1 = $_GET['total1'];
$total2 = $_GET['total2'];
$pro_adm = $_GET['pro_adm'];
$prevision = $_GET['prevision'];
$iva = $_GET['iva'];
$seguro = $_GET['seguro'];
$ganancias = $_GET['ganancias'];
$html = '<body>
<header class="clearfix">
  <div id="logo">
    <img
      style="width: 250px; height: 150px;"
      src="../assets/img/sob/logo.png"
    />
  </div>
  <h1>LIQUIDACIÓN DE SERVICIO</h1>
  <div id="project">
    <div><span>BUS:</span>'.$placa.'</div>
    <div><span>SOCIO:</span>'.$socio.'</div>
    <div><span>Servicio a:</span>'.$ruta.'</div>
  </div>
</header>
<main>
  <table>
    <thead>
      <tr>
        <th class="service">CODIGO VIAJE</th>
        <th>FECHA DE SALIDA</th>
        <th>PRECIO PASAJE</th>
        <th>ASIENTOS VENDIDOS</th>
      </tr>
    </thead>
    <tbody>
    '.$ganancias.'
    </tbody>
  </table>
  <div id="notices">
    <h3>TOTAL : '.$total1.' Bs</h3>
    <div id="project">
        <div><span>PRO-ADM:</span>'.$pro_adm.' Bs</div>
        <div><span>PREVISION:</span>'.$prevision.' Bs</div>
        <div><span>IVA:</span>'.$iva.' Bs</div>
        <div><span>SEGURO AUTOMOTOR:</span>'.$seguro.'  Bs</div>
     </div>
    <h3>LIQUIDO PAGABLE : '.$total2.' Bs</h3>
  </div>
</main>
</body>'; 

$css = file_get_contents('./plantillas/style.css');
$mpdf = new \Mpdf\Mpdf([

]);
$mpdf->writeHtml($css,\Mpdf\HTMLParserMode::HEADER_CSS);
$mpdf->writeHtml($html,\Mpdf\HTMLParserMode::HTML_BODY);

$mpdf->Output();

?>