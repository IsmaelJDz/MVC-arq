<?php

    /**
     * Aplicando el Patron MVC
     * ISMAELJDz
     */
    class MvcController
    {

        #LLAMADA A LA PLANTILLA
        #------------------------

        public function plantilla()
        {
            include "views/template.php";
        }

        #INTERACCION DEL USUARIO
        #------------------------

        public function enlacesPaginasController()
        {
            # code...
            $enlacesController = $_GET["action"];

            $respuesta = EnlacePaginas::enlacesPaginaModel($enlacesController);

            include $respuesta;
        }
    }


 ?>
