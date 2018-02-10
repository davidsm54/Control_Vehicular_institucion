<?php

/**
 * @author David Salazar Mejia
 * @version 1.0
 * @created 07-feb.-2018 13:55:47<br>
 * Descripcion: Esta clase identifica el tipo de cajon al que pertenece un cajon
 * en todo el estacionamiento de la institucion
 */
class TipoCajon {

    /**
     * Identificador del tipo de cajon
     */
    private $idTipoCajon;

    /**
     * Nombre que tiene tipo de cajon
     */
    private $nombre;

    /**
     * Constructor para inicializar el objeto TipoCajon
     */
    function __construct() {
        
    }

    /*
     * *********************************************************************
     * Metodos para extraer y asignar los datos del TipoCajon
     * *********************************************************************
     */

    function getIdTipoCajon() {
        return $this->idTipoCajon;
    }

    function getNombre() {
        return $this->nombre;
    }

    function setIdTipoCajon($idTipoCajon) {
        $this->idTipoCajon = $idTipoCajon;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

}

?>