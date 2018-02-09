package modelo;

/**
 * @author David Salazar Mejia
 * @version 1.0
 * @created 07-feb.-2018 13:55:30<br>
 * Descripcion: Esta clase indica el rol que tiene un usuario en el sistema
 */
public class Rol {

    /**
     * Identificador que tiene el rol
     */
    private int idRol;

    /**
     * Nombre por default que tiene el rol
     */
    private String nombre;

    /**
     * Constructor para inicializar el objeto Rol
     */
    public Rol() {

    }

    /*
     **********************************************************************
     * Metodos para extraer y asignar los datos del Rol
     **********************************************************************
     */
    public int getIdRol() {
        return idRol;
    }

    public void setIdRol(int idRol) {
        this.idRol = idRol;
    }

    public String getNombre() {
        return nombre;
    }

    public void setNombre(String nombre) {
        this.nombre = nombre;
    }

}//end Rol
