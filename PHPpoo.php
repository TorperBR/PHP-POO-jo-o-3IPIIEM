<?php
//Exercício 01
    class Invoice{
        private $numeroFatura;
        private $desItem;
        private $qtdItem;
        private $preco;

        public function __construct($par1, $par2, $par3, $par4){
            $this-> numeroFatura = $par1;
            $this-> desItem = $par2;
                if($par3 <= 0 ){
                    $this->qtdItem = 0;
                }

                else{
                    $this->qtdItem = $par3;
                }

                if($par4 <= 0 ){
                    $this->preco = 0.0;
                }

                else{
                    $this->preco = $par4;
                }
        }

        public function __set($atributo, $value){
            $this->$atributo = $value;
        }
        
        public function __get($atributo){
            return $this->$atributo;
        }

        public function getInvoiceAmount() {
            return ($this->preco * $this->qtdItem);
        }
    }

//Exercício 02
    class Empregado{
        private $nome;
        private $sobrenome;
        private $salario;
    
        public function empregado($salario, $nome = "Sem Nome", $sobrenome = "Sem Sobrenome"){
            $this->setNome($nome);
            $this->setSobrenome($sobrenome);
            $this->salario($salario);
        }

        public function salarioIncrease(){
            $this->salario += $this->salario * 10 / 100; 
        }
    
        public function getNome(){
            return $this->nome; 
        }
    
        public function setNome($nome){
            $this->nome = $nome;
        }
    
        public function getSobrenome(){
            return $this->sobrenome;
        }
    
        public function setSobrenome($sobrenome){
            $this->sobrenome = $sobrenome;
        }
    
        public function getSalario(){
            return $salario;
        }
    
        public function setSalario($salario){
            $this->salario = $salario < 0 ? 0 : $salario;
        }
    }

//Exercício 03
    class Círculo{
        private $x;
        private $y;
        private $raio;

        public function circulo($raio, $x = 0, $y = 0 ){
            $this->x = $x;
            $this->y = $y;
            $this->setRaio($raio);
        }
    
        public function area(){
            return pi() * ($this->raio * 2);
        }

        public function move($point){
            $this->x = $point->getX();
            $this->y = $point->getY();
        }

        public function increase($value){
            $this->setRaio($this->raio + $value);
        }

        public function decrease($value){
            $this->setRaio($this->raio - $value);
        }

        public function getX(){
            return $this->x;
        }

        public function setX($x){
            $this->x = $x;
        }

        public function getY(){
            return $this->y;
        }

        public function setY($x){
            $this->y = $y;
        }

        public function getRaio(){
            return $this->raio;
        }

        public function setRaio($raio){
            $this->raio = $raio < 0 ? 0 : $raio;
        }
    }
?>