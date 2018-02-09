package modelo;

import java.util.Date;
import java.util.List;

/**
 * @author David Salazar Mejia
 * @version 1.0
 * @created 07-feb.-2018 13:55:35<br>
 * Descripcion: Esta clase identifica el horario que tiene un alumno y empleado
 * en caso de ser profesor
 */
public class Horario {

    /**
     * Identificador del horario
     */
    private int idHorario;

    /**
     * Hora en la que esta asignado
     */
    private Date hora;

    /**
     * Asociacion para conocer las clase que componen el horario del alumno o un
     * empleado en caso de ser profesor
     */
    private List<Clase> lClase;

    /**
     * Constructor para inicializar el objeto Horario
     */
    public Horario() {

    }

    /*
     **********************************************************************
     * Metodos para extraer y asignar los datos del Horario
     **********************************************************************
     */
    public int getIdHorario() {
        return idHorario;
    }

    public void setIdHorario(int idHorario) {
        this.idHorario = idHorario;
    }

    public Date getHora() {
        return hora;
    }

    public void setHora(Date hora) {
        this.hora = hora;
    }

    public List<Clase> getlClase() {
        return lClase;
    }

    public void setlClase(List<Clase> lClase) {
        this.lClase = lClase;
    }

}//end Horario
