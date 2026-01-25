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
            //Até aqui sintax simples, vamos aos objetos:

            //O var aqui é do mesmo jeito que aprendemos no JS

            var $modelo ;

            var $cor;

            var $ponta;

            var $carga;

            var $tampada ;

            function Rabiscar(){
                if ($this -> tampada == true){
                    echo"<p>ERRO! A caneta está tampada!</p>";
                }
                else{
                    echo"<p>Estou rabiscando</p>";
                }
            }
            function Tampar(){
                //O $this permite modificarmos o valor de um atributo.
                $this -> tampada = true;
            }
            function Destampar(){
                $this -> tampada = false;
            }
        }
    ?>
</body>
</html>