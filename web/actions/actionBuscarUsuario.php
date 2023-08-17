<?php

class actionBuscarUsuario
{
    public function execute()
    {   extract($_REQUEST);
        $u = new controlUsuarios();
        $misdatos= $u->buscarUsuario($id);
        print_r(json_encode($misdatos));

    }
}