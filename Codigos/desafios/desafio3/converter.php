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
            $n1 = $_REQUEST["reais"] ?? "algo deu errado";

            $dolarNoMomentoQueFizIsto = 5.38;

            $convertido = $n1 / $dolarNoMomentoQueFizIsto;

            /*echo"Seu dinheiro em reais é: R\$" . number_format($n1, 2, ',', '.') . "<br>E em dólares é: US\$" . number_format($convertido, 2, ',', '.');*/

            /*Esta maneira acima é a maneira clássica orientada a gambiarra, veja agora uma maneira mais profissional:*/ 

            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            echo "Seus " . numfmt_format_currency($padrao, $n1, "BRL") . " Equivale a " . numfmt_format_currency($padrao, $convertido, "USD");
            /*OBS: se caso não funcionar procure na pasta xampp pelo php.ini ou o arquivo php acima do php.inidevolpment, abra no visual e procure pela extension=intl e remova o ; do começo.Pode ser que mesmo assim pode ser que não funcione em linux e mac, em servidores é grantido que funciona.*/
        ?>
        <button><a href="javascript:history.go(-1)">Voltar para a página anterior</a></button>
    </main>
</body>
</html>