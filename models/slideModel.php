<?php
/**
 * Created by PhpStorm.
 * User: Developer
 * Date: 22/11/2017
 * Time: 10:18 AM
 */
require_once "conexion.php";

class SlideModel{
    public function subirImagenModel($datosModel, $tabla){
        $stmt =  (new Conexion)->con()->prepare("INSERT INTO $tabla (ruta) VALUE (:ruta)");
        $stmt->bindParam(":ruta", $datosModel, PDO::PARAM_STR);
        if($stmt->execute()){
            return "ok";
        }else{
            return "error";
        }
        $stmt->close();
    }

    public function mostrarImagenModel($ruta, $tabla){
        $stmt = (new Conexion)->con()->prepare("SELECT id, ruta, titulo, descripcion FROM $tabla WHERE ruta = :ruta");
        $stmt->bindParam(":ruta", $ruta, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch();
        $stmt->close();
    }

    #Visualizar todas las imagenes de la BD que pertenecen al Slide
    public function mostrarImagenesModel($tabla){
        $stmt = (new Conexion)->con()->prepare("SELECT id, ruta, titulo, descripcion FROM $tabla ORDER BY orden ASC ");
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->close();
    }

    #Eliminar Item Slide
    public function eliminarItemSlideModel($datosModel, $tabla){
        $stmt = (new Conexion)->con()->prepare("DELETE FROM slide where id = :id");
        $stmt->bindParam(":id", $datosModel["idSlide"], PDO::PARAM_INT);
        if($stmt->execute()){
            return "ok";
        }else{
            return "error";
        }
        $stmt->close();

    }
}