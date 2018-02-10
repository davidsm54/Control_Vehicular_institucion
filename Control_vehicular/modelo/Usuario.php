<?php

/**
 * @author David Salazar Mejia
 * @version 1.0
 * @created 07-feb.-2018 13:55:27<br>
 * Descripción: Esta clase representa el usuario que se encuentra en el sistema,
 * el cual puede tener un rol cuando se esta utilizando el sistema
 */
class Usuario {

    /**
     * Identificador del usuario
     */
    private $idUsuario;

    /**
     * Nombre de usuario para poder iniciar una sesion o tener acceso al sistema
     */
    private $nombreUsuario;

    /**
     * Nombre que tiene un usuario en el mundo real
     */
    private $nombre;

    /**
     * Apeido paterno que tiene un usuario en el mundo real
     */
    private $apeidoPaterno;

    /**
     * Apeido materno que tiene un usuario en el mundo real
     */
    private $apeidoMaterno;

    /**
     * Correo electronico con el que cuenta el usuario al momento de
     * identificarse ante el sistema
     */
    private $correoElectronico;

    /**
     * Codigo con el que se identifica el usuario al solicitar un acceso al
     * estacionamiento
     */
    private $codigoQR;

    /**
     * Domicilio que tiene un usuario en el mundo real
     */
    private $domicilio;

    /**
     * Estado en el que vive un usuario en el mundo real
     */
    private $estado;

    /**
     * Municipio en el que vive un usuario en el mundo real
     */
    private $municipio;

    /**
     * Verificador que indica que el usuario cuenta con una tarjeta de
     * circulacion
     */
    private $tarjetaCirculacion;

    /**
     * Verificador que indica que el usuario cuenta con una licencia de conducir
     */
    private $licenciaConducir;

    /**
     * Numero de telefono que tiene un usuario
     */
    private $telefono;

    /**
     * Asociacion Datos del vehiculo con el que desea acceder el usuario
     */
    private $m_Vehiculo;

    /**
     * Asociacion que tiene un usuario con el Rol en el sistema
     */
    private $m_Rol;

    /**
     * Constructor para inicializar el objeto Usuario
     */
    function __construct() {
        
    }

    /*
     * *********************************************************************
     * Metodos para extraer y asignar los datos del Usuario
     * *********************************************************************
     */

    function getIdUsuario() {
        return $this->idUsuario;
    }

    function getNombreUsuario() {
        return $this->nombreUsuario;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getApeidoPaterno() {
        return $this->apeidoPaterno;
    }

    function getApeidoMaterno() {
        return $this->apeidoMaterno;
    }

    function getCorreoElectronico() {
        return $this->correoElectronico;
    }

    function getCodigoQR() {
        return $this->codigoQR;
    }

    function getDomicilio() {
        return $this->domicilio;
    }

    function getEstado() {
        return $this->estado;
    }

    function getMunicipio() {
        return $this->municipio;
    }

    function getTarjetaCirculacion() {
        return $this->tarjetaCirculacion;
    }

    function getLicenciaConducir() {
        return $this->licenciaConducir;
    }

    function getTelefono() {
        return $this->telefono;
    }

    function getM_Vehiculo() {
        return $this->m_Vehiculo;
    }

    function getM_Rol() {
        return $this->m_Rol;
    }

    function setIdUsuario($idUsuario) {
        $this->idUsuario = $idUsuario;
    }

    function setNombreUsuario($nombreUsuario) {
        $this->nombreUsuario = $nombreUsuario;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setApeidoPaterno($apeidoPaterno) {
        $this->apeidoPaterno = $apeidoPaterno;
    }

    function setApeidoMaterno($apeidoMaterno) {
        $this->apeidoMaterno = $apeidoMaterno;
    }

    function setCorreoElectronico($correoElectronico) {
        $this->correoElectronico = $correoElectronico;
    }

    function setCodigoQR($codigoQR) {
        $this->codigoQR = $codigoQR;
    }

    function setDomicilio($domicilio) {
        $this->domicilio = $domicilio;
    }

    function setEstado($estado) {
        $this->estado = $estado;
    }

    function setMunicipio($municipio) {
        $this->municipio = $municipio;
    }

    function setTarjetaCirculacion($tarjetaCirculacion) {
        $this->tarjetaCirculacion = $tarjetaCirculacion;
    }

    function setLicenciaConducir($licenciaConducir) {
        $this->licenciaConducir = $licenciaConducir;
    }

    function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    function setM_Vehiculo(Vehiculo $m_Vehiculo) {
        $this->m_Vehiculo = $m_Vehiculo;
    }

    function setM_Rol(Rol $m_Rol) {
        $this->m_Rol = $m_Rol;
    }

}

?>