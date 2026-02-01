<?php 
    class Lutadores{
        //Atributos
        private $nome;
        private $nacionalidade;
        private $idade;
        private $altura;
        private $peso;
        private $categoria;
        private $vitorias;
        private $derrotas;
        private $empates;

        //metodos especiais
        //Getters
        public function getNome(){
            return $this ->  nome;
        }
        public function getNacionalidade(){
            return $this ->  nacionalidade;
        }
        public function getIdade(){
            return $this ->  idade;
        }
        public function getPeso(){
            return $this ->  peso;
        }
        public function getCategoria(){
            return $this -> categoria ;
        }
        public function getAltura(){
            return $this ->  altura;
        }
        public function getVitorias(){
            return $this ->  vitorias;
        }
        public function getDerrotas(){
            return $this ->  derrotas;
        }
        private function getEmpates(){
            return $this ->  empates;
        }

        //Setters
        private function setNome($var){
            $this -> nome = $var;
        }
        private function setNacionalidade($var){
            $this -> nacionalidade = $var;
        }
        private function setIdade($var){
            $this -> idade = $var;
        }
        private function setAltura($var){
            $this -> altura = $var;
        }
        private function setPeso($var){
            $this -> peso = $var;

            $this -> setCategoria();
        }
        private function setCategoria(){
            if ($this -> getPeso() < 52.2){
                $this -> categoria = "Invalido";
            }
            else if ($this -> getPeso() <= 70.3){
                $this -> categoria = "Leve";
            }
            else if ($this -> getPeso() <= 83.9){
                $this -> categoria = "Medio";
            }
            else if ($this -> getPeso() <= 120.2){
                $this -> categoria = "Pesado";
            }
            else {
                $this -> categoria = "Invalido";
            }
        }
        private function setVitorias($var){
            $this -> vitorias += $var;
        }
        private function setDerrotas($var){
            $this -> derrotas += $var;
        }
        private function setEmpates($var){
            $this -> empates += $var;
        }

        //Construtor
        public function __construct($n, $na, $i, $al, $pes, $vic, $loss, $draw)
        {
            $this -> setNome($n);
            $this -> setNacionalidade($na);
            $this -> setIdade($i);
            $this -> setAltura($al);
            $this -> setPeso($pes);
            $this -> setVitorias($vic);
            $this -> setDerrotas($loss);
            $this -> setEmpates($draw);
        }

        //Metodos
        public function Apresentar(){
            echo "<p>Ladies and gentlemen, we are... live! From the [Local do Evento]! This is the main event of the evening!</p>";

            echo "<p>This is the moment you've all been waiting for! Live! IIIIIIIIIIIIII t's TIIIIIime!</p>";

            echo "<p>Introducing first, fighting out of the blue/red corner... weighing {$this -> getPeso()}kg from {$this -> getCategoria()} category, with {$this -> getAltura()}</p>, from {$this -> getNacionalidade()} The One, The Only, {$this -> getNome()}";
        }
        public function Status(){
            echo "<p>O lutador {$this -> getNome()} possui: </p>";

            echo "<p>Vitorias: {$this -> getVitorias()}</p>";

            echo "<p>Empates: {$this -> getEmpates()}</p>";
            
            echo "<p>Derrotas: {$this -> getDerrotas()}</p>";
        }
        public function GanharLuta(){
            $this -> setVitorias(1);
        }
        public function PerderLuta(){
            $this -> setDerrotas(1);
        }
        public function EmpatarLuta(){
            $this -> setEmpates(1);
        }
    }
?>