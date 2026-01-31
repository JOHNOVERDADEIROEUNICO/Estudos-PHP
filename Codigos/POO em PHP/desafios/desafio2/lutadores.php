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
        private function getNome(){
            return $this ->  nome;
        }
        private function getNacionalidade(){
            return $this ->  nacionalidade;
        }
        private function getIdade(){
            return $this ->  idade;
        }
        private function getPeso(){
            return $this ->  peso;
        }
        private function getCategoria(){
            return $this -> categoria ;
        }
        private function getAltura(){
            return $this ->  altura;
        }
        private function getVitorias(){
            return $this ->  vitorias;
        }
        private function getDerrotas(){
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
        public function Lutar(object $l1, object $l2){
            $quemVenceu = mt_rand(1, 3);

            if  ($l1 -> getCategoria() === $l2 -> getCategoria() && $l1-> getPeso() === $l2-> getPeso()){
                if ($quemVenceu == 1){
                    $l1 -> GanharLuta();

                    $l2 -> PerderLuta();
                }
                else if ($quemVenceu == 2){
                    $l1 -> PerderLuta();

                    $l2 -> GanharLuta();
                }
                else if ($quemVenceu == 3){
                    $l1 -> EmpatarLuta();

                    $l2 -> EmpatarLuta();
                }
            }
            else if ($l1 -> getCategoria() === $l2 -> getCategoria() && $l1-> getPeso()  != $l2-> getPeso()){
                echo "<p>Um dos lutadores não bateu o peso.</p>";
            }
            else if ($l1 -> getCategoria() != $l2 -> getCategoria()){
                echo "<p>Os lutadores são de categorias diferentes.</p>";
            }
        }

    }
?>