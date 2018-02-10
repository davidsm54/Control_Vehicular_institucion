<?php

/**
 * @author David Salazar Mejia
 * @version 1.0
 * @created 07-feb.-2018 13:55:30<br>
 * Descripcion: Esta clase indica el rol que tiene un usuario en el sistema
 */
class Rol {

    /**
     * Identificador que tiene el rol
     */
    private $idRol;

    /**
     * Nombre por default que tiene el rol
     */
    private $nombre;

    /**
     * Constructor para inicializar el objeto Rol
     */
    function __construct() {
        
    }

    /*
     * *********************************************************************
     * Metodos para extraer y asignar los datos del Rol
     * *********************************************************************
     */

    function getIdRol() {
        return $this->idRol;
    }

    function getNombre() {
        return $this->nombre;
    }

    function setIdRol($idRol) {
        $this->idRol = $idRol;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

}

?>