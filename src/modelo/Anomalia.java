package modelo;

import java.util.Date;

/**
 * @author David Salazar Mejia
 * @version 1.0
 * @created 07-feb.-2018 13:55:54<br>
 * Descripcion: Esta clase representa las anomalias que pueden generarse cuando
 * un usuario asi lo indica
 */
public class Anomalia {

    /**
     * Identificador de la anomalia
     */
    private int idAnomalia;

    /**
     * Folio de la anomalia<br>
     * Nota: Puede llevar formato especifo para asociarlo con la fecha
     */
    private int folio;

    /**
     * Estado en el que se encuentra esta anomalia
     */
    private boolean estado;
    
    /**
     * Descripción de la anomalia
     */
    private String descripcion;
    
    /**
     * Hora en la que se registra la anomalia<br>
     * Nota: La anomalia se debe de registrar en el mismo día de acceso
     */
    private Date hora;

    /**
     * Constructor de la anomalia para inicializar el objeto
     */
    public Anomalia() {

    }

    /*
     *************************************************************************
     Metodos para extraer y asignar los datos de la Anomalia
     **************************************************************************
     */
    
    public int getIdAnomalia() {
        return idAnomalia;
    }

    public void setIdAnomalia(int idAnomalia) {
        this.idAnomalia = idAnomalia;
    }

    public int getFolio() {
        return folio;
    }

    public void setFolio(int folio) {
        this.folio = folio;
    }

    public boolean isEstado() {
        return estado;
    }

    public void setEstado(boolean estado) {
        this.estado = estado;
    }

    public String getDescripcion() {
        return descripcion;
    }

    public void setDescripcion(String descripcion) {
        this.descripcion = descripcion;
    }

    public Date getHora() {
        return hora;
    }

    public void setHora(Date hora) {
        this.hora = hora;
    }

}//end Anomalia
