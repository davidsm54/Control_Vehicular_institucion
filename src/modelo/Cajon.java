package modelo;

/**
 * @author David Salazar Mejia
 * @version 1.0
 * @created 07-feb.-2018 13:55:44<br>
 * Descripción: Esta clase representa el cajo en el que se encuentra un vehiculo
 * cuando un usuario concedio el acceso
 */
public class Cajon {

    /**
     * Identificador del cajon empleado
     */
    private int idCajon;

    /**
     * Ubicacion donde se encuentra el cajon en todo el estacionamiento
     */
    private String ubicacion;

    /**
     * Indica si el cajon se encuentra ocupado
     */
    private boolean ocupado;

    /**
     * Indica que tipo de cajon es el que se concedio el acceso
     */
    public TipoCajon m_TipoCajon;

    /**
     * Constructor de Cajon para inicializar el objeto
     */
    public Cajon() {

    }

    /*
     *************************************************************************
     Metodos para extraer y asignar los datos de Cajon
     **************************************************************************
     */
    public int getIdCajon() {
        return idCajon;
    }

    public void setIdCajon(int idCajon) {
        this.idCajon = idCajon;
    }

    public String getUbicacion() {
        return ubicacion;
    }

    public void setUbicacion(String ubicacion) {
        this.ubicacion = ubicacion;
    }

    public boolean isOcupado() {
        return ocupado;
    }

    public void setOcupado(boolean ocupado) {
        this.ocupado = ocupado;
    }

    public TipoCajon getM_TipoCajon() {
        return m_TipoCajon;
    }

    public void setM_TipoCajon(TipoCajon m_TipoCajon) {
        this.m_TipoCajon = m_TipoCajon;
    }
    
}//end Cajon
