<?php
function calcula_por_dez($valor) {
    $total = $valor * 10;
    return $total;
}
$valor = readline("Digite um valor: ");
$total = calcula_por_dez($valor);
print("Valor total eh: ".$total);
?>