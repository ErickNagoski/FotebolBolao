<?php
class Apostador{
    private $nome;

    private $pontos = 0;

    function __construct($nome){
        $this->nome= $nome;
 
    }

   public function getNome(){
       
        return $this->nome;
    }   

    function setNome(String $value){
        $this->nome = $value;
    }

    
   public  function getPontos(){
        return $this->pontos;
    }

    public function setPontos(int $value){
            $this->pontos = $value;
            return true;
  
    }

   public function zerarPontos(){
        try {
            $this->pontos=0;
            return true;
        } catch (\Throwable $th) {
            return false;
        }
    }

    public function escreve(){
        echo $this->nome;
    }


    function __toString()
    {
        return  strval( $this->pontos);
    }





}



?>