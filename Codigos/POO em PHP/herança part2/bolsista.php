<?php 
    require_once "aluno.php";
    class Bolsista extends Aluno{
        protected $bolsa;

        public function RenovarBolsa(){
            echo "<p>Bolsa renovada</p>";
        }

        public function PagarMensalidade(){
            echo "<p>Pagando mensalidade do aluno {$this -> nome} com o desconto da bolsa.</p>";
        }

        function getBolsa(){
            return $this -> bolsa;
        }

        function setBolsa($var){
            $this -> bolsa = $var;
        }
    }
?>