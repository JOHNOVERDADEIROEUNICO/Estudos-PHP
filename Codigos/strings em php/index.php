<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conferindo como funciona as strings em PHP</title>
</head>
<body>
    <?php 
        $name = "John";
        $name2 = 'Peter';/*Perceba que aspas simpes e duplas salvam a variável como string. */

        const ESTADO = "GO";

        echo"Olá $name $name2";
        echo ' Olá $name $name2';/*Perceba que aspas simples não interpretam o que está dentro delas. */
        echo" Moro no estado: " . ESTADO;/*tanto aspas simples quanto duplas não conseguem interpretar constantes, então para mostra_las na tela devemos esrever fora das aspase usar o concatenador para unir.*/

        echo " Estamos no ano de: " . date('y');

        echo " $name \"Progamador\" $name2";/*Vamos supor que eu queria colocar um nome ou apelido entre aspas não vai funcionar pois o interpretador vai entender que estou fechando a aspa anterior aberta, para resolver isso usamos  a sequência de escape \".*/

        echo <<< QUALQUER_PALAVRA_VALE
            Assim se dá o funcionamento de herdoc, veja meu nome abaixo:


                Olá eu sou $name $name2
        QUALQUER_PALAVRA_VALE;/*Então para se usar este formato de escrita, basta colocar 3 sinais de menor e após um nome de indentificador pra abri e para fechar ele novamente. Curiosidade caso tenha percebido por algum motivo ele não está funcionando perfeitamente, talvez já tenha caido em desuso*/

        echo <<< 'QUALQUER_PALAVRA_VALE'
            Assim se dá o funcionamento de nowdoc, veja meu nome abaixo:


                Olá eu sou $name $name2
        QUALQUER_PALAVRA_VALE;/*Funciona de forma semelhante mas como pode ver ela serve para quando se não quer interpretação de comandos. */
    ?>
</body>
</html>