<?php

class actionBuscarUsuario
{
    public function execute()
    {   extract($_REQUEST);
        $u = new controlUsuarios();
        $misdatos= $u->buscarUsuario($id);

        if (!SENTINEL == true)//muestra una pantalla html
        $response["view"] = "usuarios/edit";

        if (is_array($misdatos)) {
            $response = [
                "result" => "success",
                "data" => $misdatos,
                "message" => "Usuario Valido"
                
            ];
            //require "vista/home.php";   ///<-----------
        }
        if ($misdatos == 0) {
            $response = [
                "result" => "fail",
                "data" => "",
                "message" => "Faltan Datos"

            ];

            //require "vista/login.php"; ///<-----------
        }
        if ($result == 1) {
            $response = [
                "result" => "fail",
                "data" => "",
                "message" => "Usuario no encontrado"

            ];
            // require "vista/login.php"; ///<-----------
        }

        if (!SENTINEL == true)//muestra una pantalla html
        $response["view"] = "usuarios/edit";
        return $response;
        //print_r(json_encode($misdatos));

    }
}