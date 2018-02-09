package modelo;

import java.util.Date;

/**
 * @author David Salazar Mejia
 * @version 1.0
 * @created 07-feb.-2018 13:55:56<br>
 * Descripcion: Esta clase representa el control de acceso para los usuarios del
 * estacionamiento
 */
public class Acceso {

    /**
     * Identificador del acceso generado
     */
    private int idAcceso;

    /**
     * Fecha en la que se realiza el acceso
     */
    private Date fecha;

    /**
     * Hora de entrada en la que se realiza el acceso
     */
    private Date horaEntrada;

    /**
     * Hora de salida en la que se realiza el acceso
     */
    private Date horaSalida;

    /**
     * Asociación tipo anomalia que puede tener un acceso cuando un usuario asi lo
     * indica
     */
    private Anomalia m_Anomalia;

    /**
     * Cajo en el que se coloco el acceso del vehiculo
     */
    private Cajon m_Cajon;

    public Acceso() {

    }

    /********************************************************
     * Metodos para extraer y asignar los datos del objeto Acesso
     *
     *********************************************************/
    public int getIdAcceso() {
        return idAcceso;
    }

    public void setIdAcceso(int idAcceso) {
        this.idAcceso = idAcceso;
    }

    public Date getFecha() {
        return fecha;
    }

    public void setFecha(Date fecha) {
        this.fecha = fecha;
    }

    public Date getHoraEntrada() {
        return horaEntrada;
    }

    public void setHoraEntrada(Date horaEntrada) {
        this.horaEntrada = horaEntrada;
    }

    public Date getHoraSalida() {
        return horaSalida;
    }

    public void setHoraSalida(Date horaSalida) {
        this.horaSalida = horaSalida;
    }

    public Anomalia getM_Anomalia() {
        return m_Anomalia;
    }

    public void setM_Anomalia(Anomalia m_Anomalia) {
        this.m_Anomalia = m_Anomalia;
    }

    public Cajon getM_Cajon() {
        return m_Cajon;
    }

    public void setM_Cajon(Cajon m_Cajon) {
        this.m_Cajon = m_Cajon;
    }

}//end Acceso
