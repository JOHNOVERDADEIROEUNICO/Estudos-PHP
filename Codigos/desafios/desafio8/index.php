<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>médias</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>médias aritméticas</h1>

        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="val1">Valor1</label>
            <input type="number" name="val1" value="<?= $valor1 ?>" min="1" required step="0.01">

            <label for="pes1">Peso1</label>
            <input type="number" name="pes1" value="<?= $valor1 ?>" min="1" required step="0.01">

            <label for="val2">Valor2</label>
            <input type="number" name="val2" value="<?= $valor1 ?>" min="1" required step="0.01">

            <label for="pes2">Peso2</label>
            <input type="number" name="pes2" value="<?= $valor1 ?>" min="1" required step="0.01">

            <input type="submit" value="Calcular médias">
        </form>
    </main>
    <section>
        <h2>Resultado Final</h2>

        <?php 
            $valor1= $_GET['val1'] ?? 1;

            $peso1 = $_GET['pes1'] ?? 1;

            $valor2 = $_GET['val2'] ?? 1;

            $peso2 = $_GET['pes2'] ?? 1;

            $mediaS = ($valor1 + $valor2) / 2;

            $mediaP = ($valor1 * $peso1 + $valor2 * $peso2) / ($peso1 + $peso2);

            echo "<p>Analisando os valores $valor1 e $valor2 temos:</p>";

            echo "<ul>";

            echo "<li>A <strong>Média Aritmética Simples</strong> entre os valores é igual a $mediaS</li>";

            echo "<li>A <strong>Média Aritmética Ponderada</strong> com os pesos $peso1 e $peso2 é igual a $mediaP</li>";

            echo "</ul>";
        ?>
    </section>
</body>
</html>