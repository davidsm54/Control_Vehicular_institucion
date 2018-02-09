package modelo;

/**
 * @author David Salazar Mejia
 * @version 1.0
 * @created 07-feb.-2018 13:55:33<br>
 * Descripcion: Esta clase representa los datos de un Empleado que herada de un
 * usuario para poder tener acceso al estacionamiento
 */
public class Empleado extends Usuario {

    /**
     * Area en la que se encuentra inscrito ese empleado
     */
    private String area;

    /**
     * Asociacion de horario para conocer el horario del Empleado en caso de que
     * se un profesor y asi poder ubicarlo
     */
    public Horario m_Horario;

    /**
     * Constructor para inicializar el objeto Empleado
     */
    public Empleado() {

    }

    /*
     **********************************************************************
     * Metodos para extraer y asignar los datos del Empleado en conjunto con su usuario
     **********************************************************************
     */
    public String getArea() {
        return area;
    }

    public void setArea(String area) {
        this.area = area;
    }

    public Horario getM_Horario() {
        return m_Horario;
    }

    public void setM_Horario(Horario m_Horario) {
        this.m_Horario = m_Horario;
    }

}//end Empleado
