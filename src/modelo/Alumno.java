package modelo;

/**
 * @author David Salazar Mejia
 * @version 1.0
 * @created 07-feb.-2018 13:55:39<br>
 * Descripcion: Esta clase representa los datos de un alumno que herada de un
 * usuario para poder tener acceso al estacionamiento
 */
public class Alumno extends Usuario {

    /**
     * Carrera en la que se encuentra inscrito un alumno
     */
    private String carrera;

    /**
     * Paraescolar en el que se encuentra inscrito un alumno<br>
     * Nota: Pueda estar vacio en caso de que este ya no este incolucrado
     */
    private String paraescolar;

    /**
     * Asociacion de horario para conocer el horario del alumno y asi poder
     * ubicarlo
     */
    public Horario m_Horario;

    /**
     * Constructor para inicializar el objeto Alumno
     */
    public Alumno() {

    }
    
    /*
     **********************************************************************
     * Metodos para extraer y asignar los datos del alumno en conjunto con su usuario
     **********************************************************************
     */

    public String getCarrera() {
        return carrera;
    }

    public void setCarrera(String carrera) {
        this.carrera = carrera;
    }

    public String getParaescolar() {
        return paraescolar;
    }

    public void setParaescolar(String paraescolar) {
        this.paraescolar = paraescolar;
    }

    public Horario getM_Horario() {
        return m_Horario;
    }

    public void setM_Horario(Horario m_Horario) {
        this.m_Horario = m_Horario;
    }
   

}//end Alumno
