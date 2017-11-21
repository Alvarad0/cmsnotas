<?php
/**
 * Created by PhpStorm.
 * User: Developer
 * Date: 21/11/2017
 * Time: 07:14 AM
 */
class EnlacesModels
{
    public function enlacesModel($enlaces)
    {
        if ($enlaces == "inicio" ||
            $enlaces == "ingreso" ||
            $enlaces == "slide" ||
            $enlaces == "articulos" ||
            $enlaces == "galeria" ||
            $enlaces == "videos" ||
            $enlaces == "suscriptores" ||
            $enlaces == "mensajes" ||
            $enlaces == "perfil" ||
            $enlaces == "salir") {
            $module = "views/backend/layouts/partials/" . $enlaces . ".php";
        } else if ($enlaces == "index") {
            $module = "views/backend/layouts/partials/ingreso.php";
        } else {
            $module = "views/backend/layouts/partials/ingreso.php";
        }
        return $module;
    }
}