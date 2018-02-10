<?php

/**
 * @author David Salazar Mejia
 * @version 1.0
 * @created 07-feb.-2018 13:55:54<br>
 * Descripcion: Esta clase representa las anomalias que pueden generarse cuando
 * un usuario asi lo indica
 */
class Anomalia {

    /**
     * Identificador de la anomalia
     */
    private $idAnomalia;

    /**
     * Folio de la anomalia<br>
     * Nota: Puede llevar formato especifo para asociarlo con la fecha
     */
    private $folio;

    /**
     * Estado en el que se encuentra esta anomalia
     */
    private $estado;

    /**
     * Descripción de la anomalia
     */
    private $descripcion;

    /**
     * Hora en la que se registra la anomalia<br>
     * Nota: La anomalia se debe de registrar en el mismo día de acceso
     */
    private $hora;

    /**
     * Constructor de la anomalia para inicializar el objeto
     */
    function __construct() {
        
    }

    /*
     * ************************************************************************
      Metodos para extraer y asignar los datos de la Anomalia
     * *************************************************************************
     */

    function getIdAnomalia() {
        return $this->idAnomalia;
    }

    function getFolio() {
        return $this->folio;
    }

    function getEstado() {
        return $this->estado;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function getHora() {
        return $this->hora;
    }

    function setIdAnomalia($idAnomalia) {
        $this->idAnomalia = $idAnomalia;
    }

    function setFolio($folio) {
        $this->folio = $folio;
    }

    function setEstado($estado) {
        $this->estado = $estado;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    function setHora($hora) {
        $this->hora = $hora;
    }

}

?>