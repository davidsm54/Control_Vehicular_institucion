<?php

/**
 * @author David Salazar Mejia
 * @version 1.0
 * @created 07-feb.-2018 13:55:56<br>
 * Descripcion: Esta clase representa el control de acceso para los usuarios del
 * estacionamiento
 */
class Acceso {

    /**
     * Identificador del acceso generado
     */
    private $idAcceso;

    /**
     * Fecha en la que se realiza el acceso
     */
    private $fecha;

    /**
     * Hora de entrada en la que se realiza el acceso
     */
    private $horaEntrada;

    /**
     * Hora de salida en la que se realiza el acceso
     */
    private $horaSalida;

    /**
     * Asociación tipo anomalia que puede tener un acceso cuando un usuario asi lo
     * indica
     */
    private $m_Anomalia;

    /**
     * Asociacion de usuario, la cual es necesaria para tener el acceso con 
     * la informacion de un usuario
     */
    private $m_Usuario;

    /**
     * Cajon en el que se coloco el acceso del vehiculo
     */
    private $m_Cajon;

    /**
     * Constructor para inicializar los datos de la clase Acceso
     */
    function __construct() {
        
    }

    /*     * ************************************************************
     * Metodos para extraer y asignar los datos del objeto Acesso
     *
     * ******************************************************* */

    function getIdAcceso() {
        return $this->idAcceso;
    }

    function getFecha() {
        return $this->fecha;
    }

    function getHoraEntrada() {
        return $this->horaEntrada;
    }

    function getHoraSalida() {
        return $this->horaSalida;
    }

    function getM_Anomalia() {
        return $this->m_Anomalia;
    }

    function getM_Usuario() {
        return $this->m_Usuario;
    }

    function getM_Cajon() {
        return $this->m_Cajon;
    }

    function setIdAcceso($idAcceso) {
        $this->idAcceso = $idAcceso;
    }

    function setFecha($fecha) {
        $this->fecha = $fecha;
    }

    function setHoraEntrada($horaEntrada) {
        $this->horaEntrada = $horaEntrada;
    }

    function setHoraSalida($horaSalida) {
        $this->horaSalida = $horaSalida;
    }

    function setM_Anomalia($m_Anomalia) {
        $this->m_Anomalia = $m_Anomalia;
    }

    function setM_Usuario(Usuario $m_Usuario) {
        $this->m_Usuario = $m_Usuario;
    }

    function setM_Cajon($m_Cajon) {
        $this->m_Cajon = $m_Cajon;
    }

}

?>