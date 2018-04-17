<?php 
    include 'db.php';
    global $connection;
    
    $sql = "SELECT nome FROM cadastro";
    $resultado = mysqli_query($connection, $sql);
    
    $users = array();
    while($row = mysqli_fetch_row($resultado)){
        array_push($users, $row[0]);
    }

?>