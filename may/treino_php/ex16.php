<?php
$lista = array(10);
// pedindo os dados
for ($i=0;$i<10;$i++) {
    $lista[$i] = array(2);
    $lista[$i][0] = readline(($i+1).": Nome....: ");
    $lista[$i][1] = readline(($i+1).": Telefone: ");
}
// mostrando os dados
print("\nLista\n");
for ($i=0;$i<10;$i++) {
    print(($i+1).": Nome: ".$lista[$i][0]." - Telefone: ".$lista[$i][1]."\n");    
}