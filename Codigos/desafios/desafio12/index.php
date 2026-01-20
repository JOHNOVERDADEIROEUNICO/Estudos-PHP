<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tempo em segundos</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .nota{
            height: 50px;
            margin: 25px;
        }
    </style>
</head>
<body>
    <main>
        <h1>quanto tempo cada segundo tem?</h1>
        <?php 
        $valor1 = $_GET['v1'] ?? 0;

        $n100 = 100;

        $n50 = 50;

        $n10 = 10;

        $n5 = 5;
        ?>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="v1">Quanto você deseja sacar?</label>
            <input type="number" name="v1" value="<?= $valor1 ?>" step="5" min="5" required>

            <p>OBS: temos somente notas de R$100* R$50* R$10* R$5*</p>

            <input type="submit" value="Sacar">
        </form>
    </main>
    <section>
        <h2>Saque de R$<?= number_format($valor1, 2, ",", ".") ?> realizado</h2>
        <?php 
            $dn100 = intdiv($valor1, $n100);
            $resto = $valor1 % $n100;

            $dn50 = intdiv($resto, $n50);
            $resto = $resto % $n50;

            $dn10 = intdiv($resto, $n10);
            $resto = $resto % $n10;

            $dn5 = intdiv($resto, $n5);
            $resto = $resto % $n5;
        ?>

        <p>O total de notas sacadas foi:</p>

        <ul>
            <li><img src="imagens/100-reais.jpg" alt="Nota de 100" class="nota"> x <?=  $dn100?></li>
            <li><img src="imagens/50-reais.jpg" alt="Nota de 50" class="nota"> x <?=  $dn50?></li>
            <li><img src="imagens/10-reais.jpg" alt="Nota de 10" class="nota"> x <?=  $dn10?></li>
            <li><img src="imagens/5-reais.jpg" alt="Nota de 5" class="nota"> x <?=  $dn5?></li>
        </ul>
    </section>
</body>
</html>