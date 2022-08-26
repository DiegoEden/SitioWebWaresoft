<?php

class Proyectos extends Validator
{
    private $id_proyecto = null;
    private $nombre_proyecto = null;
    private $imagen_principal = null;
    private $imagen_secundaria = null;
    private $texto_principal = null;
    private $texto_cliente = null;
    private $texto_desafio = null;
    private $texto_solucion = null;
    private $index;
    private $ruta = '..\..\resources\img\projects/';

    public function setid_proyectos($value)
    {

        if ($this->validateNaturalNumber($value)) {
            $this->id_proyecto = $value;
            return true;
        } else {
            return false;
        }
    }

    public function setNombre_proyecto($value)
    {
        if ($this->validateText($value)) {
            $this->nombre_proyecto = $value;
            return true;
        } else {
            return false;
        }
    }

    public function setImagen_principal($file)
    {

        // Validamos el tipo de dato del valor ingresado
        if ($this->validateImageFile($file, 4000, 4000)) {
            $this->imagen_principal = $this->getImageName();
            return true;
        } else {
            return false;
        }
    }

    public function setImagen_secundaria($file)
    {
        if ($this->validateImageFile($file, 4000, 4000)) {
            $this->imagen_secundaria = $this->getImageName();
            return true;
        } else {
            return false;
        }
    }

    public function setTexto_principal($value)
    {
        if ($this->validateText($value)) {
            $this->texto_principal = $value;
            return true;
        } else {
            return false;
        }
    }

    public function setTexto_cliente($value)
    {
        if ($this->validateText($value)) {
            $this->texto_cliente = $value;
            return true;
        } else {
            return false;
        }
    }

    public function setTexto_desafio($value)
    {
        if ($this->validateText($value)) {
            $this->texto_desafio = $value;
            return true;
        } else {
            return false;
        }
    }

    public function setTexto_solucion($value)
    {
        if ($this->validateText($value)) {
            $this->texto_solucion = $value;
            return true;
        } else {
            return false;
        }
    }

    public function setIndex($value)
    {

        if ($this->validateNaturalNumber($value)) {
            $this->index = $value;
            return true;
        } else {
            return false;
        }
    }

    public function getId()
    {
        return $this->id_proyecto;
    }


    public function getimagen_Principal()
    {
        return $this->imagen_principal;
    }


    public function getimagen_Secundaria()
    {
        return $this->imagen_secundaria;
    }

    public function getTexto_principal()
    {
        return $this->texto_principal;
    }

    public function getTexto_cliente()
    {
        return $this->texto_cliente;
    }

    public function getTexto_desafio()
    {
        return $this->texto_desafio;
    }

    public function getTexto_solucion()
    {
        return $this->texto_solucion;
    }

    public function getRuta()
    {
        return $this->ruta;
    }



    public function register($usuario)
    {

        $sql = "INSERT INTO ws_proyectos(nombre_proyecto,
         texto_principal, texto_cliente, texto_desafio, texto_solucion, 
         imagen_principal, imagen_secundaria, index_proyecto, 
         id_usuario, fecha_creacion) VALUES (?,?,?,?,?,?,?,default,$usuario,default);";
        $params = array(
            $this->nombre_proyecto, $this->texto_principal, $this->texto_cliente, $this->texto_desafio, $this->texto_solucion, $this->imagen_principal, $this->imagen_secundaria
        );

        return Database::executeRow($sql, $params);
    }
}
