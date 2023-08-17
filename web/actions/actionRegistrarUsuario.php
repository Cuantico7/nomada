<?php

class actionRegistrarUsuario
{
    public function execute()
    {
        extract($_REQUEST);
        $u = new controlUsuarios();
        $misdatos= $u->registrarUsuario($nombre_usuario,$correo_electronico,$contrasenia,$estado);
        print_r(json_encode($misdatos));

    }
}