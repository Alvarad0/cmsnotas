<?php
/**
 * Created by PhpStorm.
 * User: Developer
 * Date: 18/11/2017
 * Time: 12:23 PM
 */
require_once "models/enlaces.php";
require_once "models/ingreso.php";
require_once "models/slideModel.php";

require_once "controllers/backend/SlideController.php";
require_once "controllers/backend/TemplateController.php";
require_once "controllers/backend/EnlacesController.php";
require_once "controllers/backend/IngresoControllers.php";

$template = new TemplateController();
$template -> template();