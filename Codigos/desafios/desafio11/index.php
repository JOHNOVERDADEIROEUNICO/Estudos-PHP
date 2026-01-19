<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tempo em segundos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>quanto tempo cada segundo tem?</h1>
        <?php 
        $valor1 = $_GET['v1'] ?? 0;

        $min = 60;

        $hor = 3600;

        $dia = 86400;

        $sem = 604800;
        ?>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="v1">Segundos</label>
            <input type="number" name="v1" value="<?= $valor1 ?>">

            <input type="submit" value="Descobrir...">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <?php 
            $reSem = intdiv($valor1, $sem);
            $reSemR = $valor1 % $sem;

            $reDia = intdiv($reSemR, $dia);
            $reDiaR = $reSemR % $dia;

            $reHor = intdiv($reDiaR, $hor);
            $reHorR = $reDiaR % $hor;

            $reMin = intdiv($reHorR, $min);
            $seg = $reHorR % $min;

            echo "O total de segundos digitados vai da em $reSem semanas, $reDia dias, $reHor horas, $reMin minutos e $seg segundos";
        ?>
    </section>
</body>
</html>