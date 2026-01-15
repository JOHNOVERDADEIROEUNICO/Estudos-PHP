<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Trabalhando com números aleatórios</h1>
    </header>
    <main>
        <p>Gerando um número aleatório entre 0 e 100</p>
        <?php 
            function sorteando(){
               return mt_rand(1, 100);
            }
            
            if(isset($_POST['getNumber'])){
                $n1 = sorteando();
                echo "O número gerado foi <strong>$n1</srong>" ;
            }
        ?>
       
        <form action="" method="post">
            <button type="submit" name="getNumber">Gerar outro numero</button>
        </form>
        
    </main>
</body>
</html>