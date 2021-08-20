<?php
include_once('../class/Ferramentas.php');
include_once('../class/Aposta.php');
include_once('../class/Bolao.php');
include_once('../class/Apostador.php');
include_once('../class/Partida.php');
include_once('../class/Ranking.php');
include_once('../class/Rodada.php');

$functions = new Ferramentas();
$bolao = $functions->leitura("../bolao_serializado");
$rodada = $bolao->getRodada();
$times = $bolao->getPartidas();
$participantes = $bolao->getApostadores();

$partida1 = new Partida(
    $times[0][0],
    $times[0][1],
    isset($_POST['j1t1']) ? $_POST['j1t1'] : 0,
    isset($_POST['j1t2']) ? $_POST['j1t2'] : 0
);

$partida2 = new Partida(
    $times[1][0],
    $times[1][1],
    isset($_POST['j2t1']) ? $_POST['j2t1'] : 0,
    isset($_POST['j2t2']) ? $_POST['j2t2'] : 0
);

$partida3 = new Partida(
    $times[2][0],
    $times[2][1],
    isset($_POST['j3t1']) ? $_POST['j3t1'] : 0,
    isset($_POST['j3t2']) ? $_POST['j3t2'] : 0
);

$rodada->setResultado([$partida1, $partida2, $partida3]);

//calcula os pontos dos jogadores
for ($i = 1; $i < 5; $i++) {
    $participantes[$i]->setPontos($rodada->pontuacao($i, $rodada->getApostas()));
    $bolao->setApostador($i, $participantes[$i]);
}

$arr = [
    $participantes[1]->getNome() => $participantes[1]->getPontos(),
    $participantes[2]->getNome() => $participantes[2]->getPontos(),
    $participantes[3]->getNome() => $participantes[3]->getPontos(),
    $participantes[4]->getNome() => $participantes[4]->getPontos()
];

rsort($arr);

$nomes = [];

foreach ($arr as $key => $value) {
    for ($i = 1; $i < 5; $i++) {
        if ($value == $participantes[$i]->getPontos()) {
            if (!in_array("$participantes[$i]->getNome()", $nomes)) {
                array_push($nomes, $participantes[$i]->getNome());
            }
        }
    }
}

$ranking = new Ranking($nomes, $arr);

$bolao->setRanking($ranking);

if ($bolao->setRodada($rodada)) {
    if ($functions->salva("../bolao_serializado", $bolao)) {
        echo ("<script>
             window.location.href = 'bolaoInicial.php';
             </script>");
    };
};
