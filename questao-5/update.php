<?php
    global $connection;
    if(isset($_POST['atualizar'])){
        $target = $_POST['user'];
        $nome = isset($_POST['nome']) ? $_POST['nome'] : null; 
        $rg = isset($_POST['rg']) ? $_POST['rg'] : null; 
        $telefone = isset($_POST['telefone']) ? $_POST['telefone'] : null;   
        $email = isset($_POST['email']) ? $_POST['email'] : null; 
        
        $sql = "UPDATE cadastro SET nome= '$nome', rg='$rg', telefone='$telefone' WHERE id = $id";

        $result = mysqli_query($connection, $sql);         
        
        if($result) {
            Header("Location: index.php?response=true");
        } else {
            Header("Location: index.php?response=false");
        }    
    } 
?>