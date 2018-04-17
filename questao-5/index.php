<?php
    include 'read.php';

    if(isset($_GET['response'])) {
        $msg = $_GET['response'] == 'true' ? 'Sucesso!' : 'Tente mais tarde :(';
        echo '<script>alert("'.$msg.'")</script>';
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD - NAC 2</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    
</head>
<body>
    <ul>
        <li data-val="create" class="active"><a href="#">Criar</a></li>
        <li data-val="update"><a href="#">Atualizar</a></li>
        <li data-val="read"><a href="#">Ler</a></li>
        <li data-val="delete"><a href="#">Deletar</a></li>
    </ul>
    <div class="wrap">
        <div class="form form-create">
            <form action="create.php" method="POST">
                <div>
                    <input type="text" name="nome">
                    <label for="nome">Nome:</label>
                </div>
                <div>
                    <input type="text" name="rg">
                    <label for="rg">RG:</label>
                </div>
                <div>
                    <input type="text" name="telefone">
                    <label for="telefone">Telefone:</label>
                </div>
                <div>
                    <input type="text" name="email">
                    <label for="email">E-mail:</label>
                </div>
                <div>
                    <input type="submit" value="Criar!" name="criar">
                </div>
            </form>
        </div>
        <!-- <div class="form form-update hidden">
            <form action="#">
                <div>
                    <select name="user">
                        <?php
                            foreach($users as $user) {
                                echo '<option value="'.$user.'">'.$user.'</option>';
                            }
                        ?>
                    </select>
                </div>
                <div>
                    <input type="text" name="nome">
                    <label for="nome">Nome:</label>
                </div>
                <div>
                    <input type="text" name="rg">
                    <label for="rg">RG:</label>
                </div>
                <div>
                    <input type="text" name="telefone">
                    <label for="telefone">Telefone:</label>
                </div>
                <div>
                    <input type="text" name="email">
                    <label for="email">E-mail:</label>
                </div>
                <div>
                    <input type="submit" value="Atualizar!">
                </div>
            </form>
        </div> -->
        <div class="form form-read hidden">
            <div class="show-users">
                <h1>Usuários cadastrados</h1>
                <ul>
                    <?php 
                        foreach($users as $user) {
                            echo '<li>'.$user.'</li>';
                        }
                    ?>
                </ul>
            </div>
        </div>
        <div class="form form-delete hidden">
            <form action="delete.php" method="POST">
                <div>
                    <select name="users">
                        <?php
                            foreach($users as $user) {
                                echo '<option value="'.$user.'">'.$user.'</option>';
                            }
                        ?>
                    </select>
                </div>
                <div>
                    <input type="submit" value="Deletar!" name="deletar">
                </div>
            </form>
        </div>
    </div>
    <script
        src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
</body>
</html>