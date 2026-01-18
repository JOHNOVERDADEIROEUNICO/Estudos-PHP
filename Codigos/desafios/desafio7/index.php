<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quantos salários mínimos?</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Informe um número</h1>

        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="raiz">Raiz</label>
            <input type="number" name="raiz" value="<?= $valor1 ?>" min="1" required step="0.01">

            <input type="submit" value="Calcular Raizes">
        </form>
    </main>
    <section>
        <h2>Resultado Final</h2>

        <?php 
            $valor1= $_GET['raiz'] ?? 1;

            $raiz = sqrt($valor1);

            $cubica = $valor1 ** (1/3);

            echo "Analisando o valor <strong>$valor1</strong> temos:<br>";

            echo "<ul>";

            echo "<li>A sua raiz quadrada é <strong>" . number_format($raiz, 3, ",", ".") . "</strong></li>";

            echo "<li>A sua raiz quadrada é <strong>" . number_format($cubica, 3, ",", ".") . "</strong></li>";

            echo "</ul>"
        ?>
    </section>
</body>
</html>