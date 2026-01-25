<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>criando o objeto</title>
</head>
<body>
    <?php 
        require_once 'caneta.php';
        $c1 = new Caneta();

        $c1 -> cor = "Azul";
        $c1 -> Apontar(0.5);
        $c1 -> Tampar();

        var_dump($c1);

        echo"<br><br>";

        print_r($c1);

        $c1 -> Rabiscar();

        $c1 ->Destampar();

        print_r($c1);

        $c1 -> Rabiscar();

        $c1 ->Tampar();

        print_r($c1);

        $c1 -> Rabiscar();
    ?>
</body>
</html>