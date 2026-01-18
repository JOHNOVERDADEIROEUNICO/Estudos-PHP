<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio da divisão</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Anatomia de uma Divisão</h1>

        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="dividendo">Dividendo</label>
            <input type="number" name="dividendo" value="<?= $valor1 ?>" min="0">

            <label for="divisor">Divisor</label>
            <input type="number" name="divisor"  value="<?= $valor2 ?>" min="1">

            <input type="submit" value="Analisar">
        </form>
    </main>

    <section>
        <h2>Estrutura da Divisão</h2>
        
        <?php 
            $valor1 = $_GET['dividendo'] ?? 0;

            $valor2 = $_GET['divisor'] ?? 1;

            $quociente = intdiv($valor1, $valor2);

            $resto = $valor1 % $valor2;
        ?>
        <table class="divisao">
            <tr>
                <td><?= $valor1 ?></td>
                <td><?= $valor2 ?></td>
            </tr>
            <tr>
                <td><?= $resto ?></td>
                <td><?=  $quociente ?></td>
            </tr>
        </table>
    </section>
</body>
</html>