<?php
// Questão 1
if(isset($_POST['calcImposto'])) {
    $imposto = $_POST['valor'];
    
    if($imposto < 1200) {
        $imposto = 0;
    } else if($imposto < 5000 && $imposto > 1201) {
        $imposto = $imposto * 0.1;
    } else if($imposto < 10000 && $imposto > 5001) {
        $imposto = $imposto * 0.15;
    } else {
        $imposto = $imposto * 0.2;
    }
}

// Questão 3
if(isset($_POST['converter'])) {
    $milhas = $_POST['milhas'];
    $km = $milhas * 1.60934;
}

// Questão 4
// RESPOSTA: C

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NAC 2</title>

    <link rel="stylesheet" href="main.css">
</head>
<body>
    <div class="questao">
        <h1>1.</h1>
        <form action="index.php" method="post">
            <label for="valor">Valor</label>
            <input type="text" name="valor" id="valor">
            <input type="submit" value="Calcular Imposto" name="calcImposto">
        </form>
        <div class="resultado">
            <p>
                <?php
                    if(isset($imposto)) {
                        if($imposto == 0) {
                            echo 'Isento';
                        } else {
                            echo 'A taxa é de: R$ ' . $imposto;
                        }
                    }
                ?>
            </p>
        </div>
    </div>
    <div class="questao">
        <h1>2.</h1>
        <div class="resultado">
            <div class="wrap">
                <?php
                    // Questão 2
                    for($i = 1; $i <= 7; $i++) {
                        echo '<div class="column">';
                        for($j = 1; $j <= 10; $j++) {
                            echo '<p>' . $i * $j . '</p>';
                        }
                        echo '</div>';
                    }
                ?>
            </div>
        </div>
    </div>
    <div class="questao">
        <h1>3.</h1>
        <div class="resultado">
            <form action="index.php" method="post">
                <input type="text" placeholder="Qtd. de milhas" name="milhas">
                <input type="submit" value="Converter p/ KM" name="converter">
            </form>
            <p>Total de: <?php echo isset($km) ? $km : 0 ?> KM</p>
        </div>
    </div>
</body>
</html>