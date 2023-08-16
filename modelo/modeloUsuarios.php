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
        $sql = "SELECT * FROM usuarios WHERE correo_electronico = '$email' AND contrasenia = '$password'";

        $result = $this->conexion->query($sql);

        return $result->fetch_all(MYSQLI_ASSOC);

    }

    public function getUserByEmail($email)
    {
        $sql = "SELECT * FROM usuarios WHERE correo_electronico = '$email'";

        $result = $this->conexion->query($sql);

        return $result->fetch_all(MYSQLI_ASSOC);
    }


    public function addUser($nombre_usuario,$correo_electronico,$contrasenia,$estado)
    {
        $sql = "INSERT INTO usuarios VALUES (NULL,'$nombre_usuario','$correo_electronico','$contrasenia',$estado)";

        $result = $this->conexion->query($sql);

        return $result;


    }


    public function updateUserRecord($id,$nombre_usuario,$correo_electronico,$estado)
    {
        $sql = "UPDATE usuarios SET nombre_usuario='$nombre_usuario',
                                    correo_electronico='$correo_electronico',
                                    estado='$estado 
                                    WHERE id= $id";

        $result = $this->conexion->query($sql);

        return $result;
    }


    public function updatePasswordRecord($id,$contrasenia)
    {
        $sql = "UPDATE usuarios SET contrasenia='$contrasenia',
                                    WHERE id= $id";
        $result = $this->conexion->query($sql);

        return $result;
    }




}