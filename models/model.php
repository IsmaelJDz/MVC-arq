<?php

    /**
     *
     */
    class EnlacePaginas
    {
        public function enlacesPaginaModel($enlacesModel)
        {

            if ($enlacesModel == "nosotros" || $enlacesModel == "servicios" || $enlacesModel == "servicios" || $enlacesModel == "contactenos") {
                $module = "views/modules/".$enlacesModel.".php";
            }

            return $module;
        }
    }


 ?>
