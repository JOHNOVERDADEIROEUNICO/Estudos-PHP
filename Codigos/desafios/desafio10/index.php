<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quando nasci?</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <?php 
            $valor1 = $_GET['val1'] ?? 1.00;
            $porc = $_GET['rang'] ?? 0;
            $re = $valor1 + $valor1 * $porc / 100;
        ?>
        <h1>Qual a sua idade?</h1>

        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="val1">Qual será o preço do produto?(R$)</label>
            <input type="number" name="val1" value="<?= $valor1 ?>" min="1" max="2026" required step="0.01">

            <label for="rang">Qual será o percentual de reajuste? (<span id="p"></span>%)</label>
            <input type="range" min="0" max="100" step="1" name="rang" id="rang" oninput="mudaValor()"><!-- OBS no navegador opera e possivelmente em alguns outros o css do range não está funcionando, tentei resolver mas não fi possível até o momento.-->

            <input type="submit" value="registrar">
        </form>
    </main>
    <section>
        <h2>Resultado Final</h2>

        <?php 
            echo "O valor do reajuste de $porc% será de: " . number_format($re, 2, ",", ".") . "R$";
        ?>
    </section>
    <script>
        //Dleclarações automaticas:
        mudaValor()

        function mudaValor() {
            p.innerText = rang.value;
        }
    </script>
</body>
</html>