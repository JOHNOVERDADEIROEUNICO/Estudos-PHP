<?php 
    require_once "pessoa.php";
    class Professor extends Pessoa{
        //Atributos
        private $especialidade;
        private $salario;

        //Getters
        public function getEspecialidade(){
            return $this -> especialidade;
        }
        public function getSalario(){
            return $this -> salario;
        }
        
        //Setters
        public function seEspecialidade($var){
            $this-> especialidade = $var;
        }
        public function setSalario($var){
            $this-> salario = $var;
        }
        
        //Metodos
        public function ReceberAumento($aum){
            $this -> salario += $aum;
        }
    }
?>