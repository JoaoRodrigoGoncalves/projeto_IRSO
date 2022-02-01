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
                        <a class="nav-link" id="sensor_3" href="./sensor.php?nome=teste">Sensor 3</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="sensor_4" href="./sensor.php?nome=teste">Sensor 4</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="sensor_5" href="./sensor.php?nome=teste">Sensor 5</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="sensor_6" href="./sensor.php?nome=teste">Sensor 6</a>
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
                        Sensor 3
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Estado</li>
                        <li class="list-group-item">Valor</li>
                        <li class="list-group-item">Última Atualização</li>
                    </ul>
                    <div class="card-body">
                        <a href="./sensor.php" class="card-link">Detalhes</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 mt-2 text-center">
                <div class="card">
                    <div class="card-header text-center">
                        Sensor 4
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Estado</li>
                        <li class="list-group-item">Valor</li>
                        <li class="list-group-item">Última Atualização</li>
                    </ul>
                    <div class="card-body">
                        <a href="./sensor.php" class="card-link">Detalhes</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 mt-2 text-center">
                <div class="card">
                    <div class="card-header text-center">
                        Sensor 5
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Estado</li>
                        <li class="list-group-item">Valor</li>
                        <li class="list-group-item">Última Atualização</li>
                    </ul>
                    <div class="card-body">
                        <a href="./sensor.php" class="card-link">Detalhes</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 mt-2 text-center">
                <div class="card">
                    <div class="card-header text-center">
                        Sensor 6
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Estado</li>
                        <li class="list-group-item">Valor</li>
                        <li class="list-group-item">Última Atualização</li>
                    </ul>
                    <div class="card-body">
                        <a href="./sensor.php" class="card-link">Detalhes</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col m-2 text-center">
                <a href="enviarficheiros.html">Enviar ficheiro</a>
            </div>
            <div class="col-8 m-2">
                <div class="text-center">
                    <?php echo "<img src='images/sample.jpg?id=".time()."'" ?>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="./js/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./js/script.js"></script>
</body>

</html>