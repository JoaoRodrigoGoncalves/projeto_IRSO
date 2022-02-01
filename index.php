<!DOCTYPE html>
<html lang="pt">
    <head>
        <title>Padaria Inteligente - Painel de Controlo IOT</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
        <link rel="icon" href="./images/logo.png" />
        <meta http-equiv="refresh" content="15" />
    </head>
    <body>
        <?php require("./funcao_calculo.php"); ?>
        <nav class="navbar navbar-dark bg-primary navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="./">
                    <img src="./images/logo.png" alt="Logotipo da Padaria Inteligente" height="50" width="50" class="d-inline-block"/>
                    Padaria Inteligente
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="./">Inicio</a>
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
        <div class="container">
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
                <div class="col-12 col-sm-6 col-md-4 mt-2 text-center">
                    <div class="card">
                        <div class="card-header text-center">
                            Detetor de Incêndio
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><?= file_get_contents("./dados/detetor_fumo/valor.txt") > 39 ? "<span style=\"color: red;\">Ativo</span>" : "<span style=\"color: green;\">A monitorizar</span>" ?></li>
                            <li class="list-group-item">Nível de fumo: <?= file_get_contents("./dados/detetor_fumo/valor.txt") ?>%</li>
                            <li class="list-group-item"><?= file_get_contents("./dados/detetor_fumo/hora.txt") ?></li>
                        </ul>
                        <div class="card-body">
                            <a href="./sensor.php?nome=detetor_fumo" class="card-link">Detalhes</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 mt-2 text-center">
                    <div class="card">
                        <div class="card-header text-center">
                            Ventilação
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><?= file_get_contents("./dados/temperatura/valor.txt") > 30 ? "<span style=\"color: green;\">Ligado</span>" : "<span style=\"color: red;\">Desligado</span>" ?></li>
                            <li class="list-group-item">Temperatura: <?= file_get_contents("./dados/temperatura/valor.txt") ?>Cº</li>
                            <li class="list-group-item"><?= file_get_contents("./dados/temperatura/hora.txt") ?></li>
                        </ul>
                        <div class="card-body">
                            <a href="./sensor.php?nome=temperatura" class="card-link">Detalhes</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 mt-2 text-center">
                    <div class="card">
                        <div class="card-header text-center">
                            Ralo contra Inundação
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><?= file_get_contents("./dados/ralo_agua/valor.txt") > 4 ? "<span style=\"color: red;\">Aberto</span>" : "<span style=\"color: green;\">Fechado</span>" ?></li>
                            <li class="list-group-item">Nível da agua: <?= file_get_contents("./dados/ralo_agua/valor.txt") ?>cm</li>
                            <li class="list-group-item"><?= file_get_contents("./dados/ralo_agua/hora.txt") ?></li>
                        </ul>
                        <div class="card-body">
                            <a href="./sensor.php?nome=ralo_agua" class="card-link">Detalhes</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 mt-2 text-center">
                    <div class="card">
                        <div class="card-header text-center">
                            Sensor Movimento
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><?= file_get_contents("./dados/movimento/valor.txt") == 1 ? "<span style=\"color: red;\">Movimento detetado</span>" : "<span style=\"color: green;\">A monitorizar</span>" ?></li>
                            <li class="list-group-item"><?= file_get_contents("./dados/movimento/hora.txt") ?></li>
                        </ul>
                        <div class="card-body">
                            <a href="./sensor.php?nome=movimento" class="card-link">Detalhes</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 mt-2 text-center">
                    <div class="card">
                        <div class="card-header text-center">
                            Iluminação
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><?= file_get_contents("./dados/luz/valor.txt") == 1 ? "<span style=\"color: green;\">Ligado</span>" : "<span style=\"color: red;\">Desligado</span>" ?></li>
                            <li class="list-group-item"><?= file_get_contents("./dados/luz/hora.txt") ?></li>
                        </ul>
                        <div class="card-body">
                            <a href="./sensor.php?nome=luz" class="card-link">Detalhes</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 mt-2 text-center">
                    <div class="card">
                        <div class="card-header text-center">
                            Campainha
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><?= file_get_contents("./dados/campainha/valor.txt") == 1 ? "<span style=\"color: blue;\">A Tocar</span>" : "<span style=\"color: green;\">Pronta</span>" ?></li>
                            <li class="list-group-item"><?= file_get_contents("./dados/campainha/hora.txt") ?></li>
                        </ul>
                        <div class="card-body">
                            <a href="./sensor.php?nome=campainha" class="card-link">Detalhes</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-5 mt-2 text-center">
                    Última imagem captada pela camara de videovigilância.
                    <br>Última Atualização: <?= file_get_contents("./dados/camara/hora.txt") ?>
                </div>
                <div class="col-7 mt-2">
                    <div class="text-center">
                        <img src="./images/camara.jpg?t=<?= time() ?>" class="img-fluid rounded border border-dark p-2" alt="Fotografia capturada pela camara"/>
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
                acionarEstadoSistema(<?= calcularEstadoSistema() ?>);
            });
        </script>
    </body>
</html>