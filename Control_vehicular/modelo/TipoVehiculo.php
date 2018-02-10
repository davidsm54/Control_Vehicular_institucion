<?php

/**
 * @author David Salazar Mejia
 * @version 1.0
 * @created 07-feb.-2018 13:55:51<br>
 * Descripcion: Esta clase identifica el tipo de vehiculo que ingresara al
 * estacionamiento de la institucion
 */
class TipoVehiculo {

    /**
     * Identificador del tipo de vehiculo
     */
    private $idTipoVehiculo;

    /**
     * Nombre que se le asigna al tipo de vehiculo: 1. Coche<br>
     * 2. Moto<br>
     * 3. Cuatrimoto<br>
     * 4. Bicicleta
     */
    private $nombre;

    /**
     * Constructor para inicializar el objeto TipoVehiculo
     */
    function __construct() {
        
    }

    /*
     * *********************************************************************
     * Metodos para extraer y asignar los datos del TipoVehiculo
     * *********************************************************************
     */

    function getIdTipoVehiculo() {
        return $this->idTipoVehiculo;
    }

    function getNombre() {
        return $this->nombre;
    }

    function setIdTipoVehiculo($idTipoVehiculo) {
        $this->idTipoVehiculo = $idTipoVehiculo;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

}

?>