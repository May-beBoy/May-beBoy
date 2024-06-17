<?php
$lista = array(10);
$lista[0] = array(2);
// pedindo os dados
$lista[0][0] = readline("01: Nome....: ");
$lista[0][1] = readline("01: Telefone: ");
// mostrando os dados
print("\nLista\n");
print("01: Nome: ".$lista[0][0]." - Telefone: ".$lista[0][1]."\n");
?>