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
<!-- Galería Administrable-->
<div id="galeria" class="col-lg-10 col-md-10 col-sm-9 col-xs-12">
<hr>
<p><span class="fa fa-arrow-down"></span>  Arrastra aquí tu imagen, tamaño recomendado: 1600px * 600px</p>
	<ul id="lightbox">
		<li>
			<span class="fa fa-times"></span>
			<a rel="grupo" href="/views/assets/images/backend/galeria/photo01.jpg">
			<img src="/views/assets/images/backend/galeria/photo01.jpg">
			</a>
		</li>
		<li>
			<span class="fa fa-times"></span>
			<a rel="grupo" href="/views/assets/images/backend/galeria/photo02.jpg">
			<img src="/views/assets/images/backend/galeria/photo02.jpg">
			</a>		
		</li>
		<li>
			<span class="fa fa-times"></span>
			<a rel="grupo" href="/views/assets/images/backend/galeria/photo03.jpg">
			<img src="/views/assets/images/backend/galeria/photo03.jpg">
			</a>		
		</li>
		<li>
			<span class="fa fa-times"></span>
			<a rel="grupo" href="/views/assets/images/backend/galeria/photo04.jpg">
			<img src="/views/assets/images/backend/galeria/photo04.jpg">
			</a>		
		</li>
		<li>
			<span class="fa fa-times"></span>
			<a rel="grupo" href="/views/assets/images/backend/galeria/photo01.jpg">
			<img src="/views/assets/images/backend/galeria/photo01.jpg">
			</a>
		</li>
		<li>
			<span class="fa fa-times"></span>
			<a rel="grupo" href="/views/assets/images/backend/galeria/photo02.jpg">
			<img src="/views/assets/images/backend/galeria/photo02.jpg">
			</a>		
		</li>
		<li>
			<span class="fa fa-times"></span>
			<a rel="grupo" href="/views/assets/images/backend/galeria/photo03.jpg">
			<img src="/views/assets/images/backend/galeria/photo03.jpg">
			</a>		
		</li>
		<li>
			<span class="fa fa-times"></span>
			<a rel="grupo" href="/views/assets/images/backend/galeria/photo04.jpg">
			<img src="/views/assets/images/backend/galeria/photo04.jpg">
			</a>		
		</li>
	</ul>
	<button class="btn btn-warning pull-right" style="margin:10px 30px">Ordenar Imágenes</button>
</div>