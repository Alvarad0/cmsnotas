<?php
/**
 * Created by PhpStorm.
 * User: Developer
 * Date: 21/11/2017
 * Time: 07:08 AM
 */
class Conexion{
    public function con(){
        $link = new PDO("mysql:host=localhost;dbname=cms","root","");
        return $link;
        //var_dump($link); Test de Conexion
    }
}
/*$a = new Conexion();
$a->con();*/