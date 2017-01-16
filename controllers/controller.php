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
            if (isset($_GET["action"])){
                $enlacesController = $_GET["action"];
            }

            else{
                $enlacesController = "inicio";
            }

            $respuesta = EnlacePaginas::enlacesPaginaModel($enlacesController);

            include $respuesta;
        }

        #REGISTRO DE usuarios
        #-------------------------
        public function registroUsuarioController()
        {

            if (isset($_POST['usuario'])) {
                # code...
                $arrayDatos = array('usuario' => $_POST['usuario'],
                                'password' => $_POST['password'],
                                'email' => $_POST['email'] );

                $respuesta = Datos::registroUsuarioModel($arrayDatos, 'usuarios');
                echo $respuesta;
            }

        }
    }


 ?>
