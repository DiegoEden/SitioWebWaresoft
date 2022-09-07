<?php




class Mail extends Validator
{


    private $correo = null;
    private $nombres = null;
    private $asunto = null;
    private $mensaje = null;


    public function setCorreo($value)
    {

        if ($this->validateEmail($value)) {
            $this->correo = $value;
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

    public function setAsunto($value)
    {
        if ($this->validateAlphabetic($value, 1, 25)) {
            $this->asunto = $value;
            return true;
        } else {
            return false;
        }
    }

    public function setMensaje($value)
    {
        if ($this->validateText($value)) {
            $this->mensaje = $value;
            return true;
        } else {
            return false;
        }
    }

    public function getCorreo()
    {
        return $this->correo;
    }

    public function getNombres()
    {
        return $this->nombres;
    }
    public function getAsunto()
    {
        return $this->asunto;
    }
    public function getMensaje()
    {
        return $this->mensaje;
    }
}
