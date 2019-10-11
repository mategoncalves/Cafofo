<?php

  class Pessoa{
    private $altura;
    private $idade;
    private $peso;

    public function getPeso(){return $this->peso;}
    public function getAltura(){return $this->altura;}
    public function getIdade(){return $this->idade;}

    public function setPeso($p){$this->peso = $p;}
    public function setAltura($a){$this->altura = $a;}
    public function setIdade($i){$this->idade = $i;}

    public function __Construct($altura,$peso,$idade){
      $this->peso = $peso;
      $this->altura = $altura;
      $this->idade = $idade;
    }

    public function __toString(){
      $str = "Peso: ".$this->peso."<br>Altura: ".$this->altura."<br>Idade: ".$this->idade;
      return $str;
    }
  }

?>