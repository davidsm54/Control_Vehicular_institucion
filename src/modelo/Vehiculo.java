package modelo;

/**
 * @author David Salazar Mejia
 * @version 1.0
 * @created 07-feb.-2018 13:55:49<br>
 * Descripción: Esta clase identifica los datos de un vehiculo que ingresara al
 * estacionamiento por un usuario que esta registardo en el sistema
 */
public class Vehiculo {

    /**
     * Identificador del vehiculo
     */
    private int idVehiculo;
    
    /**
     * Marca que tiene el vehiculo.
     */
    private String marca;
    
    /**
     * Modelo que tiene el vehiculo
     */
    private String modelo;
    
    /**
     * Color con el esta pintado el vehiculo
     */
    private String color;
    
    /**
     * Numero de serie con el que cuenta un vehiculo
     */
    private String serie;
    
    /**
     * Codigo de la placa que identifica al vehiculo.<br>
     * Nota: El vehiculo tipo bicicleta puede tener o no este atributo
     */
    private String placa;
    
    /**
     * Asociacion que tiene un vehiculo con su tipo de vehiculo
     */
    public TipoVehiculo m_TipoVehiculo;

    /**
     * Constructor para inicializar el objeto Vehiculo
     */
    public Vehiculo() {
    }

     /*
     **********************************************************************
     * Metodos para extraer y asignar los datos del Vehiculo
     **********************************************************************
     */
    public int getIdVehiculo() {
        return idVehiculo;
    }

    public void setIdVehiculo(int idVehiculo) {
        this.idVehiculo = idVehiculo;
    }

    public String getMarca() {
        return marca;
    }

    public void setMarca(String marca) {
        this.marca = marca;
    }

    public String getModelo() {
        return modelo;
    }

    public void setModelo(String modelo) {
        this.modelo = modelo;
    }

    public String getColor() {
        return color;
    }

    public void setColor(String color) {
        this.color = color;
    }

    public String getSerie() {
        return serie;
    }

    public void setSerie(String serie) {
        this.serie = serie;
    }

    public String getPlaca() {
        return placa;
    }

    public void setPlaca(String placa) {
        this.placa = placa;
    }

    public TipoVehiculo getM_TipoVehiculo() {
        return m_TipoVehiculo;
    }

    public void setM_TipoVehiculo(TipoVehiculo m_TipoVehiculo) {
        this.m_TipoVehiculo = m_TipoVehiculo;
    }
   
}//end Vehiculo
