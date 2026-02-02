<?php 
    require_once "pessoa.php";

    class Aluno extends Pessoa{
        protected $matr;
        protected $curso;

        //metodos
        public function PagarMensalidade(){
            echo "<p>Pagando mensalidade do aluno {$this -> nome}</p>";
        }

        //Getters
        public function getMatr(){
            return $this -> matr;
        }
        public function getCurso(){
            return $this -> curso;
        }

        //Setters
        public function setMatr($var){
            $this -> matr = $var;
        }
        public function setCurso($var){
            $this -> curso = $var;
        }
    }
?>