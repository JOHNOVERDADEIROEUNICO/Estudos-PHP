<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conta Bancária</title>
</head>
<body>
    <?php 
        require_once "contaBanco.php";

        $p1 = new ContaBanco();

        $p2 = new ContaBanco();

        $p1 -> AbrirConta("CC");

        $p1 -> setDono("Jubileu");

        $p1 -> setNumConta(1111);

        $p2 -> AbrirConta("CP");

        $p2 -> setDono("Creusa");

        $p2 -> setNumConta(2222);

        print_r($p1);

        echo "<br><br>";

        print_r($p2);

        $p1 -> Depositar(300);

        $p2 -> Depositar(500);

        echo "<br><br>";

        print_r($p1);

        echo "<br><br>";

        print_r($p2);

        $p2 -> Sacar(100);

        echo "<br><br>";

        print_r($p2);

        //Fique a vntade para testar mais possibilidades.
        
    ?>
</body>
</html>