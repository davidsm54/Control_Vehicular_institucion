package modelo;

/**
 * @author David Salazar Mejia
 * @version 1.0
 * @created 07-feb.-2018 13:55:47<br>
 * Descripcion: Esta clase identifica el tipo de cajon al que pertenece un cajon
 * en todo el estacionamiento de la institucion
 */
public class TipoCajon {

    /**
     * Identificador del tipo de cajon
     */
    private int idTipoCajon;

    /**
     * Nombre que tiene tipo de cajon
     */
    private String nombre;

    /**
     * Constructor para inicializar el objeto TipoCajon
     */
    public TipoCajon() {

    }

    /*
     **********************************************************************
     * Metodos para extraer y asignar los datos del TipoCajon
     **********************************************************************
     */
    public int getIdTipoCajon() {
        return idTipoCajon;
    }

    public void setIdTipoCajon(int idTipoCajon) {
        this.idTipoCajon = idTipoCajon;
    }

    public String getNombre() {
        return nombre;
    }

    public void setNombre(String nombre) {
        this.nombre = nombre;
    }

}//end TipoCajon
