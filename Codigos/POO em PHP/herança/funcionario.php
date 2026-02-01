<?php 
    require_once "pessoa.php";
    class Funcionario extends Pessoa{
        private $setor;
        private $trabalhando;

        public function getSetor(){
            return $this -> setor;
        }
        public function getTrabalhando(){
            return $this -> trabalhando;
        }

        public function setSetor($var){
            $this -> setor = $var;
        }
        public function setTrabalhando($var){
            $this -> trabalhando = $var;
        }

        public function MudarTrabalho(){
            $this -> trabalhando = ! $this -> trabalhando;
        }
    }
?>