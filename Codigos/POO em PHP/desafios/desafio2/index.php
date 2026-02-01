<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lutadores</title>
</head>
<body>
    <?php 
        require_once "lutadores.php";
        require_once "luta.php";

        $l1 = new Lutadores("John", "Brasil", 28, 1.80, 90.0, 12, 2, 1);

        $l1 -> Apresentar();

        $l2 = new Lutadores("Adesanya", "Brasil", 36, 1.78, 93.0, 20, 4, 1);

        $l2 -> Apresentar();

        $l1 -> Status();
        $l2 -> Status();

        $uec01 = new Lutar();
        $uec01 -> MarcarLuta($l1, $l2);
        $uec01 -> Luta();

        $l1 -> Status();
        $l2 -> Status();
    ?>
</body>
</html>