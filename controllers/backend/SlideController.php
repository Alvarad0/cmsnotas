<?php
/**
 * Created by PhpStorm.
 * User: Developer
 * Date: 22/11/2017
 * Time: 10:18 AM
 */
class SlideController{
    public function mostrarImagenController($datosController){
        $tamaño = getimagesize($datosController["imagenTemporal"]);
        //var_dump($tamaño);
        list($ancho, $alto) = getimagesize($datosController["imagenTemporal"]);
        if($ancho < 1600 || $alto < 600){
            return $respuesta = 0;
        }else{
            $aleatorio = mt_rand(100, 999);
            $ruta = "../../../views/assets/images/backend/slide/slide" . $aleatorio . ".jpg";
            $origen = imagecreatefromjpeg($datosController["imagenTemporal"]);
            imagejpeg($origen, $ruta);
            $respuesta = (new SlideModel)->mostrarImagenModel($ruta, "slide");
            return $respuesta;
        }
    }
}