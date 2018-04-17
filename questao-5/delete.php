<?php 
    include 'db.php';
    global $connection;

    if(isset($_POST['deletar'])){
        $nome = $_POST['users'];

        $sql = "DELETE from cadastro WHERE nome = '$nome'";
        $result = mysqli_query($connection, $sql);
        
        if($result) {
            Header("Location: index.php?response=true");
        } else {
            Header("Location: index.php?response=false");
        }

    }
?>