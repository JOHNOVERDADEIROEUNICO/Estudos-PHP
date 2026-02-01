<?php 
    require_once "pessoa.php";
    class Aluno extends Pessoa{
        private $matr;
        private $curso;
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
        //metodos
        public function CancelarMatr(){
            echo "<p>A matricula será cancelada.</p>";
            $this -> setCurso(null);
        }
    }
?>