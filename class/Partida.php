<?php
class  Partida{
    private $timeA;
    private $timeB;
    private $golsA;
    private $golsB;

    function __construct($timeA, $timeB, $golsTimeA, $golsTimeB){
        $this->timeA = $timeA;
        $this->timeB = $timeB;
        $this->golsA = $golsTimeA;
        $this->golsB = $golsTimeB;
    }
    
    public function getTimeA(){
        return $this->timeA;
    }
    public function setTimeA(String $value){
        $this->timeA = $value;
    }

    public function getTimeB(){
        return $this->timeB;
    }
    public function setTimeB(String $value){
        $this->timeB = $value;
    }

    public function getGolsTimeA(){
        return $this->golsA;
    }
    public function setGolsTimeA(int $value){
        $this->golsA = $value;
    }

    public function getgolsTimeB(){
        return $this->golsB;
    }
    public function setgolsTimeB(int $value){
        $this->golsB = $value;
    }

    public function escreva(){
        echo "<html>
        <table>
            <tr>
                <td>".$this->timeA."</td>
                <td>".$this->golsA."</td>
                <td>".$this->golsB."</td>
                <td>".$this->timeB."</td>
            </tr>
        </table>
        </html>";
    }

    public function vencedor(){
        if($this->golsA > $this->golsB){
            return $this->getTimeA();
        }else if($this->golsB > $this->golsA){
            return $this->getTimeB();
        }else{
            return "empate";
        }
    }

    public function golsVencedor(){
        if($this->vencedor() == $this->timeA || $this->vencedor() == "empate"){
            return $this->golsA;
        }else{
            return $this->golsB;
        }
    }

    public function golsPerdedor(){
        if($this->golsVencedor() == $this->golsA){
            return $this->golsB;
        }else{
            return $this->golsA;
        }
    }

    public function placar(){
        $placar = [$this->golsA, $this->golsB];
        return $placar;

    }
}
