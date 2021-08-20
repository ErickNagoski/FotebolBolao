<?php
 include_once('class/Ferramentas.php');
 include_once('class/Aposta.php');
 include_once('class/Bolao.php');
 include_once('class/Apostador.php');
 include_once('class/Partida.php');
 include_once('class/Ranking.php');
 include_once('class/Rodada.php');

 global $times;
 $functions = new Ferramentas();
 $bolao = $functions->leitura('bolao_serializado');
 $apostadores = $bolao->getApostadores();
 $GLOBALS['times'] = $bolao->getPartidas();
 $rodada = new Rodada();

//adiciona a aposta apostador 1 na rodada
//print_r(criaAposta($apostadores[1],2));
$rodada->addAposta(criaAposta($apostadores[1],1));
//adiciona a aposta apostador 2 na rodada
$rodada->addAposta(criaAposta($apostadores[2],2));
//adiciona a aposta apostador 3 na rodada
$rodada->addAposta(criaAposta($apostadores[3],3));
//adiciona a aposta apostador 4 na rodada
$rodada->addAposta(criaAposta($apostadores[4],4));

if($bolao->setRodada($rodada)){
    if($functions->salva("bolao_serializado",$bolao)){
        echo ("<script>
                window.alert('Bolão criado com sucesso');
                window.location.href = 'screens/bolaoInicial.php';
                </script>");
            };
        
}

function criaAposta($apostador,$n){
    $times = $GLOBALS['times'];;

    $aposta = new Aposta($apostador);
    $palpite1 = new Partida($times[0][0], $times[0][1], isset($_POST['a'.$n.'j1t1'])?$_POST['a'.$n.'j1t1']:0, isset($_POST['a'.$n.'j1t1'])?$_POST['a'.$n.'j1t1']:0);
    $palpite2 = new Partida($times[1][0], $times[1][1], isset($_POST['a'.$n.'j2t1'])?$_POST['a'.$n.'j2t1']:0, isset($_POST['a'.$n.'j2t2'])?$_POST['a'.$n.'j2t2']:0);
    $palpite3 = new Partida($times[2][0], $times[2][1], isset($_POST['a'.$n.'j3t1'])?$_POST['a'.$n.'j3t1']:0, isset($_POST['a'.$n.'j3t2'])?$_POST['a'.$n.'j3t2']:0);
    //adiciona os palpites na aposta
    $aposta->setPalpites([$palpite1,$palpite2,$palpite3]);
    return $aposta;
} 

?>