<?php


$reajuste = 30;
$totalSalario = 500;

switch($reajuste){
    case 50:
        $totalSalario = $totalSalario + ($totalSalario * 0.5);
        print $totalSalario;
        break;
    case 30:
        $totalSalario = $totalSalario + ($totalSalario * 0.3);
        print $totalSalario;
        break;
}



?>