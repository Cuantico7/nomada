<?php


class modeloUsuarios
{
    var $conexion;

    function __construct()
    {
        $con = new mysql();
        $this->conexion = $con->getConexion();
    }

    public function getAllUsuarios()
    {
        $sql = "SELECT * FROM usuarios";

        $result = $this->conexion->query($sql);

        print_r("<pre>");

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getUserById($id)
    {
        $sql = "SELECT * FROM usuarios WHERE id_usuario = $id";

        $result = $this->conexion->query($sql);

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function validateUserCredentials($email,$password)
    {
        $sql = "SELECT * FROM usuarios WHERE correo_electronico = '$email' AND contraseña = '$password'";

        $result = $this->conexion->query($sql);

        return $result->fetch_all(MYSQLI_ASSOC);

    }

    public function getUserByEmail($email)
    {
        $sql = "SELECT * FROM usuarios WHERE id_usuario = $email";

        $result = $this->conexion->query($sql);

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    
}