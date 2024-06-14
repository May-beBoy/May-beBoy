<?php
session_start();
if(isset($_SESSION["logado"])){
    print("Aguarde....");
    header("Refresh: 1; url=menu.php",true,302);
} else{
    print("")
}

?>