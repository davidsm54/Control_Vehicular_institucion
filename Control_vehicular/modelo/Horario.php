<?php

/**
 * @author David Salazar Mejia
 * @version 1.0
 * @created 07-feb.-2018 13:55:35<br>
 * Descripcion: Esta clase identifica el horario que tiene un alumno y empleado
 * en caso de ser profesor
 */
class Horario {

    /**
     * Identificador del horario
     */
    private $idHorario;

    /**
     * Hora en la que esta asignado
     */
    private $hora;

    /**
     * Asociacion para conocer las clase que componen el horario del alumno o un
     * empleado en caso de ser profesor
     */
    private $m_Clase = array();

    /**
     * Constructor para inicializar el objeto Horario
     */
    function __construct() {
        
    }

    /*
     * *********************************************************************
     * Metodos para extraer y asignar los datos del Horario
     * *********************************************************************
     */

    function getIdHorario() {
        return $this->idHorario;
    }

    function getHora() {
        return $this->hora;
    }

    function getM_Clase() {
        return $this->m_Clase;
    }

    function setIdHorario($idHorario) {
        $this->idHorario = $idHorario;
    }

    function setHora($hora) {
        $this->hora = $hora;
    }

    function setM_Clase($m_Clase) {
        $this->m_Clase = $m_Clase;
    }

}

?>