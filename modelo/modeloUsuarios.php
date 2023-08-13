<?php


class modeloUsuarios
{
    var $conexion;

    function __construct()
    {
        $con = new mysql();
        $this->conexion = $con->conectar();
    }

    public function getAllUsuarios()
    {
        $sql = "SELECT * FROM usuarios";

        $result = $this->conexion->query($sql);

        print_r("<pre>");

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getById($id)
    {
        $sql = "SELECT * FROM usuarios WHERE id_usuario = $id";

        $result = $this->conexion->query($sql);

        return $result->fetch_all(MYSQLI_ASSOC);
    }
}