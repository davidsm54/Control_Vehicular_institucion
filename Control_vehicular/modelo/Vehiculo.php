<?php

/**
 * @author David Salazar Mejia
 * @version 1.0
 * @created 07-feb.-2018 13:55:49<br>
 * Descripción: Esta clase identifica los datos de un vehiculo que ingresara al
 * estacionamiento por un usuario que esta registardo en el sistema
 */
class Vehiculo {

    /**
     * Identificador del vehiculo
     */
    private $idVehiculo;

    /**
     * Marca que tiene el vehiculo.
     */
    private $marca;

    /**
     * Modelo que tiene el vehiculo
     */
    private $modelo;

    /**
     * Color con el esta pintado el vehiculo
     */
    private $color;

    /**
     * Numero de serie con el que cuenta un vehiculo
     */
    private $serie;

    /**
     * Codigo de la placa que identifica al vehiculo.<br>
     * Nota: El vehiculo tipo bicicleta puede tener o no este atributo
     */
    private $placa;

    /**
     * Asociacion que tiene un vehiculo con su tipo de vehiculo
     */
    private $m_TipoVehiculo;

    /**
     * Constructor para inicializar el objeto Vehiculo
     */
    function __construct() {
        
    }
    
     /*
     **********************************************************************
     * Metodos para extraer y asignar los datos del Vehiculo
     **********************************************************************
     */
    function getIdVehiculo() {
        return $this->idVehiculo;
    }

    function getMarca() {
        return $this->marca;
    }

    function getModelo() {
        return $this->modelo;
    }

    function getColor() {
        return $this->color;
    }

    function getSerie() {
        return $this->serie;
    }

    function getPlaca() {
        return $this->placa;
    }

    function getM_TipoVehiculo() {
        return $this->m_TipoVehiculo;
    }

    function setIdVehiculo($idVehiculo) {
        $this->idVehiculo = $idVehiculo;
    }

    function setMarca($marca) {
        $this->marca = $marca;
    }

    function setModelo($modelo) {
        $this->modelo = $modelo;
    }

    function setColor($color) {
        $this->color = $color;
    }

    function setSerie($serie) {
        $this->serie = $serie;
    }

    function setPlaca($placa) {
        $this->placa = $placa;
    }

    function setM_TipoVehiculo($m_TipoVehiculo) {
        $this->m_TipoVehiculo = $m_TipoVehiculo;
    }
}

?>