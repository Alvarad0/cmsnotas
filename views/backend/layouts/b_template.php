<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BackEnd</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="/views/assets/images/frotend/icono.jpg">
    <link rel="stylesheet" href="/views/assets/css/frontend/bootstrap.min.css">
    <link rel="stylesheet" href="/views/assets/css/backend/style.css">
    <link rel="stylesheet" href="/views/assets/css/frontend/fonts.css">
    <link rel="stylesheet" href="/views/assets/css/backend/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="/views/assets/css/backend/responsive.bootstrap.min.css">
    <link rel="stylesheet" href="/views/assets/css/backend/jquery-ui.min.css">
    <link rel="stylesheet" href="/views/assets/css/backend/sweetalert.css">
    <link rel="stylesheet" href="/views/assets/css/frontend/cssFancybox/jquery.fancybox.css">
    <script src="views/assets/js/frontend/fontawesome.js"></script>
    <script src="/views/assets/js/frontend/jquery-2.2.0.min.js"></script>
    <script src="/views/assets/js/frontend/bootstrap.min.js"></script>
    <script src="/views/assets/js/frontend/jquery.fancybox.js"></script>
    <script src="/views/assets/js/backend/jquery.dataTables.min.js"></script>
    <script src="/views/assets/js/backend/dataTables.bootstrap.min.js"></script>
    <script src="/views/assets/js/backend/dataTables.responsive.min.js"></script>
    <script src="/views/assets/js/backend/responsive.bootstrap.min.js"></script>
    <script src="/views/assets/js/backend/jquery-ui.min.js"></script>
    <script src="/views/assets/js/backend/sweetalert.min.js"></script>
</head>
<body>
<div class="container-fluid">
    <section class="row">
        <!-- Columna Contenido -->
        <?php
        $modulos = new Enlaces();
        $modulos->EnlacesController();
        ?>
    </section>
</div>
<script src="views/assets/js/backend/script.js"></script>
<script src="views/assets/js/backend/validarIngreso.js"></script>
<script src="views/assets/js/backend/gestorSlide.js"></script>
</body>
</html>