<?php
/**
 * Created by PhpStorm.
 * User: Developer
 * Date: 22/11/2017
 * Time: 10:17 AM
 */
require_once "../../../models/slideModel.php";
require_once "../../../controllers/backend/SlideController.php";

#Clase para subir imagen y previamente visualizarla
class Ajax{
    public $nombreImagen; //Nombre Original de la Imagen
    public $imagenTemporal; //Imagen Original

    public function gestorSlideAjax(){
        $datos = array("nombreImagen" => $this->nombreImagen, "imagenTemporal" => $this->imagenTemporal);
        $respuesta = (new SlideController)->subirImagenController($datos);
        echo $respuesta;
    }
    #Eliminar Item Slide
    public $idSlide;
    public $rutaSlide;
    public function eliminarItemSlideAjax(){
        $datos = array("idSlide" => $this->idSlide, "rutaSlide" => $this->rutaSlide);
        $respuesta = (new SlideController)->eliminarItemSlideController($datos);
        echo $respuesta;
    }
    #Actualizar Titulo y Descripción del Item Slide
    public $id;
    public $titulo;
    public $descripcion;
    public function actualizarItemSlideAjax(){
        $datos = array("id" => $this->id, "titulo" => $this->titulo, "descripcion" => $this->descripcion);
        $respuesta = (new SlideController)->actualizarItemSlideController($datos);
        echo $respuesta;
    }
}

#Objecto Subir Imagen
if (isset($_FILES["imagen"]["name"])){
    $a = new Ajax();
    $a -> nombreImagen = $_FILES["imagen"]["name"];
    $a -> imagenTemporal = $_FILES["imagen"]["tmp_name"];
    $a -> gestorSlideAjax();
}

#Objecto Eliminar Item Slide
if(isset($_POST["idSlide"])){
    $b = new Ajax();
    $b->idSlide = $_POST["idSlide"];
    $b->rutaSlide = $_POST["rutaSlide"];
    $b->eliminarItemSlideAjax();
}

#Objecto Actualizar Titutlo y Descripcion del Item Slide
if(isset($_POST["id"])){
    $c = new Ajax();
    $c->id = $_POST["id"];
    $c->titulo = $_POST["titulo"];
    $c->descripcion = $_POST["descripcion"];
    $c->actualizarItemSlideAjax();
}