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

                default:
                    http_response_code(400);
            }
        }else{
            http_response_code(400);
        }
    }else{
        if($_SERVER['REQUEST_METHOD'] == "GET"){
            if(isset($_GET['nome'])){
                switch($_GET['nome']){
                    case 'detetor_fumo':
                        echo file_get_contents("../files/temperatura/valor.txt");
                        break;

                    default:
                        http_response_code(404);
                }
            }else{
                http_response_code(400);
            }
        }else{
            http_response_code(405);
        }
    }
?>