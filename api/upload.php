<?php
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        if(isset($_FILES['imagem']))
        {
            if(move_uploaded_file($_FILES['imagem']['tmp_name'], "../images/camara.jpg"))
            {
                file_put_contents("../dados/camara/hora.txt", date("Y/m/d H:i:s"));
                http_response_code(200); // ok
            }
            else
            {
                http_response_code(500);
            }
        }
        else
        {
            http_response_code(400);
        }
    }
    else
    {
        http_response_code(405);
    }
?>