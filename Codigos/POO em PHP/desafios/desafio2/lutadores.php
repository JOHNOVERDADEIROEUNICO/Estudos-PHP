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
        }
        private function setCategoria($var){
            $this -> categoria = $var;
        }
        private function setVitorias($var){
            $this -> vitorias = $var;
        }
        private function setDerrotas($var){
            $this -> derrotas = $var;
        }
        private function setEmpates($var){
            $this -> empates = $var;
        }

        //Construtor
        public function __construct($n, $na, $i, $al, $pes, $cat, $vic, $loss, $draw)
        {
            $this -> nome = $n;
            $this -> nacionalidade = $na;
            $this -> idade = $i;
            $this -> altura = $al;
            $this -> peso = $pes;
            $this -> categoria = $cat;
            $this -> vitorias = $vic;
            $this -> derrotas = $loss;
            $this -> empates = $draw;
        }

        //Metodos
        public function Apresentar(){

        }
        public function Status(){
            
        }
        public function GanharLuta(){
            
        }
        public function PerderLuta(){
            
        }
        public function EmpatarLuta(){
            
        }

    }
?>