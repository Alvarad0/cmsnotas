<?php
/**
 * Created by PhpStorm.
 * User: Developer
 * Date: 22/11/2017
 * Time: 10:18 AM
 */
class SlideController{
    #Cargar y Mostrar Imagen del Slide
    public function subirImagenController($datosController){
        $tamaño = getimagesize($datosController["imagenTemporal"]);
        //var_dump($tamaño);
        list($ancho, $alto) = getimagesize($datosController["imagenTemporal"]);
        if($ancho < 1600 || $alto < 600){
            return $respuesta = 0;
        }else{
            $aleatorio = mt_rand(100, 999);
            $ruta = "../../../views/assets/images/backend/slide/slide" . $aleatorio . ".jpg";
            $origen = imagecreatefromjpeg($datosController["imagenTemporal"]);
            $destino = imagecrop($origen, ["x" => 0, "y" => 0, "width" => 1600, "height" => 600]);
            imagejpeg($destino, $ruta);
            (new SlideModel)->subirImagenModel($ruta, "slide");
            $respuesta = (new SlideModel)->mostrarImagenController($ruta, "slide");
            if(empty($respuesta["titulo"]))
                $respuesta["titulo"]="";
            if(empty($respuesta["descripcion"]))
                $respuesta["descripcion"]="";
            $enviarDatos = array("ruta" => $respuesta["ruta"], "titulo" => $respuesta["titulo"], "descripcion" => $respuesta["descripcion"]);
            return $respuesta = json_encode($enviarDatos);
        }
    }
    #Visualizar todas las imagenes de la BD que pertenecen al Slide
    public function mostrarImagenesController(){
        $respuesta = (new SlideModel)->mostrarImagenesModel("slide");
        foreach ($respuesta as $row => $item)
        echo '<li class="bloqueSlide">
              <span class="fa fa-times"></span>
              <img src="'. substr($item["ruta"], 8) .'" class="handleImg"></li>';
    }

    public function editorSlideController(){
        $respuesta = (new SlideModel)->mostrarImagenesModel("slide");
        foreach ($respuesta as $row => $item)
            echo '<li>
			      <span class="fa fa-pencil" style="background:blue"></span>
			      <img src="'. substr($item["ruta"], 8) .'" style="float:left; margin-bottom:10px" width="80%">
			      <h1>'. $item["titulo"]. '</h1>
			      <p>'. $item["descripcion"] .'</p></li>';
    }
}