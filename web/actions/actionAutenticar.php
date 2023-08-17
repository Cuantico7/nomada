<?php
class actionAutenticar
{
    public function execute()
    {
        extract($_REQUEST);
        $u = new controlUsuarios();
        $misdatos= $u->login($email,$password);
        print_r(json_encode($misdatos));

    }
}