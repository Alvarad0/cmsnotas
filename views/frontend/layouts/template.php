<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CMS-Notas</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="views/assets/images/frotend/icono.jpg">
	<link rel="stylesheet" href="views/assets/css/frontend/bootstrap.min.css">
	<link rel="stylesheet" href="views/assets/css/frontend/style.css">
	<link rel="stylesheet" href="views/assets/css/frontend/fonts.css">
	<link rel="stylesheet" href="views/assets/css/frontend/cssFancybox/jquery.fancybox.css">
    <script src="views/assets/js/frontend/fontawesome.js"></script>
	<script src="views/assets/js/frontend/jquery-2.2.0.min.js"></script>
	<script src="views/assets/js/frontend/bootstrap.min.js"></script>
	<script src="views/assets/js/frontend/jquery.fancybox.js"></script>
	<script src="views/assets/js/frontend/animatescroll.js"></script>
	<script src="views/assets/js/frontend/jquery.scrollUp.js"></script>
</head>
<body>
	<div class="container-fluid">
        <!--Header-->
		<?php include "partials/cabezote.php"; ?>
        <!--Slide-->
        <?php include "partials/slide.php"; ?>
        <!--Top-->
        <?php include "partials/top.php"; ?>
        <!--Galeria-->
        <?php include "partials/galeria.php"; ?>
        <!--Sección Articulos-->
        <?php include "partials/articulos.php"; ?>
        <!--Sección videos-->
        <?php include "partials/videos.php"; ?>
        <!--Contactanos-->
        <?php include "partials/contactenos.php"; ?>
        <!--Articulo Modal-->
        <?php include "partials/articuloModal.php"; ?>
</div>
<script src="views/assets/js/frontend/script.js"></script>
</body>
</html>
