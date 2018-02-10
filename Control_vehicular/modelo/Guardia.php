<?php

require_once ('..\Usuario.php');

/**
 * @author David Salazar Mejia
 * @version 1.0
 * @created 07-feb.-2018 13:55:42<br>
 * Descripcion: Esta clase representa los datos de un Guardia de seguridad que
 * herada de un usuario para poder tener acceso en el sistema y asi obtener su
 * rol
 */
class Guardia extends Usuario {

    /**
     * Constructor para inicializar el objeto Guardia
     */
    function __construct() {
        
    }

}

?>