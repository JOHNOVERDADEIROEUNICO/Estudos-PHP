<?php 
    require_once "lutadores.php";
    class Lutar{
        //Atributos
        private $desafiado;
        private $desafiante;
        private $rounds;
        private $aprovada;

        //getters
        private function getDesafiado(){
            return $this ->  desafiado;
        }
        private function getDesafiante(){
            return $this -> desafiante;
        }
        private function getRounds(){
            return $this ->  rounds;
        }
        private function getAprovada(){
            return $this -> aprovada;
        }

        //setters
        private function setDesafiado($var){
            $this -> desafiado = $var;
        }
        private function setDesafiante($var){
            $this -> desafiante = $var;
        }
        private function setRounds($var){
            $this -> rounds = $var;
        }
        private function setAprovada($var){
            $this -> aprovada = $var;
        }

        //metodo
        public function Luta(){
            if ($this -> aprovada == true){
                $this -> desafiado -> apresentar();

                $this -> desafiante -> apresentar();

                $quemVenceu = mt_rand(1, 3);

                switch($quemVenceu){
                    case 1: //desafiado venceu

                        echo "<p>O lutador {$this -> desafiado -> getNome()} venceu!</p>";

                        $this -> desafiado -> GanharLuta();

                        $this -> desafiante -> PerderLuta();
                    break;

                    case 2: //desafiante venceu
                        echo "<p>O lutador {$this -> desafiante -> getNome()} venceu!</p>";

                        $this -> desafiado -> PerderLuta();

                        $this -> desafiante -> GanharLuta();
                    break;

                    case 3: //empate
                        echo "<p>O embate entre o lutador {$this -> desafiado -> getNome()} e o lutador {$this -> desafiante -> getNome()} treminou empatado!</p>";

                        $this -> desafiado -> EmpatarLuta();

                        $this -> desafiante -> EmpatarLuta();
                    break;
                }
            }
            else{
                echo "<p>A luta não pode ocorrer.</p>";
            }
        }
        public function MarcarLuta( Lutadores $l1, Lutadores $l2){
            if  ($l1 -> getCategoria() == $l2 -> getCategoria() && $l1 != $l2){
                echo "<p>O embate entre os lutadores está marcado!</p>";

                $this -> aprovada =  true;

                $this -> desafiado = $l1;

                $this -> desafiante = $l2;
            }
            else if ($l1 -> getCategoria() === $l2 -> getCategoria() && $l1-> getPeso()  != $l2-> getPeso()){
                echo "<p>Um dos lutadores não bateu o peso.</p>";

                $this -> aprovada = false;

                $this -> desafiado = null;

                $this -> desafiante = null;
            }
            else if ($l1 -> getCategoria() != $l2 -> getCategoria()){
                echo "<p>Os lutadores são de categorias diferentes.</p>";

                $this -> aprovada = false;

                $this -> desafiado = null;

                $this -> desafiante = null;
            }
        }
        
    }
?>