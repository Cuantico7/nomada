<?php
class actionAutenticar
{
    public function execute()
    {
        extract($_REQUEST);
        $u = new controlUsuarios();
        $misdatos= $u->login($email,$password);

        if (is_array($misdatos)) {
            $response = [
                "result" => "success",
                "data" => $misdatos,
                "message" => "Usuario Valido",
                "view"=>"home"
            ];
            //require "vista/home.php";   ///<-----------
        }
        if ($misdatos == 0) {
            $response = [
                "result" => "fail",
                "data" => "",
                "message" => "Faltan Datos",
                "view"=>"login"

            ];

            //require "vista/login.php"; ///<-----------
        }
        if ($result == 1) {
            $response = [
                "result" => "fail",
                "data" => "",
                "message" => "Usuario Invalido",
                "view"=>"login"

            ];
            // require "vista/login.php"; ///<-----------
        }

       
        return $response;

        //print_r(json_encode($misdatos));

    }
}