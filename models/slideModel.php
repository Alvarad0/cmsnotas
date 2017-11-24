<?php
/**
 * Created by PhpStorm.
 * User: Developer
 * Date: 22/11/2017
 * Time: 10:18 AM
 */
require_once "conexion.php";

class SlideModel{
    public function subirImagenModel($datosModel){
        $stmt =  (new Conexion)->con()->prepare("CALL insertarImagenSlide_sp(:ruta)");
        $stmt->bindParam(":ruta", $datosModel, PDO::PARAM_STR);
        if($stmt->execute()){
            return "ok";
        }else{
            return "error";
        }
        $stmt->close();
    }

    public function mostrarImagenModel($ruta){
        $stmt = (new Conexion)->con()->prepare("CALL cargarImagenSlide(:ruta)");
        $stmt->bindParam(":ruta", $ruta, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch();
        $stmt->close();
    }

    #Visualizar todas las imagenes de la BD que pertenecen al Slide
    public function mostrarImagenesModel($tabla){
        $stmt = (new Conexion)->con()->prepare("CALL previewSlide_sp()");
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->close();
    }

    #Eliminar Item Slide
    public function eliminarItemSlideModel($datosModel){
        $stmt = (new Conexion)->con()->prepare("CALL eliminarImagenSlide_sp(:id)");
        $stmt->bindParam(":id", $datosModel["idSlide"], PDO::PARAM_INT);
        if($stmt->execute()){
            return "ok";
        }else{
            return "error";
        }
        $stmt->close();
    }

    #Actualizar Titulo y Descripcion del Item Slide
    public function actualizarItemSlideModel($datosModel, $tabla){
        $stmt = (new Conexion)->con()->prepare("CALL actualizarContenidoSlide_sp(:id, :titulo, :descripcion)");
        $stmt->bindParam(":id", $datosModel["id"], PDO::PARAM_INT);
        $stmt->bindParam(":titulo", $datosModel["titulo"], PDO::PARAM_STR);
        $stmt->bindParam(":descripcion", $datosModel["descripcion"], PDO::PARAM_STR);
        if($stmt->execute()){
            return "ok";
        }else{
            return "Error";
        }
    }

    #Mostrar Actualización de Titulo y Descripción
    public function actualizacionItemSlideModel($datosModel){
        $stmt = (new Conexion)->con()->prepare("CALL contenidoSlide_sp(:id)");
        $stmt->bindParam(":id", $datosModel["id"], PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch();
        $stmt->close();
    }

    #Guardar Orden del Slide
    public function guardarOrdenItemSlideModel($datosModel){
        $stmt = (new Conexion)->con()->prepare("CALL guardarOrdenSlide_sp(:orden, :id)");
        $stmt->bindParam(":orden", $datosModel["ordenItem"], PDO::PARAM_INT);
        $stmt->bindParam(":id", $datosModel["ordenSlide"], PDO::PARAM_INT);
        if($stmt->execute()){
            return "ok";
        }else{
            return "else";
        }
        $stmt->close();
    }

    #Mostrar imagenes del slide de acuerdo al orden asignado
    #Mostrar imagenes en el Slide del Fron-End
    public function itemSlideOrneadosModel(){
        $stmt = (new Conexion)->con()->prepare("CALL previewSlide_sp()");
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->close();
    }
}