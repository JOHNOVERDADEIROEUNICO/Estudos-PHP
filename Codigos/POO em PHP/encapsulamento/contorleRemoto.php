<?php 
    require_once "interface.php";
    class ContorleRemoto implements Controlador{
        //Atributos
        private $volume;

        private $ligado;

        private $tocando;

        //Métodos
        function __construct()
        {
            $this -> volume = 50;
            $this -> ligado = false;
            $this -> tocando = false;
        }

        public function getVolume(){
            return $this -> volume;
        }

        public function getLigado(){
            return $this -> ligado;
        }

        public function getTocando(){
            return $this -> tocando;
        }

        public function setVolume($var){
            $this -> volume = $var;
        }

        public function setLigado($var){
            $this -> ligado = $var;
        }

        public function setTocando($var){
            $this -> tocando = $var;
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
            echo "<br>Está ligado?: ". $this -> getLigado() ? "Sim" : "Não";

            echo "<br>Está tocando?: ". $this -> getTocando() ? "Sim" : "Não";

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
                $this -> setVolume($this -> getVolume() + 1);
            }
            else if($this -> getLigado() == true and $this -> getVolume() == 100){
                echo "Volume: ". $this -> getVolume();
            }
            else if($this -> getLigado() == false){
                echo "Som desligado.";
            }
        }

        public function MenosVolume(){

        }

        public function LigarMudo(){

        }

        public function DesligarMudo(){

        }

        public function Play(){

        }

        public function Pause(){

        }
    }
?>