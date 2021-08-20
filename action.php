<?php
include_once('class/Aposta.php');
include_once('class/Apostador.php');
include_once('class/Bolao.php');
include_once('class/Partida.php');
include_once('class/Ranking.php');
include_once('class/Rodada.php');
include_once ('class/Ferramentas.php');

global $polinomio;
global $serializacao;

action();
function action(){
    $acao = isset($_POST['action'])?$_POST['action']:false;
    
    
    if($acao == 'criarBolao'){
        criarbolao();
    };
}


function criarBolao(){
    $nome = isset($_POST['nome'])?$_POST['nome']:0;
    $premio = isset($_POST['premio'])?$_POST['premio']:0;
    $bolao = new Bolao($nome, $premio);
    $rodada = new Rodada();
    
    $ap1Nome =isset($_POST["ap1"])?$_POST['ap1']:0;
    $ap1 = new Apostador($ap1Nome);

    $ap2Nome =isset($_POST["ap2"])?$_POST['ap2']:0;
    $ap2 = new Apostador($ap2Nome);

    $ap3Nome =isset($_POST["ap3"])?$_POST['ap3']:0;
    $ap3 = new Apostador($ap3Nome);

    $ap4Nome =isset($_POST["ap4"])?$_POST['ap4']:0;
    $ap4 = new Apostador($ap4Nome);

    $bolao->addApostador($ap1);
    $bolao->addApostador($ap2);
    $bolao->addApostador($ap3);
    $bolao->addApostador($ap4);

    $jogo1 = [isset($_POST["j1t1"])?$_POST['j1t1']:0 , isset($_POST["j1t2"])?$_POST['j1t2']:0];
    $jogo2 = [isset($_POST["j2t1"])?$_POST['j2t1']:0 , isset($_POST["j2t2"])?$_POST['j2t2']:0];
    $jogo3 = [isset($_POST["j3t1"])?$_POST['j3t1']:0 , isset($_POST["j3t2"])?$_POST['j3t2']:0];
    
    $partidas = [$jogo1,$jogo2, $jogo3];
    $bolao->setPartidas($partidas);

    $functions = new Ferramentas();
    if($functions->salva("bolao_serializado",$bolao)){
      
       
        echo ("<script>
        window.location.href = 'screens/aposta.php';
        </script>");
    };

    
};












?>