package modelo;

/**
 * @author David Salazar Mejia
 * @version 1.0
 * @created 07-feb.-2018 13:55:27<br>
 * Descripción: Esta clase representa el usuario que se encuentra en el sistema,
 * el cual puede tener un rol cuando se esta utilizando el sistema
 */
public class Usuario {

    /**
     * Identificador del usuario
     */
    private int idUsuario;

    /**
     * Nombre de usuario para poder iniciar una sesion o tener acceso al sistema
     */
    private String nombreUsuario;

    /**
     * Nombre que tiene un usuario en el mundo real
     */
    private String nombre;

    /**
     * Apeido paterno que tiene un usuario en el mundo real
     */
    private String apeidoPaterno;

    /**
     * Apeido materno que tiene un usuario en el mundo real
     */
    private String apeidoMaterno;

    /**
     * Correo electronico con el que cuenta el usuario al momento de
     * identificarse ante el sistema
     */
    private String correoElectronico;

    /**
     * Codigo con el que se identifica el usuario al solicitar un acceso al
     * estacionamiento
     */
    private byte codigoQR;

    /**
     * Domicilio que tiene un usuario en el mundo real
     */
    private String domicilio;

    /**
     * Estado en el que vive un usuario en el mundo real
     */
    private String estado;

    /**
     * Municipio en el que vive un usuario en el mundo real
     */
    private String municipio;

    /**
     * Verificador que indica que el usuario cuenta con una tarjeta de
     * circulacion
     */
    private boolean tarjetaCirculacion;

    /**
     * Verificador que indica que el usuario cuenta con una licencia de conducir
     */
    private boolean licenciaConducir;

    /**
     * Numero de telefono que tiene un usuario
     */
    private String telefono;

    /**
     * Datos del vehiculo con el que desea acceder el usuario
     */
    private Vehiculo m_Vehiculo;

    /**
     * Asociacion que tiene un usuario con el Rol en el sistema
     */
    private Rol m_Rol;

    /**
     * Constructor para inicializar el objeto Usuario
     */
    public Usuario() {

    }

    /*
     **********************************************************************
     * Metodos para extraer y asignar los datos del Usuario
     **********************************************************************
     */
    public int getIdUsuario() {
        return idUsuario;
    }

    public void setIdUsuario(int idUsuario) {
        this.idUsuario = idUsuario;
    }

    public String getNombreUsuario() {
        return nombreUsuario;
    }

    public void setNombreUsuario(String nombreUsuario) {
        this.nombreUsuario = nombreUsuario;
    }

    public String getNombre() {
        return nombre;
    }

    public void setNombre(String nombre) {
        this.nombre = nombre;
    }

    public String getApeidoPaterno() {
        return apeidoPaterno;
    }

    public void setApeidoPaterno(String apeidoPaterno) {
        this.apeidoPaterno = apeidoPaterno;
    }

    public String getApeidoMaterno() {
        return apeidoMaterno;
    }

    public void setApeidoMaterno(String apeidoMaterno) {
        this.apeidoMaterno = apeidoMaterno;
    }

    public String getCorreoElectronico() {
        return correoElectronico;
    }

    public void setCorreoElectronico(String correoElectronico) {
        this.correoElectronico = correoElectronico;
    }

    public byte getCodigoQR() {
        return codigoQR;
    }

    public void setCodigoQR(byte codigoQR) {
        this.codigoQR = codigoQR;
    }

    public String getDomicilio() {
        return domicilio;
    }

    public void setDomicilio(String domicilio) {
        this.domicilio = domicilio;
    }

    public String getEstado() {
        return estado;
    }

    public void setEstado(String estado) {
        this.estado = estado;
    }

    public String getMunicipio() {
        return municipio;
    }

    public void setMunicipio(String municipio) {
        this.municipio = municipio;
    }

    public boolean isTarjetaCirculacion() {
        return tarjetaCirculacion;
    }

    public void setTarjetaCirculacion(boolean tarjetaCirculacion) {
        this.tarjetaCirculacion = tarjetaCirculacion;
    }

    public boolean isLicenciaConducir() {
        return licenciaConducir;
    }

    public void setLicenciaConducir(boolean licenciaConducir) {
        this.licenciaConducir = licenciaConducir;
    }

    public String getTelefono() {
        return telefono;
    }

    public void setTelefono(String telefono) {
        this.telefono = telefono;
    }

    public Vehiculo getM_Vehiculo() {
        return m_Vehiculo;
    }

    public void setM_Vehiculo(Vehiculo m_Vehiculo) {
        this.m_Vehiculo = m_Vehiculo;
    }

    public Rol getM_Rol() {
        return m_Rol;
    }

    public void setM_Rol(Rol m_Rol) {
        this.m_Rol = m_Rol;
    }

}//end Usuario
