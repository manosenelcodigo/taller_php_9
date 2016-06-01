<?php
require_once("mpdf/mpdf.php");

$html='
<h1>Hola #manosenelcódigo desde un PDF</h1>
<img src="public/images/logo.png" width="100" height="100" />
';

$mpdf=new mPDF('c');
$mpdf->WriteHTML($html);
$mpdf->Output();
exit;
