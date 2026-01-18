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
        <h1>Informe seu salário</h1>

        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="salario">Salário</label>
            <input type="number" name="salario" value="<?= $valor1 ?>" min="1621" required step="0.01">

            <p>Considerando o salário mínimo de <strong>R$<?= number_format(1621, 2, ",", ".") ?></strong></p>

            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Resultado Final</h2>

        <?php 
            $valor1 = $_GET['salario'] ?? 1621.00;

            $resultadoInt = intdiv($valor1, 1621.00);

            $resultadoRes = $valor1 % 1621.00;

            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            echo "Quem recebe um salário de <strong>" . numfmt_format_currency($padrao, $valor1, "BRL") . "</strong> ganha <strong> $resultadoInt salário mínimos </strong> + " . numfmt_format_currency($padrao, $resultadoRes, "BRL");
        ?>
    </section>
</body>
</html>