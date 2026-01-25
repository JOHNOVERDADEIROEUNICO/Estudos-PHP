<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criando uma caneta</title>
</head>
<body>
    <?php 
        require_once 'caneta.php';

        $c1 = new Caneta("verde", "BIC", 0.5);

        print_r($c1);

        echo "<p>Eu tenho uma caneta {$c1->getModelo()} {$c1 -> getCor()} de ponta {$c1 -> getPonta()}</p>";

        $c1 -> setCor("Azul");

        $c1 -> setPonta(1.5);

        print_r($c1);

        echo "<p>Eu tenho uma caneta {$c1->getModelo()} {$c1 -> getCor()} de ponta {$c1 -> getPonta()}</p>";
    ?>
</body>
</html>