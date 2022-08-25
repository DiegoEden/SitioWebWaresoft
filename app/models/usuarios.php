<?php

class Usuarios extends Validator
{

    private $idUsuario = null;
    private $username = null;
    private $password = null;
    private $nombre = null;
    private $apellido = null;

    public function setId($value)
    {
        if ($this->validateNaturalNumber($value)) {
            $this->idUsuario = $value;
            return true;
        } else {
            return false;
        }
    }

    public function setUsername($value)
    {
        if ($this->validateAlphanumeric($value, 1, 25)) {
            $this->username = $value;
            return true;
        } else {
            return false;
        }
    }


    public function setPassword($value)
    {
        if ($this->validatepassword($value)) {
            $this->password = $value;
            return true;
        } else {
            return false;
        }
    }

    public function setNombres($value)
    {
        if ($this->validateAlphabetic($value, 1, 25)) {
            $this->nombre = $value;
            return true;
        } else {
            return false;
        }
    }

    public function setApellidos($value)
    {
        if ($this->validateAlphabetic($value, 1, 25)) {
            $this->apellido = $value;
            return true;
        } else {
            return false;
        }
    }

    public function getId()
    {
        return $this->idUsuario;
    }

    public function getNombres()
    {
        return $this->nombre;
    }

    public function getApellidos()
    {
        return $this->apellido;
    }
    public function getUsername()
    {
        return $this->username;
    }

    public function getContrasenia()
    {
        return $this->password;
    }

    public function readAll()
    {
        $sql = 'SELECT*FROM ws_usuarios';
        $params = null;
        return Database::getRows($sql, $params);
    }

    public function register()
    {
        $hash = password_hash($this->password, PASSWORD_DEFAULT);

        $sql = 'INSERT INTO ws_usuarios(username, contrasena, nombre, apellido) VALUES (?,?,?,?);';
        $params = array($this->username, $hash, $this->nombre, $this->apellido);

        return Database::executeRow($sql, $params);
    }


    public function checkUser($username)
    {
        $sql = 'SELECT id_usuario,username, nombre, apellido FROM ws_usuarios 
                WHERE username = ?';
        $params = array($username);
        if ($data = Database::getRow($sql, $params)) {
            $this->idUsuario = $data['id_usuario'];
            $this->username = $data['username'];
            $this->nombre = $data['nombre'];
            $this->apellido = $data['apellido'];
            return true;
        } else {
            return false;
        }
    }

    public function checkPassword($password)
    {
        $sql = 'SELECT contrasena FROM ws_usuarios WHERE id_usuario = ?';
        $params = array($this->idUsuario);
        $data = Database::getRow($sql, $params);
        if (password_verify($password, $data['contrasena'])) {
            return true;
        } else {
            return false;
        }
    }
}
