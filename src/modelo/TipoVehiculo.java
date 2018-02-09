package modelo;

/**
 * @author David Salazar Mejia
 * @version 1.0
 * @created 07-feb.-2018 13:55:51<br>
 * Descripcion: Esta clase identifica el tipo de vehiculo que ingresara al
 * estacionamiento de la institucion
 */
public class TipoVehiculo {

    /**
     * Identificador del tipo de vehiculo
     */
    private int idTipoVehiculo;

    /**
     * Nombre que se le asigna al tipo de vehiculo: 1. Coche<br>
     * 2. Moto<br>
     * 3. Cuatrimoto<br>
     * 4. Bicicleta
     */
    private String nombre;

    /**
     * Constructor para inicializar el objeto TipoVehiculo
     */
    public void TipoVehiculo() {

    }

    /*
     **********************************************************************
     * Metodos para extraer y asignar los datos del TipoVehiculo
     **********************************************************************
     */
    public int getIdTipoVehiculo() {
        return idTipoVehiculo;
    }

    public void setIdTipoVehiculo(int idTipoVehiculo) {
        this.idTipoVehiculo = idTipoVehiculo;
    }

    public String getNombre() {
        return nombre;
    }

    public void setNombre(String nombre) {
        this.nombre = nombre;
    }

}//end TipoVehiculo
