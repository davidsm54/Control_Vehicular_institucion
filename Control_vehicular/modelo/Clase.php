<?php

/**
 * @author David Salazar Mejia
 * @version 1.0
 * @created 07-feb.-2018 13:55:38<br>
 * Descripción: Esta clase representa la clase en la que se encuentra un alumno
 * o un empleado en caso de que este sea un instructor
 */
class Clase {

    /**
     * Identificador de la clase
     */
    private $idClase;

    /**
     * Nombre que se le asigno a la clase
     */
    private $nombreClase;

    /**
     * Salon en el que se impartira esa clase
     */
    private $salon;

    /**
     * Edificio en que el se ubica esa clase
     */
    private $edificio;

    /**
     * Constructor de Clase para inicializar el objeto
     */
    function __construct() {
        
    }

    /*
     * ************************************************************************
      Metodos para extraer y asignar los datos de Clase
     * *************************************************************************
     */

    function getIdClase() {
        return $this->idClase;
    }

    function getNombreClase() {
        return $this->nombreClase;
    }

    function getSalon() {
        return $this->salon;
    }

    function getEdificio() {
        return $this->edificio;
    }

    function setIdClase($idClase) {
        $this->idClase = $idClase;
    }

    function setNombreClase($nombreClase) {
        $this->nombreClase = $nombreClase;
    }

    function setSalon($salon) {
        $this->salon = $salon;
    }

    function setEdificio($edificio) {
        $this->edificio = $edificio;
    }

}

?>