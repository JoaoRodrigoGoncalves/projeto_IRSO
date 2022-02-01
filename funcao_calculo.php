<?php
    function calcularEstadoSistema()
    {
        // coloamos os objetos de datas com a timezone correta numa array
        $sensor[0] = new DateTime(file_get_contents("./dados/detetor_fumo/hora.txt"), new DateTimeZone('Europe/Lisbon'));
        $sensor[1] = new DateTime(file_get_contents("./dados/temperatura/hora.txt"), new DateTimeZone('Europe/Lisbon'));
        $sensor[2] = new DateTime(file_get_contents("./dados/ralo_agua/hora.txt"), new DateTimeZone('Europe/Lisbon'));
        $sensor[3] = new DateTime(file_get_contents("./dados/movimento/hora.txt"), new DateTimeZone('Europe/Lisbon'));
        $sensor[4] = new DateTime(file_get_contents("./dados/luz/hora.txt"), new DateTimeZone('Europe/Lisbon'));
        $sensor[5] = new DateTime(file_get_contents("./dados/campainha/hora.txt"), new DateTimeZone('Europe/Lisbon'));
        $sensor[6] = new DateTime(file_get_contents("./dados/camara/hora.txt"), new DateTimeZone('Europe/Lisbon'));

        $agora = new DateTime();
        foreach ($sensor as $value) { //loop pela array. caso exista algum sensor que não tenha sido atualizado nos últimos 10 segundos, devolve a string "false"
            if($agora->getTimestamp() - $value->getTimestamp() > 10)
            {
                return "false";
            }
        }
        return "true";
    }
?>