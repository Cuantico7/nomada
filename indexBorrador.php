<?php

require_once ".autoloader";





if (!isset($action)) {
    //print_r("No se ha envaido un evento a ejecutar");
    
   $response = [
        "result" => "bad",
        "data" => "",
        "message" => "No se ha enviado un evento a ejecutar"
    ];
    print_r(json_encode($response));
    //require_once "vista/login.php";
    //require_once "vista/login.php";
   
}else {
    switch ($action) {

        case "usuarios":
            //print_r("Voy a consutar un usuario :)");
            $u = new controlUsuarios();
            $misdatos= $u->mostrarUsuarios();
            print_r("<pre>");
            print_r(json_encode($misdatos));

            break;
         case 'buscarUsuario':
            # code...
            $u = new controlUsuarios();
            $misdatos= $u->buscarUsuario($id);
            print_r(json_encode($misdatos));
            break;
         case 'autenticar':
                # code...
                $u = new controlUsuarios();
                $misdatos= $u->login($email,$password);
                print_r(json_encode($misdatos));
                break;  

        case 'registrarUsuario':
                $u = new controlUsuarios();
                $misdatos= $u->registrarUsuario($nombre_usuario,$correo_electronico,$contrasenia,$estado);
                print_r(json_encode($misdatos));
                break;  

                case 'actualizarUsuario':
                    $u = new controlUsuarios();
                    //$misdatos= $u->modeloUsuarios($id,$nombre_usuario, $correo_electronico, $estado);
                    print_r(json_encode($misdatos));
                    break;  
                    

         default:
            print_r("peticion invalida");
            


        }

    }




/*
require_once "control/controlUsuarios.php";


//echo "Hola Mundo";
extract($_REQUEST);
//print_r("<pre>");
//print_r($_REQUEST);

//print_r($action);
//print_r("<br>");
//print_r($otro);

if (!isset($action)) {
    //print_r("No se ha envaido un evento a ejecutar");
    $response = [
        "result" => "bad",
        "data" => "",
        "message" => "No se ha enviado un evento a ejecutar"
    ];
    print_r(json_encode($response));
    //require_once "vista/login.php";
} else {
    switch ($action) {

        case "autenticar":
            $u = new controlUsuarios();
            $result = $u->autenticar($email, $password);

            if (is_array($result)) {
                $response = [
                    "result" => "ok",
                    "data" => $result,
                    "message" => "Usuario Valido"
                ];
                //require "vista/home.php";   ///<-----------
            }
            if ($result == 0) {
                $response = [
                    "result" => "bad",
                    "data" => "",
                    "message" => "Faltan Datos"
                ];

                //require "vista/login.php"; ///<-----------
            }
            if ($result == 1) {
                $response = [
                    "result" => "bad",
                    "data" => "",
                    "message" => "Usuario Invalido"
                ];
                // require "vista/login.php"; ///<-----------
            }

            print_r(json_encode($response));

            break;
        case "consultarUsuarios":
            print_r("Voy a consutar un usuario :)");
            $u = new controlUsuarios();

            $result = $u->listarUsuarios();


            print_r(json_encode($result));

            break;

        case "buscarUsuario":
            //print_r("Voy a buscar un usuario");
            $u = new controlUsuarios();
            $result = $u->buscarUsuario($id);
            if (is_array($result)) {
                $response = [
                    "result" => "ok",
                    "data" => $result,
                    "message" => "Usuario Encontrado"
                ];
            }
            if ($result == 0) {
                $response = [
                    "result" => "bad",
                    "data" => "",
                    "message" => "Faltan Datos"
                ];
            }
            if ($result == 1) {
                $response = [
                    "result" => "bad",
                    "data" => "",
                    "message" => "Usuario No Encontrado"
                ];
            }

            print_r(json_encode($response));
            break;

        case "registrar":
            $u = new controlUsuarios();
            $result = $u->registrar($nombre, $email, $password, $estado);
            switch ($result) {
                case 0:

                    $response = [
                        "result" => "bad",
                        "data" => "",
                        "message" => "Faltan Datos"
                    ];
                    break;
                case 1:
                    $response = [
                        "result" => "bad",
                        "data" => "",
                        "message" => "Usuario ya existe con el mismo email"
                    ];
                    break;
                case 2:
                    $response = [
                        "result" => "bad",
                        "data" => "",
                        "message" => "Usuario no creado"
                    ];
                    break;
                case 3:
                    $response = [
                        "result" => "bad",
                        "data" => "",
                        "message" => "Usuario Creado satisfactoriamente"
                    ];
                    break;
            }
            print_r(json_encode($response));


            break;
        case "actualizarUsuario":
            $u = new controlUsuarios();
            $result = $u->modificar($id, $nombre, $email, $estado);
            switch ($result) {
                case 0:

                    $response = [
                        "result" => "bad",
                        "data" => "",
                        "message" => "Faltan Datos"
                    ];
                    break;
                case 1:
                    $response = [
                        "result" => "bad",
                        "data" => "",
                        "message" => "Usuario ya existe con el mismo email"
                    ];
                    break;
                case 2:
                    $response = [
                        "result" => "bad",
                        "data" => "",
                        "message" => "Usuario no creado"
                    ];
                    break;
                case 3:
                    $response = [
                        "result" => "bad",
                        "data" => "",
                        "message" => "Usuario Creado satisfactoriamente"
                    ];
                    break;
            }
            print_r(json_encode($response));


            break;
        default:
            print_r("Peticion invalida");
            // require "vista/login"; ///<-----------
    }
}*/