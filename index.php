<?php

#EL INDEX: En él mostraremos la salida de ls vistas al usuario y enviaremos acciones que el usuario ejecute

    require_once('controllers/controller.php');

    $temp = new MvcController();
    $temp->plantilla();

 ?>
