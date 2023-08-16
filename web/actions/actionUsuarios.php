<php

class actionUsuarios
{
    public function execute()
    $u = new controlUsuarios();
            $misdatos= $u->mostrarUsuarios();
            print_r("<pre>");
            print_r(json_encode($misdatos));

}


