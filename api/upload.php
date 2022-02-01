<?php
    //-- move_uploaded_file
    function save_file($sourcefile){
        if (move_uploaded_file($sourcefile,"images/sample.jpg")){
            echo("Foi realizado com sucesso o upload do ficheiro");
        }
        else{
            echo("Erro a fazer o upload");
        }
    }

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        if(isset($_FILES['imagem'])){
            //print_r($_FILES['imagem']);
            echo("<br>"."Nome da imagem".$_FILES['imagem'][name]);
            echo("<br>"."Tamanho da Imagem".$_FILES['imagem'][size]);
            echo("<br>"."Tipo/pasta temporaria : ".$_FILES['imagem'][tmp_name]);
            save_file($_FILES['imagem'][tmp_name]);
        }else{
            echo ('Erro não existe elemento imagem');
        }
    }else{
        
    }
?>