<?php 
    abstract class Pessoa {
        //Atributos
        protected $nome;
        protected $idade;
        protected $sexo;

        //Metodos
        public final function FazerAniversario(){
            $this -> idade ++;
        }

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