<?php

require_once ('..\TipoCajon.php');

/**
 * @author David Salazar Mejia
 * @version 1.0
 * @created 07-feb.-2018 13:55:44<br>
 * Descripción: Esta clase representa el cajo en el que se encuentra un vehiculo
 * cuando un usuario concedio el acceso
 */
class Cajon {

    /**
     * Identificador del cajon empleado
     */
    private $idCajon;

    /**
     * Ubicacion donde se encuentra el cajon en todo el estacionamiento
     */
    private $ubicacion;

    /**
     * Indica si el cajon se encuentra ocupado
     */
    private $ocupado;

    /**
     * Indica que tipo de cajon es el que se concedio el acceso
     */
    private $m_TipoCajon;

    /**
     * Constructor de Cajon para inicializar el objeto
     */
    function __construct() {
        
    }

    /*
     * ************************************************************************
      Metodos para extraer y asignar los datos de Cajon
     * *************************************************************************
     */

    function getIdCajon() {
        return $this->idCajon;
    }

    function getUbicacion() {
        return $this->ubicacion;
    }

    function getOcupado() {
        return $this->ocupado;
    }

    function getM_TipoCajon() {
        return $this->m_TipoCajon;
    }

    function setIdCajon($idCajon) {
        $this->idCajon = $idCajon;
    }

    function setUbicacion($ubicacion) {
        $this->ubicacion = $ubicacion;
    }

    function setOcupado($ocupado) {
        $this->ocupado = $ocupado;
    }

    function setM_TipoCajon(TipoCajon $m_TipoCajon) {
        $this->m_TipoCajon = $m_TipoCajon;
    }

}

?>