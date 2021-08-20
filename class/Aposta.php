<?php
include_once("Apostador.php");
include_once("Partida.php");

class Aposta{
    private Apostador $apostador;
    private  $palpites = array(3);

    public function __construct(Apostador $apostador)
    {
        $this->apostador = $apostador;
    }

    public function getApostador(){
        return $this->Apostador;
    }
    public function getNomeApostador(){
        return $this->apostador->getNome();
    }
    public function setApostador(Apostador $value){
        $this->apostador = $value;
    }

    public function getPalpites(){
        return $this->palpites;
    }
    public function setPalpites(array $value){
        $this->palpites = $value;
    }

    public function addPalpite(Partida $value){
        if (count($this->palpites <= 3)) { // maximo de 3 palpites por jogador. 
            array_push($this->palpites, $value);
            return true;
        }
        return false;
    }



}

?>