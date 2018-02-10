<?php

/**
 * @author David Salazar Mejia
 * @version 1.0
 * @created 07-feb.-2018 13:55:39<br>
 * Descripcion: Esta clase representa los datos de un alumno que herada de un
 * usuario para poder tener acceso al estacionamiento
 */
class Alumno extends Usuario {

    /**
     * Carrera en la que se encuentra inscrito un alumno
     */
    private $carrera;

    /**
     * Paraescolar en el que se encuentra inscrito un alumno<br>
     * Nota: Pueda estar vacio en caso de que este ya no este incolucrado
     */
    private $paraescolar;

    /**
     * Asociacion de horario para conocer el horario del alumno y asi poder
     * ubicarlo
     */
    private $m_Horario;

    /**
     * Constructor para inicializar el objeto Alumno
     */
    function Alumno() {
        
    }

    /*
     * *********************************************************************
     * Metodos para extraer y asignar los datos del alumno en conjunto con su usuario
     * *********************************************************************
     */

    function getCarrera() {
        return $this->carrera;
    }

    function getParaescolar() {
        return $this->paraescolar;
    }

    function getM_Horario() {
        return $this->m_Horario;
    }

    function setCarrera($carrera) {
        $this->carrera = $carrera;
    }

    function setParaescolar($paraescolar) {
        $this->paraescolar = $paraescolar;
    }

    function setM_Horario(Horario $m_Horario) {
        $this->m_Horario = $m_Horario;
    }

}

?>