<?php

    require_once('conexion.php');

    class Datos extends Conexion{

        public function registroUsuarioModel($datosModel, $table)
        {
            # code...
            $stmt = Conexion::conectar()->prepare("INSERT INTO $table (user, password, email) VALUES (:usuario, :password, :email)");

            $stmt->bindParam(":usuario", $datosModel['usuario'], PDO::PARAM_STR);
            $stmt->bindParam(":password", $datosModel['password'], PDO::PARAM_STR);
            $stmt->bindParam(":email", $datosModel['email'], PDO::PARAM_STR);

            if ($stmt->execute()) {
                return "success";
            }
            else{ return "error";}
        }

    }

 ?>
