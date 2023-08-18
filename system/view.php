<?php


class view 
{

public static function render($params=[])
{

    $d = json_decode(json_encode($params));

    if (!is_dir(VIEWS))
    {

    die("el directorio de vista no existe ");
    }

    $filename = VIEWS . $params["view"].".php";
    if(!is_file($filename))
        die("la vista no exista :( ");

        require_once $filename;


}






}







