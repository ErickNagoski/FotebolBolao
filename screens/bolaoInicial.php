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
global $times;
global $resultado;
global $ranking;
global $premio;
$arquivo = '../bolao_serializado';
$functions = new Ferramentas();
$GLOBALS['bolao'] = $functions->leitura($arquivo);
$apostas = $GLOBALS['bolao']->getRodada()->getApostas();
$GLOBALS['participantes'] = $GLOBALS['bolao']->getApostadores();
$GLOBALS['times'] = $GLOBALS['bolao']->getPartidas();
$GLOBALS['resultado'] = $GLOBALS['bolao']->getRodada()->getResultado();
$GLOBALS['ranking'] = $GLOBALS['bolao']->getRanking();
$GLOBALS['premio'] = $GLOBALS['bolao']->getPremio();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $GLOBALS['bolao']->getNome()?></title>

    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/Ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="../css/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
</head>

<body class="grey">
    <header class="main-header">

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
        </nav>
    </header>
    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-xs-5">
                <!-- small box -->
                <div class="small-box blue">
                    <div class="inner">
                        <p class="nomeApostador" "><?php echo $GLOBALS['participantes'][1]->getNome() ?></p>

                        <label class=" pontos ">Pontos: <?php echo $GLOBALS['participantes'][1]->getPontos() ?></label>
                    </div>
                  
                    <div class=" icon ">
                        <i class=" ion ion-person "></i>
                  </div>
                </div>
            </div>


            <!-- ./col -->
            <div class=" col-lg-3 col-xs-5 ">
                <!-- small box -->
                <div class=" small-box green ">
                    <div class=" inner ">
                        <p class=" nomeApostador " "><?php echo $GLOBALS['participantes'][2]->getNome() ?></p>

                        <p class=" pontos">Pontos: <?php echo $GLOBALS['participantes'][2]->getPontos() ?></p>
                    </div>
                    <div class="icon ">
                        <i class="ion ion-person "></i>
                    </div>
                </div>
            </div>

            <!-- ./col -->
            <div class="col-lg-3 col-xs-5 ">
                <!-- small box -->
                <div class="small-box yellow ">
                    <div class="inner ">
                        <p class="nomeApostador" "><?php echo $GLOBALS['participantes'][3]->getNome() ?></p>

                        <p class=" pontos ">Pontos: <?php echo $GLOBALS['participantes'][3]->getPontos() ?></p>
                    </div>
                    <div class=" icon ">
                        <i class=" ion ion-person "></i>
                    </div>
                </div>
            </div>
            
            
            <!-- ./col -->
            <div class=" col-lg-3 col-xs-5 ">
                <!-- small box -->
                <div class=" small-box red ">
                    <div class=" inner ">
                        <p class=" nomeApostador " "><?php echo $GLOBALS['participantes'][4]->getNome() ?></p>

                        <p class="pontos">Pontos: <?php echo $GLOBALS['participantes'][1]->getPontos() ?></p>
                    </div>
                    <div class="icon ">
                        <i class="ion ion-person "></i>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- ./col -->
        </div>
        <!-- /.row -->

        <div class="row">

            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Resultados da rodada</div>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">Time</th>
                                    <th scope="col">Gols</th>
                                    <th scope="col">Gols</th>
                                    <th scope="col">Time</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><?php echo $GLOBALS['resultado'][0]->getTimeA(); ?></td>
                                    <td><?php echo $GLOBALS['resultado'][0]->getGolsTimeA(); ?></td>
                                    <td><?php echo $GLOBALS['resultado'][0]->getGolsTimeB(); ?></td>
                                    <td><?php echo $GLOBALS['resultado'][0]->getTimeB(); ?></td>

                                </tr>
                                <tr>
                                <td><?php echo $GLOBALS['resultado'][1]->getTimeA(); ?></td>
                                    <td><?php echo $GLOBALS['resultado'][1]->getGolsTimeA(); ?></td>
                                    <td><?php echo $GLOBALS['resultado'][1]->getGolsTimeB(); ?></td>
                                    <td><?php echo $GLOBALS['resultado'][1]->getTimeB(); ?></td>
                                </tr>
                                <tr>
                                <td><?php echo $GLOBALS['resultado'][2]->getTimeA(); ?></td>
                                    <td><?php echo $GLOBALS['resultado'][2]->getGolsTimeA(); ?></td>
                                    <td><?php echo $GLOBALS['resultado'][2]->getGolsTimeB(); ?></td>
                                    <td><?php echo $GLOBALS['resultado'][2]->getTimeB(); ?></td>

                                </tr>
                            </tbody>
                        </table>
                        <a href="lancarResultados.php">Lançar Resultados</a>
                    </div>
                </div>
            </div>


            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Ranking</div>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nome</th>
                                    <th scope="col">Pontos</th>
                                    <th scope="col">Prêmio</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td><?php echo $GLOBALS['ranking']->getNomes()[0]; ?></td>
                                    <td><?php echo $GLOBALS['ranking']->getpontos()[0]; ?></td>
                                    <td><?php echo $GLOBALS['premio']*0.45 ?></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td><?php echo $GLOBALS['ranking']->getNomes()[1]; ?></td>
                                    <td><?php echo $GLOBALS['ranking']->getpontos()[1]; ?></td>
                                    <td><?php echo $GLOBALS['premio']*0.25 ?></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td><?php echo $GLOBALS['ranking']->getNomes()[2]; ?></td>
                                    <td><?php echo $GLOBALS['ranking']->getpontos()[2]; ?></td>
                                    <td><?php echo $GLOBALS['premio']*0.10 ?></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td><?php echo $GLOBALS['ranking']->getNomes()[3]; ?></td>
                                    <td><?php echo $GLOBALS['ranking']->getpontos()[3]; ?></td>
                                    <td>0</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>



            </div>
           
</body>
<!-- jQuery 3 -->
<script src="./bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="./bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Slimscroll -->
<script src="./bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="./bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="./dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="./dist/js/demo.js"></script>


</html>'