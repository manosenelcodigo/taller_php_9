<?php
require_once("mpdf/mpdf.php");

$html='<h1>Hola #manosenelcódigo desde un PDF</h1>';

$mpdf=new mPDF('c');
$mpdf->WriteHTML($html);
$mpdf->Output();
exit;
