<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP pré-processamento</title>
</head>
<body>
    <h1>Mostrando o pré-processamento do PHP</h1>

    <?php 
        date_default_timezone_set("America/Sao_Paulo");/*Caso esteja curioso aqui estamos configurando o nosso servidor para pegar a data e hota da região de são paulo, por padrão os servidores vem configurados com a data e hora de outra região(provavelmente estados unidos)*/ 

        echo"Hoje é dia " . date("D/M/Y");
        echo " e a hora atual é ". date("G:i:s");/*Perceba que o '.' em PHP é o mesmo que uma virgual ou um '+' de outras linguagens, ou seja ele serve para concatenar strings. */
        
        /*Perceba que todos estes métodos ao colocarmos para o navegador mostrar os elemntos, eles estarão processados e transformados em HTML. */
    ?>
</body>
</html>