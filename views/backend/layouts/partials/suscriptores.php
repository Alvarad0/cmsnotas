<?php
ob_start();
session_start();
if(!$_SESSION["validar"]){
  header("location:ingreso");
  exit();
  ob_end_clean();
}
include "views/backend/layouts/partials/botonera.php";
include "views/backend/layouts/partials/cabezote.php";
?>
<!-- Suscriptores -->
<div id="suscriptores" class="col-lg-10 col-md-10 col-sm-9 col-xs-12">
 <div>
	<table id="tablaSuscriptores" class="table table-striped dt-responsive nowrap">
    <thead>
      <tr>
        <th>Usuario</th>
        <th>Contraseña</th>
        <th>Email</th>
        <th>Acciones</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
        <td><span class="btn btn-danger fa fa-times quitarSuscriptor"></span></td>
        <td></td>
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
        <td><span class="btn btn-danger fa fa-times quitarSuscriptor"></span></td>
        <td></td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
        <td><span class="btn btn-danger fa fa-times quitarSuscriptor"></span></td>
        <td></td>
      </tr>
        <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
        <td><span class="btn btn-danger fa fa-times quitarSuscriptor"></span></td>
        <td></td>
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
        <td><span class="btn btn-danger fa fa-times quitarSuscriptor"></span></td>
        <td></td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
        <td><span class="btn btn-danger fa fa-times quitarSuscriptor"></span></td>
        <td></td>
      </tr>
    </tbody>
  </table>
  <button class="btn btn-warning pull-right" style="margin:20px;">Imprimir Suscriptores</button>
  </div>
</div>