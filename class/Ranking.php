<?php
include_once("Apostador.php");
class ranking{
   private $nomes;
   private $pontos;
    function __construct($n, $p){
        $this->nomes = $n;
        $this->pontos = $p;        
    }

    function getNomes(){
        return $this->nomes;
    }

    function getPontos(){
        return $this->pontos;
    }

}
