<?php
/**
 * Created by PhpStorm.
 * User: Developer
 * Date: 16/11/2017
 * Time: 03:24 PM
 */
require_once "models/slideModel.php";
require_once "controllers/backend/SlideController.php";
require_once "controllers/frontend/HomeController.php";
$home = new HomeController();
$home->home();