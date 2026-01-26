<?php 
    class ContaBanco{
        //Atributos
        public $numConta;

        protected $tipo;

        private $dono;

        private $saldo;

        private $status;

        //métodos
        public function AbrirConta($t){
            $this -> setTipo($t);

            $this -> setStatus(true);

            if ($t == "CC"){
                $this -> setSaldo(50);
            }
            elseif ($t == "CP"){
                $this -> setSaldo(150);
            }

        }

        public function FecharConta(){
            if ($this -> getSaldo() > 0){
                echo "<p>ERRO! Você ainda possui dinheiro na conta.</p>";
            }
            elseif ($this -> getSaldo() < 0){
                echo "<p>ERRO! Sua conta está em debito.</p>";
            }
            else{
                $this -> setStatus(false);
            }
        }

        public function Depositar($d){
            if ($this -> getStatus() == true){
                $this -> setSaldo($this -> getSaldo() + $d);
            }
            else{
                echo "<p>A conta está fechada.</p>";
            }
        }

        public function Sacar($v){
            if ($this -> getStatus() == true){
                if ($this -> getSaldo() >= $v){
                    $this -> setSaldo($this -> getSaldo() - $v);
                }
                else{
                    echo "<p>Seu saldo não é suficiente para esta tarefa.</p>";
                }
            }
            else{
                echo "Sua conta está fechada. Impossível sacar.";
            }
        }

        public function PaagarMensal(){

        }

        //Construtor
        public function __construct(){
            
        }
        //Getters
        public function getNumConta(){
            return $this -> numConta;
        }

        public function getTipo(){
            return $this -> tipo;
        }

        public function getDono(){
            return $this -> dono;
        }

        public function getSaldo(){
            return $this -> saldo;
        }

        public function getStatus(){
            return $this -> status;
        }

        //Setters
        public function setNumConta($variavel = 0){
            $this -> numConta = $variavel;
        }

        public function setTipo($variavel = 0){
            $this -> tipo = $variavel;
        }

        public function setDono($variavel = 0){
            $this -> dono = $variavel;
        }

        public function setSaldo($variavel = 0){
            $this -> saldo = $variavel;
        }

        public function setStatus($variavel = 0){
            $this -> status = $variavel;
        }

    }
?>