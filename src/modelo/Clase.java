package modelo;

/**
 * @author David Salazar Mejia
 * @version 1.0
 * @created 07-feb.-2018 13:55:38<br>
 * Descripción: Esta clase representa la clase en la que se encuentra un alumno
 * o un empleado en caso de que este sea un instructor
 */
public class Clase {

    /**
     * Identificador de la clase
     */
    private int idClase;
    
    /**
     * Nombre que se le asigno a la clase
     */
    private int nombreClase;
    
    /**
     * Salon en el que se impartira esa clase
     */
    private String salon;
    
    /**
     * Edificio en que el se ubica esa clase
     */
    private String edificio;

    /**
     * Constructor de Clase para inicializar el objeto
     */
    public Clase() {

    }

    /*
     *************************************************************************
     Metodos para extraer y asignar los datos de Clase
     **************************************************************************
     */
    
    public int getIdClase() {
        return idClase;
    }

    public void setIdClase(int idClase) {
        this.idClase = idClase;
    }

    public int getNombreClase() {
        return nombreClase;
    }

    public void setNombreClase(int nombreClase) {
        this.nombreClase = nombreClase;
    }

    public String getSalon() {
        return salon;
    }

    public void setSalon(String salon) {
        this.salon = salon;
    }

    public String getEdificio() {
        return edificio;
    }

    public void setEdificio(String edificio) {
        this.edificio = edificio;
    }

}//end Clase
