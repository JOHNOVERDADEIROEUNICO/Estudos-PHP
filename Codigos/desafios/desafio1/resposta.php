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
            $n1 = $_REQUEST["numero"] ?? "algo deu errado";

            $sucessor = $n1 + 1;

            $antecessor = $n1 -1;

            echo"O numero digitado foi: $n1 <br>O seu antecessor é: $antecessor <br>O seu sucessor é: $sucessor";
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
    </main>
</body>
</html>