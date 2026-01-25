<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>classe caneta</title>
</head>
<body>
    <?php 
        class Caneta{
            public $modelo;
            private $ponta;

            private $cor;

            public function __construct($Cor, $Modelo, $Ponta)
            {
                $this -> cor = $Cor;
                $this -> modelo = $Modelo;
                $this -> ponta = $Ponta;
            }

            public function getModelo(){
                return $this -> modelo;
            }

            public function getCor(){
                return $this -> cor;
            }


            public function setCor($Cor){
                return $this -> cor = $Cor;
            }

            public function getPonta(){
                return $this -> ponta;
            }
  
            public function setPonta($Ponta){
                return $this -> ponta = $Ponta;
            }
        }
    ?>
</body>
</html>