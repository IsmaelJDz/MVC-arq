<?php

    /**
     *
     */
    class EnlacePaginas
    {
        public function enlacesPaginaModel($enlacesModel)
        {

            if ($enlacesModel == "ingresar" || $enlacesModel == "usuarios" || $enlacesModel == "editar" || $enlacesModel == "salir") {
                $module = "views/modules/".$enlacesModel.".php";
            }

            elseif ($enlacesModel == "registro") {
                $module = "views/modules/registro.php";
            }
            elseif ($enlacesModel == "ok") {
                $module = "views/modules/registro.php";
            }
            else
            {
                $module = "views/modules/registro.php";
            }

            return $module;
        }
    }


 ?>
