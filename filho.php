<?php
  include 'pessoa.php';
  class filho extends Pessoa{
    private $timeDoCoracao;

    public function getTimeDoCoracao(){
      return $this->timeDoCoracao;
    }
    public function setTimeDoCoracao($t){$this->timeDoCoracao = $t;}

    public function __Construct($a,$p,$i){
      Pessoa::__Construct($a,$p,$i);
    }

    public function __toString(){
      $str = "<br><br>Classe filha<br> ".Pessoa::__toString()."<br>Time Do Coracao: ".$this->timeDoCoracao;
      return $str;
    }
  }

?>