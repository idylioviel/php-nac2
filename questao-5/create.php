<?php 
    include 'db.php';
    global $connection;

    if(isset($_POST['criar'])) {
        $nome = $_POST['nome'];
        $rg = $_POST['rg'];
        $telefone = $_POST['telefone'];
        $email = $_POST['email'];

        $sql = "INSERT INTO cadastro(nome, rg, telefone, email) VALUES('$nome', '$rg', '$telefone', '$email')";
        
        $result = mysqli_query($connection, $sql);
        
        if($result) {
            Header("Location: index.php?response=true");
        } else {
            Header("Location: index.php?response=false");
        }
    }
?>