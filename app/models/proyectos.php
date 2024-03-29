<?php

class Proyectos extends Validator
{
    private $id_proyecto = null;
    private $nombre_proyecto = null;
    private $imagen_principal = null;
    private $imagen_secundaria = null;
    private $logo_proyecto = null;
    private $logo_proyecto_oscuro = null;
    private $texto_principal = null;
    private $texto_cliente = null;
    private $texto_desafio = null;
    private $texto_solucion = null;
    private $index;
    private $ruta = '..\..\resources\img\projects/';
    private $ruta2 = '../../resources/img/projects/';

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

    public function setLogo($file)
    {
        if ($this->validateImageFile($file, 4000, 4000)) {
            $this->logo_proyecto = $this->getImageName();
            return true;
        } else {
            return false;
        }
    }

    public function setLogoOscuro($file)
    {
        if ($this->validateImageFile($file, 4000, 4000)) {
            $this->logo_proyecto_oscuro = $this->getImageName();
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

    public function getLogo()
    {
        return $this->logo_proyecto;
    }

    public function getLogo_Oscuro()
    {
        return $this->logo_proyecto_oscuro;
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

    public function getRuta2()
    {
        return $this->ruta2;
    }

    public function getIndex()
    {
        return $this->index;
    }



    public function register($usuario)
    {

        $sql = "INSERT INTO ws_proyectos(nombre_proyecto,
         texto_principal, texto_cliente, texto_desafio, texto_solucion, 
         imagen_principal, imagen_secundaria,logo_proyecto,logo_proyecto_oscuro, index_proyecto, 
         id_usuario, fecha_creacion) VALUES (?,?,?,?,?,?,?,?,?,?,$usuario,default);";
        $params = array(
            $this->nombre_proyecto, $this->texto_principal, $this->texto_cliente, $this->texto_desafio, $this->texto_solucion, $this->imagen_principal, $this->imagen_secundaria,
            $this->logo_proyecto, $this->logo_proyecto_oscuro, $this->index
        );

        return Database::executeRow($sql, $params);
    }

    public function registerFirst($usuario)
    {

        $sql = "INSERT INTO ws_proyectos(nombre_proyecto,
         texto_principal, texto_cliente, texto_desafio, texto_solucion, 
         imagen_principal, imagen_secundaria,logo_proyecto, logo_proyecto_oscuro, index_proyecto, 
         id_usuario, fecha_creacion) VALUES (?,?,?,?,?,?,?,?,?,default,$usuario,default);";
        $params = array(
            $this->nombre_proyecto, $this->texto_principal, $this->texto_cliente, $this->texto_desafio, $this->texto_solucion, $this->imagen_principal, $this->imagen_secundaria,
            $this->logo_proyecto, $this->logo_proyecto_oscuro
        );

        return Database::executeRow($sql, $params);
    }


    public function readAll()
    {
        $sql = 'SELECT id_proyecto, nombre_proyecto, texto_principal, texto_cliente, texto_desafio, texto_solucion, imagen_principal, imagen_secundaria, logo_proyecto,logo_proyecto_oscuro, index_proyecto, Concat(ws_usuarios.nombre, " ", ws_usuarios.apellido) as usuario, fecha_creacion FROM ws_proyectos, ws_usuarios WHERE ws_usuarios.id_usuario=ws_proyectos.id_usuario;';
        $params = null;
        return Database::getRows($sql, $params);
    }


    public function getLastId()
    {
        $sql = 'SELECT max(index_proyecto) as index_proyecto from ws_proyectos';
        $params = null;
        return Database::getRow($sql, $params);
    }


    public function readProyecto()
    {
        $sql = 'SELECT id_proyecto, nombre_proyecto, texto_principal, texto_cliente, texto_desafio, texto_solucion, imagen_principal, imagen_secundaria, logo_proyecto, logo_proyecto_oscuro, index_proyecto, id_usuario, fecha_creacion FROM ws_proyectos WHERE id_proyecto = ?';
        $params = array($this->id_proyecto);
        return Database::getRow($sql, $params);
    }

    public function updateProyecto($current_logo, $current_logo_oscuro, $current_imagen_principal, $current_imagen_secundaria)
    {


        ($this->logo_proyecto) ? $this->deleteFile($this->getRuta(), $current_logo) : $this->logo_proyecto = $current_logo;

        ($this->logo_proyecto_oscuro) ?$this->deleteFile($this->getRuta(), $current_logo_oscuro) : $this->logo_proyecto = $current_logo_oscuro;

        ($this->imagen_principal) ? $this->deleteFile($this->getRuta(), $current_imagen_principal)  : $this->imagen_principal = $current_imagen_principal;

        ($this->imagen_secundaria) ?$this->deleteFile($this->getRuta(), $current_imagen_secundaria)  : $this->imagen_secundaria = $current_imagen_secundaria;

        $sql = "UPDATE ws_proyectos set nombre_proyecto=?, texto_principal=?, texto_cliente=?, texto_desafio=?, texto_solucion=?, imagen_principal=?, 
        imagen_secundaria=?, logo_proyecto=?, logo_proyecto_oscuro=? WHERE id_proyecto=?";
        $params = array(
            $this->nombre_proyecto, $this->texto_principal, $this->texto_cliente, $this->texto_desafio, $this->texto_solucion,
            $this->imagen_principal, $this->imagen_secundaria, $this->logo_proyecto, $this->logo_proyecto_oscuro, $this->id_proyecto
        );

        return Database::executeRow($sql, $params);
    }

    public function deleteRow()
    {
        $sql = 'DELETE FROM ws_proyectos WHERE id_proyecto = ?';
        $params = array($this->id_proyecto);
        return Database::executeRow($sql, $params);
    }
}
