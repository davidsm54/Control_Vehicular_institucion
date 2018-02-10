<?php

/**
 * @author David Salazar Mejia
 * @version 1.0
 * @created 07-feb.-2018 13:55:33<br>
 * Descripcion: Esta clase representa los datos de un Empleado que herada de un
 * usuario para poder tener acceso al estacionamiento
 */
class Empleado extends Usuario {

    /**
     * Area en la que se encuentra inscrito ese empleado
     */
    private $area;

    /**
     * Asociacion de horario para conocer el horario del Empleado en caso de que
     * se un profesor y asi poder ubicarlo
     */
    private $m_Horario;

    /**
     * Constructor para inicializar el objeto Empleado
     */
    function __construct() {
        
    }

    /*
     * *********************************************************************
     * Metodos para extraer y asignar los datos del Empleado en conjunto con su usuario
     * *********************************************************************
     */

    function getArea() {
        return $this->area;
    }

    function getM_Horario() {
        return $this->m_Horario;
    }

    function setArea($area) {
        $this->area = $area;
    }

    function setM_Horario(Horario $m_Horario) {
        $this->m_Horario = $m_Horario;
    }

}

?>