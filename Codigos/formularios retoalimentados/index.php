<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Retroalimentando a página</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Somador de valores</h1>
        <?php 
        // Capturando os dados do formulário retroalimnetado.

        $valor1 = $_GET['v1'] ?? 0;
        $valor2 = $_GET['v2'] ?? 0;
        ?>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get"><!-- Aqui estamos enviando os dados diretamente para a mesma página! lembrando que '<'?= ?> é literalmente o mesmo que colocar um echo na super tag.-->
            <label for="v1">Valor1</label>
            <input type="number" name="v1" value="<?= $valor1 ?>">

            <label for="v2">Valor2</label>
            <input type="number" name="v2"  value="<?= $valor2 ?>">

            <input type="submit" value="Somar">
        </form>
    </main>
    <section>
        <h2>Resultado da Soma</h2>
        <?php 
            $soma = $valor1 + $valor2;

            echo "A soma deu: <strong>$soma</strong>"
        ?>
    </section>
</body>
</html>