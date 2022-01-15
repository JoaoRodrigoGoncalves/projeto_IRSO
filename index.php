<!DOCTYPE html>
<html lang="pt">

<head>
    <title>Padaria Inteligente - Painel de Controlo IOT</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="icon" href="./images/logo.png" />
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
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Sensores
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Sensor 1</a></li>
                            <li><a class="dropdown-item" href="#">Sensor 2</a></li>
                            <li><a class="dropdown-item" href="#">Sensor 3</a></li>
                            <li><a class="dropdown-item" href="#">Sensor 4</a></li>
                            <li><a class="dropdown-item" href="#">Sensor 5</a></li>
                            <li><a class="dropdown-item" href="#">Sensor 6</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col border border-success m-2">
                <div class="row">
                    <div class="col">
                        <div class="text-center">
                            <h1 class="display-1"><i class="bi bi-exclamation-triangle"></i></h1>
                        </div>
                    </div>
                    <div class="col-10">
                        <p class="lead">Estado do sistema.</p>
                        <small>Mensagem</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col border border-primary m-2">Sensor 1</div>
            <div class="col border border-primary m-2">Sensor 2</div>
            <div class="col border border-primary m-2">Sensor 3</div>
        </div>
        <div class="row">
            <div class="col border border-danger m-2">Sensor 4</div>
            <div class="col border border-danger m-2">Sensor 5</div>
            <div class="col border border-danger m-2">Sensor 6</div>
        </div>
        <div class="row">
            <div class="col m-2">
                Última imagem captada pela camara de vigilância.
            </div>
            <div class="col-8 m-2">
                <div class="text-center">
                    <img src="./images/sample.jpg" class="img-fluid rounded border border-dark p-2" />
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>