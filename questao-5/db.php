<?php
    $connection = mysqli_connect('localhost', 'root', 'fiap', 'nac2');        
    if(!$connection){
        die("Não foi possível estabelecer conexão com o banco de dados.");
    }
?>