<?php
    header('Content-Type: text/html; charset=utf-8');

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        if(isset($_POST['valor']) && isset($_POST['nome']) && isset($_POST['hora'])){
            switch($_POST['nome']){
                case 'detetor_fumo':
                    file_put_contents("../dados/detetor_fumo/valor.txt", $_POST['valor']);
                    file_put_contents("../dados/detetor_fumo/hora.txt", $_POST['hora']);
                    $data = "\n" . $_POST['hora'] . ";" . $_POST['valor'];
                    file_put_contents("../dados/detetor_fumo/log.txt", $data, FILE_APPEND);
                    break;
                
                case 'temperatura':
                    file_put_contents("../dados/temperatura/valor.txt", $_POST['valor']);
                    file_put_contents("../dados/temperatura/hora.txt", $_POST['hora']);
                    $data = "\n" . $_POST['hora'] . ";" . $_POST['valor'];
                    file_put_contents("../dados/temperatura/log.txt", $data, FILE_APPEND);
                    break;

                case 'ralo_agua':
                    file_put_contents("../dados/ralo_agua/valor.txt", $_POST['valor']);
                    file_put_contents("../dados/ralo_agua/hora.txt", $_POST['hora']);
                    $data = "\n" . $_POST['hora'] . ";" . $_POST['valor'];
                    file_put_contents("../dados/ralo_agua/log.txt", $data, FILE_APPEND);
                    break;
                
                case 'movimento':
                    file_put_contents("../dados/movimento/valor.txt", $_POST['valor']);
                    file_put_contents("../dados/movimento/hora.txt", $_POST['hora']);
                    $data = "\n" . $_POST['hora'] . ";" . $_POST['valor'];
                    file_put_contents("../dados/movimento/log.txt", $data, FILE_APPEND);
                    break;

                case 'luz':
                    file_put_contents("../dados/luz/valor.txt", $_POST['valor']);
                    file_put_contents("../dados/luz/hora.txt", $_POST['hora']);
                    $data = "\n" . $_POST['hora'] . ";" . $_POST['valor'];
                    file_put_contents("../dados/luz/log.txt", $data, FILE_APPEND);
                    break;

                case 'campainha':
                    file_put_contents("../dados/campainha/valor.txt", $_POST['valor']);
                    file_put_contents("../dados/campainha/hora.txt", $_POST['hora']);
                    $data = "\n" . $_POST['hora'] . ";" . $_POST['valor'];
                    file_put_contents("../dados/campainha/log.txt", $data, FILE_APPEND);
                    break;

                default:
                    http_response_code(400);
            }
        }else{
            http_response_code(400);
        }
    }else{
        if($_SERVER['REQUEST_METHOD'] == "GET"){
            $response = array(
                'detetor_fumo' => file_get_contents("../dados/detetor_fumo/valor.txt"),
                'temperatura' => file_get_contents("../dados/temperatura/valor.txt"),
                'ralo_agua' => file_get_contents("../dados/ralo_agua/valor.txt"),
                'movimento' => file_get_contents("../dados/movimento/valor.txt"),
                'luz' => file_get_contents("../dados/luz/valor.txt"),
                'campainha' => file_get_contents("../dados/campainha/valor.txt")
            );
            echo json_encode($response);
        }else{
            http_response_code(405);
        }
    }
?>