<?php
require_once("mpdf/mpdf.php");

$html='';

$html.='<table border=1>';

for($i=0;$i<10;$i++)
{
    $html.='
        <tr>
            <td>el valor de i es=</td>
            <td>'.$i.'</td>
        </tr>';
}

$html.='</table>';

$mpdf=new mPDF('c');

$mpdf->WriteHTML($html);
$mpdf->Output();
exit;
