<?php

/**
 * Comum = 1
 * Funcionario = 2
 * Vip = 3
 */

// Valor compra & valor tipo de cliente 
$tipoCliente = 3;
$totalDaCompra = 50;

switch($tipoCliente){
    case 1:
        print $totalDaCompra;
        break;
    case 2:
        $ValorTotalFuncionario = $totalDaCompra - ($totalDaCompra * 0.10);
        print $ValorTotalFuncionario;
        break;
    case 3:
        $valorTotalVip = $totalDaCompra - ($totalDaCompra * 0.05);
        print $valorTotalVip;
        break;
}


?>