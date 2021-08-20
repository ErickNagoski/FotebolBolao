<?php
include_once('../class/Ferramentas.php');
include_once('../class/Aposta.php');
include_once('../class/Bolao.php');
include_once('../class/Apostador.php');
include_once('../class/Partida.php');
include_once('../class/Ranking.php');
include_once('../class/Rodada.php');

global $bolao;
global $participantes;
global $partidas;
$arquivo = '../bolao_serializado';
$functions = new Ferramentas();
$GLOBALS['bolao'] = $functions->leitura($arquivo);
$GLOBALS['participantes'] = $GLOBALS['bolao']->getApostadores();
$GLOBALS['partidas'] = $GLOBALS['bolao']->getPartidas();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
</head>

<body >
    <div class="aposta-box ">
        <form action="resultados.php" method="POST">
            <div class=" w300 aposta-box red">
                <!-- small box -->
                <div class=" small-box ">
                    <div class=" inner ">
                        <p class=" nomeApostador center">
                            Resultados
                        </p>

                    </div>
                    <div class=" ">

                        <table class="aposta-table ">
                            <thead>
                                <tr>
                                    <th scope="col">Time</th>
                                    <th scope="col">Gols</th>
                                    <th scope="col"></th>
                                    <th scope="col">Gols</th>
                                    <th scope="col">Time</th>

                                </tr>
                            <tbody>
                                <tr>
                                    <td>
                                        <?php echo $GLOBALS['partidas'][0][0] ?>
                                    </td>
                                    <td><input class="aposta-input" type="number" name="j1t1" /></td>
                                    <td>x</td>
                                    <td><input class="aposta-input" type="number" name="j1t2" /></td>
                                    <td>
                                        <?php echo $GLOBALS['partidas'][0][1] ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <?php echo $GLOBALS['partidas'][1][0] ?>
                                    </td>
                                    <td><input class="aposta-input" type="number" name="j2t1" /></td>
                                    <td>x</td>
                                    <td><input class="aposta-input" type="number" name="j2t2" /></td>
                                    <td>
                                        <?php echo $GLOBALS['partidas'][1][1] ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <?php echo $GLOBALS['partidas'][2][0] ?>
                                    </td>
                                    <td><input class="aposta-input" type="number" name="j3t1" /></td>
                                    <td>x</td>
                                    <td><input class="aposta-input" type="number" name="j3t2" /></td>
                                    <td>
                                        <?php echo $GLOBALS['partidas'][2][1] ?>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <button type="submit">Lançar</button>
        </form>
    </div>
    
</body>

</html>