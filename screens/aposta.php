<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
</head>

<body>
<form method="POST" action="../apostar.php">
    <div class="aposta-box">
        <div class="row" style="display: flex;">
            <div class="aposta-box blue w300">
                <!-- small box -->
                <div class="small-box ">
                    <div class="inner">
                        <p class="nomeApostador center"><?php echo $GLOBALS['participantes'][1]->getNome() ?></p>

                    </div>
                    <div class=" center">

                        <table class="aposta-table">
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
                                    <td><?php echo $GLOBALS['partidas'][0][0] ?></td>
                                    <td><input class="aposta-input" type="number" name="a1j1t1" /></td> <!---a1j1t1" = Apostador 1 Jogo 1 Time 1-->
                                    <td>x</td>
                                    <td><input class="aposta-input" type="number" name="a1j1t2"/></td>
                                    <td><?php echo $GLOBALS['partidas'][0][1] ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo $GLOBALS['partidas'][1][0] ?></td>
                                    <td><input class="aposta-input" type="number" name="a1j2t1"/></td>
                                    <td>x</td>
                                    <td><input class="aposta-input" type="number" name="a1j2t2"/></td>
                                    <td><?php echo $GLOBALS['partidas'][1][1] ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo $GLOBALS['partidas'][2][0] ?></td>
                                    <td><input class="aposta-input" type="number" name="a1j3t1"/></td>
                                    <td>x</td>
                                    <td><input class="aposta-input" type="number" name="a1j3t2"/></td>
                                    <td><?php echo $GLOBALS['partidas'][2][1] ?></td>
                                </tr>
                            </tbody>
                        </table>

                    </div>






                    <!-- /.box -->
                </div>
            </div>


            <!-- ./col -->
            <div class="aposta-box green w300">
                <!-- small box -->
                <div class=" small-box  ">
                    <div class=" inner ">
                        <p class=" nomeApostador  center" "><?php echo $GLOBALS['participantes'][2]->getNome() ?></p>
                    </div>
                <div class=" center">

                        <table class="aposta-table">
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
                                    <td><?php echo $GLOBALS['partidas'][0][0] ?></td>
                                    <td><input class="aposta-input" type="number" name="a2j1t1" /></td>
                                    <td>x</td>
                                    <td><input class="aposta-input" type="number" name="a2j1t2"/></td>
                                    <td><?php echo $GLOBALS['partidas'][0][1] ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo $GLOBALS['partidas'][1][0] ?></td>
                                    <td><input class="aposta-input" type="number" name="a2j2t1"/></td>
                                    <td>x</td>
                                    <td><input class="aposta-input" type="number" name="a2j2t2"/></td>
                                    <td><?php echo $GLOBALS['partidas'][1][1] ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo $GLOBALS['partidas'][2][0] ?></td>
                                    <td><input class="aposta-input" type="number" name="a2j3t1"/></td>
                                    <td>x</td>
                                    <td><input class="aposta-input" type="number" name="a2j3t2"/></td>
                                    <td><?php echo $GLOBALS['partidas'][2][1] ?></td>
                                </tr>
                            </tbody>
                        </table>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="aposta-box">
        <div class="row" style="display: flex;">
            <!-- ./col -->
            <div class=" aposta-box yellow w300">
                <!-- small box -->
                <div class="small-box  ">
                    <div class="inner ">
                        <p class="nomeApostador center"><?php echo $GLOBALS['participantes'][3]->getNome() ?></p>

                    </div>
                    <div class=" center">

                        <table class="aposta-table">
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
                                    <td><?php echo $GLOBALS['partidas'][0][0] ?></td>
                                    <td><input class="aposta-input" type="number" name="a3j1t1"/></td>
                                    <td>x</td>
                                    <td><input class="aposta-input" type="number" name="a3j1t2"/></td>
                                    <td><?php echo $GLOBALS['partidas'][0][1] ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo $GLOBALS['partidas'][1][0] ?></td>
                                    <td><input class="aposta-input" type="number" name="a3j2t1"/></td>
                                    <td>x</td>
                                    <td><input class="aposta-input" type="number" name="a3j2t2"/></td>
                                    <td><?php echo $GLOBALS['partidas'][1][1] ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo $GLOBALS['partidas'][2][0] ?></td>
                                    <td><input class="aposta-input" type="number" name="a3j3t1"/></td>
                                    <td>x</td>
                                    <td><input class="aposta-input" type="number" name="a3j3t2"/></td>
                                    <td><?php echo $GLOBALS['partidas'][2][1] ?></td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>


            <!-- ./col -->
            <div class=" w300 aposta-box red">
                <!-- small box -->
                <div class=" small-box ">
                    <div class=" inner ">
                        <p class=" nomeApostador center"><?php echo $GLOBALS['participantes'][4]->getNome() ?></p>

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
                                    <td><?php echo $GLOBALS['partidas'][0][0] ?></td>
                                    <td><input class="aposta-input" type="number" name="a4j1t1" /></td>
                                    <td>x</td>
                                    <td><input class="aposta-input" type="number" name="a4j1t2"/></td>
                                    <td><?php echo $GLOBALS['partidas'][0][1] ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo $GLOBALS['partidas'][1][0] ?></td>
                                    <td><input class="aposta-input" type="number" name="a4j2t1"/></td>
                                    <td>x</td>
                                    <td><input class="aposta-input" type="number" name="a4j2t2"/></td>
                                    <td><?php echo $GLOBALS['partidas'][1][1] ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo $GLOBALS['partidas'][2][0] ?></td>
                                    <td><input class="aposta-input" type="number" name="a4j3t1"/></td>
                                    <td>x</td>
                                    <td><input class="aposta-input" type="number" name="a4j3t2"/></td>
                                    <td><?php echo $GLOBALS['partidas'][2][1] ?></td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ./col -->
    <button class=" " value="realizar apostas" type="submit ">Realizar apostas</button>
    </div>
 
    </div>
    <!-- /.row -->
</form>

</body>

</html>