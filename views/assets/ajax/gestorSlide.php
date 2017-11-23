<?php
/**
 * Created by PhpStorm.
 * User: Developer
 * Date: 22/11/2017
 * Time: 10:17 AM
 */
require_once "../../../models/slideModel.php";
require_once "../../../controllers/backend/SlideController.php";

class Ajax{
    public $nombreImagen; //Nombre Original de la Imagen
    public $imagenTemporal; //Imagen Original

    public function gestorSlideAjax(){
        $datos = array("nombreImagen" => $this->nombreImagen, "imagenTemporal" => $this->imagenTemporal);
        $respuesta = (new SlideController)->mostrarImagenController($datos);
        echo $respuesta;
    }
}

//Objecto Imgen
$a = new Ajax();
$a -> nombreImagen = $_FILES["imagen"]["name"];
$a -> imagenTemporal = $_FILES["imagen"]["tmp_name"];
$a -> gestorSlideAjax();