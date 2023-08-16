<?php


class controlUsuarios
{
    var $modelo;

    function __construct()
    {
        $this->modelo = new modeloUsuarios();
    }

    public function login($email,$password)
    {
        if (
            !empty($email) && $email != "" && $email != NULL &&
            !empty($password) && $password != "" && $password != NULL
        ) {
            $result = $this->modelo->validateUserCredentials($email,($password));

            if (is_array($result) && count($result) > 0) {
                return $result;
            } else
                return $result="Usuario Invalido";
        } else {
            return $result="Faltan Datos";
        }
    }

    public function mostrarUsuarios()
    {
            return $this->modelo->getAllUsuarios();
    }

    public function buscarUsuario($id)  
                //return $this->modelo->getUserById($id);
    {
        if (!empty($id) && $id != "" && $id != NULL )
             {
            $result = $this->modelo->getUserById($id);

            if (is_array($result) && count($result) > 0) {
                return $result;
            } else
                return $result="Usuario Invalido";
        } else {
            return $result="Faltan Datos";
        }
    }


    public function registrarUsuario($nombre_usuario,$correo_electronico,$contrasenia,$estado)
    {
        if (!empty($nombre_usuario) && $nombre_usuario != "" && $nombre_usuario != NULL &&
        !empty($correo_electronico) && $correo_electronico != "" && $correo_electronico != NULL &&
        !empty($contrasenia) && $contrasenia != "" && $contrasenia != NULL &&
        !empty($estado) && $estado != "" && $estado != NULL )
        {
        $result = $this->modelo->getUserByEmail($correo_electronico);
        if (is_array($result) && count ($result) ==0) 
        {
            $result=$this->modelo->addUser($nombre_usuario,$correo_electronico,$contrasenia,$estado);

            if ($result)
            return $result="Usuario Creado"; 

            else

            return $result="Usuario no Creado";

        }else
        
            return $result="Usuario ya existe";

        } else {
                return $result="Faltan datos";
                }
    }
}