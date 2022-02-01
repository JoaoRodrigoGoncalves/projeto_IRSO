<!DOCTYPE html>
<html lang="pt">
    <head>
        <title>Padaria Inteligente - Detalhes</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
        <link rel="icon" href="./images/logo.png" />
        <meta http-equiv="refresh" content="15" />
    </head>
    <body>
        <?php
            if (!isset($_GET['nome'])) {
                header("Location: ./"); // voltar para trás caso não exista nenhum sensor especificado
            }

            require("./funcao_calculo.php");

            /* Nome Sensores */

            $nome_sensor['detetor_fumo'] = "Detetor de Incêndio";
            $nome_sensor['temperatura'] = "Ventilação";
            $nome_sensor['ralo_agua'] = "Ralo contra Inundação";
            $nome_sensor['movimento'] = "Sensor Movimento";
            $nome_sensor['luz'] = "Iluminação";
            $nome_sensor['campainha'] = "Campainha";

            /* Unidades por Sensor*/

            //       Nome do Sensor
            $unidade['detetor_fumo'] = "%";
            $unidade['temperatura'] = "Cº";
            $unidade['ralo_agua'] = "cm";
            $unidade['movimento'] = " (0 - LOW / 1 - HIGH)";
            $unidade['luz'] = " (0 - LOW / 1 - HIGH)";
            $unidade['campainha'] = " (0 - LOW / 1 - HIGH)";



            /* Estados dos Sensores */

            $estado_sensor['detetor_fumo']['trip_value'] = 39;
            $estado_sensor['detetor_fumo']['on'] = "<span style=\"color: red;\">Alarme Ativo</span>";
            $estado_sensor['detetor_fumo']['off'] = "<span style=\"color: green;\">A monitorizar...</span>";

            $estado_sensor['temperatura']['trip_value'] = 30;
            $estado_sensor['temperatura']['on'] = "<span style=\"color: green;\">Ligado</span>";
            $estado_sensor['temperatura']['off'] = "<span style=\"color: red;\">Desligado</span>";

            $estado_sensor['ralo_agua']['trip_value'] = 4;
            $estado_sensor['ralo_agua']['on'] = "<span style=\"color: green;\">Aberto</span>";
            $estado_sensor['ralo_agua']['off'] = "<span style=\"color: red;\">Fechado</span>";

            $estado_sensor['movimento']['trip_value'] = 0; //verificado como maior que 0 (bool)
            $estado_sensor['movimento']['on'] = "<span style=\"color: red;\">Movimento Detetado</span>";
            $estado_sensor['movimento']['off'] = "<span style=\"color: green;\">A monitorizar...</span>";

            $estado_sensor['luz']['trip_value'] = 0; //verificado como maior que 0 (bool)
            $estado_sensor['luz']['on'] = "<span style=\"color: green;\">Ligada</span>";
            $estado_sensor['luz']['off'] = "<span style=\"color: red;\">Desligada</span>";

            $estado_sensor['campainha']['trip_value'] = 0; //verificado como maior que 0 (bool)
            $estado_sensor['campainha']['on'] = "<span style=\"color: blue;\">A tocar...</span>";
            $estado_sensor['campainha']['off'] = "<span style=\"color: green;\">À espera</span>";
        ?>
        <nav class="navbar navbar-dark bg-primary navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="./">
                    <img src="./images/logo.png" alt="Logotipo da Padaria Inteligente" height="50" width="50" class="d-inline-block" />
                    Padaria Inteligente
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                    <li class="nav-item">
                            <a class="nav-link" href="./">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="sensor_detetor_fumo" href="./sensor.php?nome=detetor_fumo">Detetor de Incêndio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="sensor_temperatura" href="./sensor.php?nome=temperatura">Ventilação</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="sensor_ralo_agua" href="./sensor.php?nome=ralo_agua">Ralo contra Inundação</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="sensor_movimento" href="./sensor.php?nome=movimento">Sensor Movimento</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="sensor_luz" href="./sensor.php?nome=luz">Iluminação</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="sensor_campainha" href="./sensor.php?nome=campainha">Campainha</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container mt-2">
            <div class="row">
                <div class="col border m-2" id="estado_sistema">
                    <div class="row">
                        <div class="col">
                            <div class="text-center">
                                <h1 class="display-1"><i id="icon_estado_sistema"></i></h1>
                            </div>
                        </div>
                        <div class="col-10">
                            <p class="lead" id="titulo_estado_sistema">Estado do sistema.</p>
                            <small id="descricao_estado_sistema">Mensagem</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-5">
                    <div class="card">
                        <div class="card-header text-center"><?= $nome_sensor[$_GET["nome"]] ?></div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><?= file_get_contents("./dados/" . $_GET["nome"] . "/valor.txt") > $estado_sensor[$_GET['nome']]['trip_value'] ? $estado_sensor[$_GET['nome']]['on'] : $estado_sensor[$_GET['nome']]['off'] ?></li>
                            <li class="list-group-item">Valor: <?= file_get_contents("./dados/" . $_GET["nome"] . "/valor.txt") ?><?= $unidade[$_GET['nome']] ?></li>
                            <li class="list-group-item">Última Atualização: <?= file_get_contents("./dados/" . $_GET["nome"] . "/hora.txt") ?></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-sm-7">
                    <div class="card">
                        <div class="card-header">Histórico do Sensor</div>
                        <ul class="list-group list-group-flush" style="max-height: 54vh; overflow-y: scroll;">
                            <?php
                                $list = file_get_contents("./dados/" . $_GET["nome"] . "/log.txt");
                                $dados = explode("\n", $list);
                                if(count($dados) > 1)
                                {
                                    foreach (array_reverse($dados) as $key => $linha) { 
                                        if (!empty($linha) && ($key != count($dados)-1)) { // primeira linha é uma quebra de linha
                                            list($data_hora, $valor) = explode(";", $linha);
                                            echo "<li class=\"list-group-item\">[" . $data_hora . "] Valor: " . $valor . $unidade[$_GET['nome']] . "</li>";
                                        }
                                    }
                                }
                                else
                                {
                                    echo "<li class=\"list-group-item text-center\">Sem informação a mostrar</li>";
                                }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
            <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
                <div class="col-md-4 d-flex align-items-center">
                    <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                        <svg class="bi" width="30" height="24">
                            <use xlink:href="#bootstrap"></use>
                        </svg>
                    </a>
                    <span class="text-muted">© 2022 Bruno Silva, João Gonçalves, Tiago Amaro</span>
                </div>

                <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                    <li class="ms-3">
                        <a class="text-muted" href="https://github.com/JoaoRodrigoGoncalves/projeto_IRSO">
                            <i class="bi bi-github"></i>    
                        </a>
                    </li>
                </ul>
            </footer>
        </div>
        <script src="./js/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="./js/script.js"></script>
        <script>
            $(document).ready(() => {
                $("#sensor_<?= $_GET['nome'] ?>").addClass("active").attr("aria-current", "page");
                acionarEstadoSistema(<?= calcularEstadoSistema() ?>);
            });
        </script>
    </body>
</html>