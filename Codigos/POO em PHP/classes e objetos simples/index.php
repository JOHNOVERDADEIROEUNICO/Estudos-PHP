<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>criando o objeto</title>
</head>
<body>
    <?php 
        //O requireonce indica aonde está a classe que utilizaremos (caso ela esteja em outro arquivo)
        require_once 'caneta.php';
        $c1 = new Caneta();

        //Perceb que cor é um atributo que foi declarado usando $ porém na hora de mexer nele pelo objeto não usamos cifrão
        $c1 -> cor = "Azul";
        $c1 -> ponta = "0.5";
        $c1 -> tampada = true;

        //O var dump mostra todos os valores atribuidos ao objeto(evita ter que ficar escrevendo muito dentro do echo)
        var_dump($c1);

        echo"<br><br>";

        //O print_r faz o mesmo só que mais organizado.
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