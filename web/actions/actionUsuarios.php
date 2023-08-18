<?php

class actionUsuarios
{
    public function execute()
    {
    $u = new controlUsuarios();
            $misdatos= $u->mostrarUsuarios();

            $response = [
                "result" => "sucess",
                "data" => $misdatos,
                "message" => "listado generado"
                

            ];

            print_r("<pre>");
            //print_r(json_encode($misdatos));

        if (!SENTINEL == true)//muestra una pantalla html
        $response["view"] = "usuarios/index";
        return $response;
        //print_r(json_encode($misdatos));

    }

}


