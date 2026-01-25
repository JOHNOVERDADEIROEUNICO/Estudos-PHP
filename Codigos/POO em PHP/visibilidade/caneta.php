<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Objetos e Classes</title>
</head>
<body>
    <?php 
        class Caneta {
            //O var configura a visibilidade como generica, funcionando exatamente como um public, mas também temos, public, private e protected dentro do PHP
            private $modelo ;

            public $cor;

            private $ponta;

            private $carga;

            private $tampada ;

            function Rabiscar(){
                if ($this -> tampada == true){
                    echo"<p>ERRO! A caneta está tampada!</p>";
                }
                else{
                    echo"<p>Estou rabiscando</p>";
                }
            }
           public  function Tampar(){
                $this -> tampada = true;
            }
            public function Destampar(){
                $this -> tampada = false;
            }

            public function Apontar($Ponta){
                $this -> ponta = $Ponta;
            }

        }
    ?>
</body>
</html>