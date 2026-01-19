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
            $valor1= $_GET['val1'] ?? date("Y");

            $atual = $_GET['atual'] ?? date("Y");
        ?>
        <h1>Qual a sua idade?</h1>

        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="val1">Em que ano você nasceu?</label>
            <input type="number" name="val1" value="<?= $valor1 ?>" min="0" max="2026" required step="1">

            <input type="submit" value="registrar">

            <label for="atual">Deseja saber sua idade em qual ano?(Atualmente estamos no ano de <strong><?= date("Y") ?></strong>)</label>
            <input type="number" name="atual" value="<?= $atual ?>" min="<?= $valor1 ?>" required step="1">
        </form>
    </main>
    <section>
        <h2>Resultado Final</h2>

        <?php 
            $data = $atual - $valor1;

            echo "A pessoal que nasceu no ano de $valor1, no ano de $atual possuí a idade de $data anos.";
        ?>
    </section>
</body>
</html>