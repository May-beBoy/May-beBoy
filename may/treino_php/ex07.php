<?php
print("Quantidade de Argumentos via CLI: ".$argc."\n");
for($i=0;$i<$argc;$i++) {
    print("Argumento no. ".($i+1).": ".$argv[$i]."\n");
}
?>