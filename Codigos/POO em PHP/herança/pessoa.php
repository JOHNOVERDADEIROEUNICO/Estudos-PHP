<?php 
    class Pessoa{
        //Atributos
        private $nome;
        private $idade;
        private $sexo;

        //Getters
        public function getNome(){
            return $this -> nome;
        }
        public function getIdade(){
            return $this -> idade;
        }
        public function getSexo(){
            return $this -> sexo;
        }

        //Setters
        public function setNome($var){
            $this -> nome = $var;
        }
        public function setIdade($var){
            $this -> idade = $var;
        }
        public function setSexo($var){
            $this -> sexo = $var;
        }

    }
?>