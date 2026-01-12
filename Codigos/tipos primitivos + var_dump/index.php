<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em php</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>
    <?php 
        $num = 0x1A;
        $num2 = 26;

        echo"Os valores são os mesmos! " . $num . " e " . $num2;

        $v = 300;

        var_dump( $v );/*Este método mostra de qual tipo é a variável*/ 

        $v2 = 3e2;/*Perceba que ele transforma em uma potência quando tem o 'e' e também perceba que ele se torna um tipo double. */

        var_dump( $v2 );

        $v3 = (integer) 3e2;/*Perceba que eu estou forçando ele a ficar int */

        var_dump( $v3 );

        $vetor = [1, "John", 2.5];/*Curiosidade um vetor não pode ser mostrado por inteiro dentro de um echo */

        var_dump( $vetor );
    ?>
</body>
</html>