<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php 
           /* var_dump($_GET);*/
           /*Este método com  este valor mostra os dados obtidoos! Perceba que ele chega como um array de 2 posições em formato de string(obvio afinal colocamos em um input text)
            
            Este valor contido é uma superGlobal que retorna os dados do método de envio get, além dele também temos o $_POST que retorna os dados de envico do método post definido no form
            
            E também temos o $_REQUEST que une GET, POST COOKIES, ou seja posso usar qualquer um destes métodos de envio que ele captura. */

            $nome = $_REQUEST["nome"] ?? "Sem Nome";/*Perceba que aqui (entre os colchetes) eu uso  o mesmo nome definido do name! 
            
            Perceba também o operador de coalescência nula para tratar erros, ele só será acionado se os inputs por algum motivo não forem enviados, se eles forem enviados sem valores ai ele irá ainda interpretar os inputs, para resolver isso melhor tratar pela própria página anterior.*/

            $sobrenome = $_REQUEST["sobrenome"] ?? "Sem Sobrenome";

            echo"É um prazer te conhecer sr(a).$nome $sobrenome";
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p><!--Este código maluco é porque estamos em um server apache, para retornar a página anterior este é o caminho.-->
    </main>
</body>
</html>