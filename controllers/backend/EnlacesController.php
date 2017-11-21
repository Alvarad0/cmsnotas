<?php
/**
 * Created by PhpStorm.
 * User: Developer
 * Date: 21/11/2017
 * Time: 07:20 AM
 */
class Enlaces
{
    public function EnlacesController()
    {
        if (isset($_GET["action"])) {
            $enlaces = $_GET["action"];
        } else {
            $enlaces = "index";
        }
        $respuesta = (new EnlacesModels)->enlacesModel($enlaces);
        include $respuesta;
    }
}