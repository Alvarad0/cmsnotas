<?php
session_start();
if(!$_SESSION["validar"]){
	header("location:ingreso");
	exit();
}
include "views/backend/layouts/partials/botonera.php";
include "views/backend/layouts/partials/cabezote.php";
?>
<!-- Slide Administrable -->
<div id="imgSlide" class="col-lg-10 col-md-10 col-sm-9 col-xs-12">
<hr>
<p><span class="fa fa-arrow-down"></span>  Arrastra aquí tu imagen, tamaño recomendado: 1600px * 600px</p>
	<ul id="columnasSlide">
        <?php
        $respuesta = new SlideController();
        $respuesta->mostrarImagenesController();
        ?>
	</ul>
	<button id="ordenarSlide" class="btn btn-warning pull-right" style="margin:10px 30px">Ordenar Slides</button>
	<button id="guardarSlide" class="btn btn-primary pull-right" style="display:none; margin:10px 30px">Guardar Orden Slides</button>
</div>
<div id="textoSlide" class="col-lg-10 col-md-10 col-sm-9 col-xs-12">
<hr>
	<ul id="ordenarTextSlide">
        <?php
        $respuesta = new SlideController();
        $respuesta->editorSlideController();
        ?>
	</ul>
</div>
<div id="slide" class="col-lg-10 col-md-10 col-sm-9 col-xs-12">
	<hr>
	<ul>
        <?php
        $respuesta = new SlideController();
        $respuesta->cargarSlideController();
        ?>
    </ul>
    <ol id="indicadores">
	</ol>
	<div id="slideIzq"><span class="fa fa-chevron-left"></span></div>
	<div id="slideDer"><span class="fa fa-chevron-right"></span></div>
</div>