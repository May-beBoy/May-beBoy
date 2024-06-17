<?php
$lista = array(10);
print("Quantidade de Elementos: ".count($lista)."\n");
for ($i=0;$i<10;$i++) {
    $lista[$i]=readline("Digite o valor no. ".($i+1).": ");
}
print("Quantidade de Elementos: ".count($lista)."\n");
for ($i=0;$i<count($lista);$i++) {
    print("Valor no. ".($i+1).": ".$lista[$i]."\n");
}
?>