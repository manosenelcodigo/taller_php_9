<?php
require_once("mpdf/mpdf.php");

$html='<h1>Hola #manosenelcódigo desde un PDF</h1>';
$html.='<table class="table table-bordered">';
$html.='
<thead>
    <tr>
    <th>Dato</th>
     <th>Valor</th>
     </tr>
</thead>
<tbody>
'

;

    for($i=0;$i<10;$i++)
{
    $html.='
        <tr>
            <td>el valor de i es=</td>
            <td>'.$i.'</td>
        </tr>';
}

$html.='</tbody></table>';
$html.='<hr />';
$html.='<div class="panel panel-info">
          <div class="panel-heading">Panel heading without title</div>
          <div class="panel-body">
            Panel content
          </div>
        </div>
        <hr />
        <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
        <hr />
        <img src="public/images/logo.png" class="thumbnail">
';


$mpdf=new mPDF('c');
$estilos=file_get_contents("https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css");

$mpdf->SetDisplayMode('fullpage');

$mpdf->WriteHTML($estilos,1);
$mpdf->WriteHTML($html);
$mpdf->Output();
exit;

