
<?php
include_once("Aposta.php");
include_once("Ranking.php");
include_once("Partida.php");

class Rodada
{
    private  $apostas = array(4);
    //apostas dos 4 jogadores
    private $resultado = array(3);

    public function __construct()
    {
        $this->resultado = [new Partida("", "", 0, 0), new Partida("", "", 0, 0), new Partida("", "", 0, 0)];
    }

    public function addAposta(Aposta $aposta)
    { //add a aposta de cada jogador, com os 3 palpites
        array_push($this->apostas, $aposta);
    }

    public function getApostas()
    {
        return $this->apostas;
    }

    public function getResultado()
    {
        return $this->resultado;
    }
    public function setResultado(array $value)
    {
        $this->resultado = $value;
    }

    function pontuacao($cod,$aposta)
    {
        
        $palpites = $aposta[$cod]->getPalpites();
        $soma = 0;

        for ($i = 0; $i < 3; $i++) {
            $soma = $soma +
                $this->acertouResultado($palpites[$i]->getGolsTimeA(), $palpites[$i]->getGolsTimeB(), $i);
        }
        return $soma;
    }


    function acertouResultado($golsA, $golsB, $i)
    {
        $soma = 0;
        $resultado = $this->resultado[$i];
        $vencedorResultado = $this->vencedor($resultado->getGolsTimeA(), $resultado->getGolsTimeB());
        $vencedorPalpite = $this->vencedor($golsA, $golsB);

        //acertou resultado
        if ($vencedorPalpite == $vencedorResultado) {
            $soma = $soma + 5;
        }

        //acertou placar
        if ($golsA == $resultado->getGolsTimeA()) {
            if ($golsB == $resultado->getGolsTimeB()) {
                $soma = $soma + 5;
            }
        }

        // se o vencedor foi o time A
        if ($vencedorResultado == "timeA") {
            //se acertou os gols do vencedor
            if ($golsA == $resultado->getGolsTimeA()) {
                $soma = $soma + 3;
                //se acertou os gols do perdedor
                if ($golsB = $resultado->getGolsTimeB()) {
                    $soma = $soma + 2;
                }
            }
        }
        // se o vencedor foi o time B
        if ($vencedorResultado == "timeB") {
            //se acertou os gols do vencedor
            if ($golsB == $resultado->getGolsTimeB()) {
                $soma = $soma + 3;
                //se acertou os gols do perdedor
                if ($golsA = $resultado->getGolsTimeA()) {
                    $soma = $soma + 2;
                }
            }
        }

        return $soma;
    }

    function vencedor($golsA, $golsB)
    {
        if ($golsA == $golsB) {
            return "empate";
        } else if ($golsA > $golsB) {
            return "timeA";
        } else if ($golsB > $golsA) {
            return "timeB";
        }
    }
}

?>

