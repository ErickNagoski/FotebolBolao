<?php
include_once("Apostador.php");
include_once("Rodada.php");
class Bolao{
    private $nome = "Bolão";
    private $ranking ;
    private $rodada;
    private $apostadores = array(4);
    private $partidas = array();
    private $premio;

    public function __construct($nome, $premio){
        $this->nome = $nome;
        $this->ranking = new Ranking(["","","",""],[0,0,0,0]);
        $this->rodada = new Rodada();
        $this->premio = $premio;
    }

    function setBolao($value){
        $this->nome = $value->getNome();
        $this->ranking = $value->getRanking();
        $this->rodada = $value->getRodada();
        $this->apostadores = $value->getApostadores();
    }

    public function getNome(){
        return $this->nome;
    }
    public function setNome($value){
        $this->nome = $value;
    }

    public function addApostador(Apostador $value){
     try {
        array_push($this->apostadores, $value);
        return true;
     } catch (\Throwable $th) {
         return  false;
     }
    }

    public function getRodada(){
        return $this->rodada;
    } 
    public function setRodada(Rodada $value){
        $this->rodada = $value;
        return true;
    }

    public function adicionaRodada(Rodada $value){
        array_push($this->rodadas, $value);
    }

    public function getRanking(){
     
        return $this->ranking;
    }
    public function setRanking(Ranking $value){
        $this->ranking = $value;
    }

    public function getApostadores(){
        return $this->apostadores;
    }

    public function setApostadores(array $value){
        $this->apostadores = $value;
        return true;
    }

    public function setApostador($pos, Apostador $a){
        $this->apostadores[$pos] = $a;
    }

    public function getPartidas(){
        return $this->partidas;
    }

    public function setPartidas(array $value){
        $this->partidas = $value;
    }

    public function addPartida(array $value){
        array_push($this->partidas, $value);
    }

    public function getPremio(){
        return $this->premio;
    }

    public function setpremio($value){
        $this->premio = $value;
    }
    



}


?>