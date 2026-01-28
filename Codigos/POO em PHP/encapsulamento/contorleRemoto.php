<?php 
    require_once "interface.php";
    class ContorleRemoto implements Controlador{
        //Atributos
        private $volume;

        private $ligado;

        private $tocando;

        private $mudo;

        //Métodos
        function __construct()
        {
            $this -> volume = 50;
            $this -> ligado = false;
            $this -> tocando = false;
        }

        private function getVolume(){
            return $this -> volume;
        }

        private function getLigado(){
            return $this -> ligado;
        }

        private function getTocando(){
            return $this -> tocando;
        }

        private function getMudo(){
            return $this -> mudo;
        }

        private function setVolume($var){
            $this -> volume = $var;
        }

        private function setLigado($var){
            $this -> ligado = $var;
        }

        private function setTocando($var){
            $this -> tocando = $var;
        }

        private function setMudo($var){
            $this -> mudo = $var;
        }


        //metodos da interface
        public function Ligar(){
            $this -> setLigado(true);

            echo "<p>Ligando o som</p>";
        }

        public function Desligar(){
            $this -> setLigado(false);

            echo "<p>Desligando o som</p>";
        }

        public function AbrirMenu(){
            echo "<br>Está ligado?: ";

            echo $this -> getLigado() ? "Sim" : "Não";

            echo "<br>Está tocando?: ";

            echo $this -> getTocando() ? "Sim" : "Não";

            echo "<br>Voume: ". $this -> getVolume();

            for($i = 0; $i <= $this -> getVolume(); $i += 10){
                echo "|";
            }

            echo"<br>";
        }

        public function FecharMenu(){
            echo "<p>Fechando o menu...</p>";
        }

        public function MaisVolume(){
            if($this -> getLigado() == true and $this -> getVolume() < 100){
                $this -> setVolume($this -> getVolume() + 5);
            }
            else if($this -> getLigado() == true and $this -> getVolume() == 100){
                echo "Volume: ". $this -> getVolume();
            }
            else if($this -> getLigado() == false){
                echo "Som desligado.";
            }
        }

        public function MenosVolume(){
            if($this -> getLigado() == true and $this -> getVolume() < 100){
                $this -> setVolume($this -> getVolume() - 5);
            }
            else if($this -> getLigado() == true and $this -> getVolume() == 0){
                echo "Volume: ". $this -> getVolume();
            }
            else if($this -> getLigado() == false){
                echo "Som desligado.";
            }
        }

        public function LigarMudo(){
            if ($this -> getLigado() == true){
                $this -> setVolume(0); 
                $this -> setMudo(true);
            }
            else{
                echo "Som desligado.";
            }
        }

        public function DesligarMudo(){
            if ($this -> getLigado() == true and $this -> getMudo() == true){
                $this -> setVolume(50); 
                $this -> setMudo(false);

                echo "Volume: ". $this -> getVolume();
            }
            else if($this -> getLigado() == true and $this -> getMudo() == false){
                echo "Volume: ". $this -> getVolume();
            }
            else if($this -> getLigado() == false){
                echo "Som desligado.";
            }
        }

        public function Play(){
            if($this -> getLigado() == true and $this -> getTocando() == false){
                $this -> setTocando(true);

                echo "Tocando musica..";
            }
            else if($this -> getLigado() == true and $this -> getTocando() == true){
                echo "O som já está tocando";
            }
            else if($this -> getLigado() == false){
                echo "O som está desligado.";
            }
        }

        public function Pause(){
            if($this -> getLigado() == true && $this -> getTocando() == true){
                $this -> setTocando(false);

                echo "Musica pausada.";
            }
            else if($this -> getLigado() == true and $this -> getTocando() == false){
                echo "Não a som tocando.";
            }
            else if($this -> getLigado() == false){
                echo "O som está desligado.";
            }
        }
    }
?>