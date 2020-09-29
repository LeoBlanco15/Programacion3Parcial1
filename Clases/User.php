<?php
class User
{
    private $_email;
    private $_usuario;
    private $_password;
    private $_foto;

    public function __construct($email,$usuario,$password,$foto)
    {
        $this->_email = $email;
        $this->_usuario = $usuario;
        $this->_password = $password;
        $this->_foto = $foto;
    }
}