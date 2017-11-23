//Tamaño de la caja de la carga de imagenes del Slide
if($("#columnasSlide").html() == 0){
    $("#columnasSlide").css({"height" : "100px"});
}else{
    $("#columnasSlide").css({"height" : "auto"});
}
 //Subir Imagen
$("#columnasSlide").on("dragover", function (e) {
    e.preventDefault();//Detener accion por defecto
    e.stopPropagation();//Detener accion del DOM por defecto
    $("#columnasSlide").css({"background" : "url(views/assets/images/backend/pattern.jpg)"});
})
//Soltar Imagen
$("#columnasSlide").on("drop", function (e) {
    e.preventDefault();
    e.stopPropagation();
    $("#columnasSlide").css({"background" : "white"});
    //Recibir imagen soltada
    var archivo = e.originalEvent.dataTransfer.files;
    var imagen = archivo[0];
    var imagenSize = imagen.size;
    //Validar peso de la imagen
    if(Number(imagenSize) > 2000000){
        $("#columnasSlide").before('<div class = "alert alert-warning alerta text-center">El archivo excede el peso permitido de 2MB ')
    }{
        $(".alerta").remove();
    }
    //Validar formato de imagen
    var imagenType = imagen.type;
        if(imagen.type == "image/jpeg" || imagen.type == "image/png"){
            $(".alerta").remove();
        }else{
            $("#columnasSlide").before('<div class = "alert alert-warning alerta text-center">El formato debe ser jpg ó png')
        }
    //Subir imagen al servidor
    if(Number(imagenSize) < 2000000 && imagenType == "image/jpeg" || imagentype == "image/png"){
            var datos = new FormData();
            datos.append("imagen", imagen);
            //Enviar imagen por ajax
            $.ajax({
                url: "views/assets/ajax/gestorSlide.php",
                method: "POST",
                data: datos,
                cache: false,
                contentType: false,
                processData: false,
                dataType: "json",
                beforeSend: function () {
                    $("#columnasSlide").before('<img src="views/assets/images/backend/status.gif" id="status">');
                },
                success: function (respuesta) {
                    $("#status").remove();
                    if(respuesta == 0){
                        $("#columnasSlide").before('<div class = "alert alert-warning status text-center">La imagen es inferior a 1600px X 600px')
                    }else{
                        console.log("ruta" + respuesta["ruta"])
                        $("#columnasSlide").css({"height" : "auto"});
                        $("#columnasSlide").append('<li id="'+ respuesta["id"] +'" class="bloqueSlide"><span class="fa fa-times eliminarSlide"></span><img src="' + respuesta["ruta"].slice(8) + '" class="handleImg"></li>')
                        $("#ordenarTextSlide").append('<li><span class="fa fa-pencil" style="background: blue"></span><img src="'+respuesta["ruta"].slice(8)+'" style="float: left; margin-bottom: 10px" width="80%"><h1>'+respuesta["titulo"]+'</h1><p>'+respuesta["descripcion"]+'</p></li>')
                        swal({
                            title: "Correcto!",
                            text: "La imagen se ha cargado",
                            type: "success",
                            confirmButtonText: "Cerrar",
                            CloseOnConfirm: false
                        },
                            function(isConfirm){
                            if(isConfirm){
                                window.location = "slide"
                            }
                            })
                    }
                }
            });
    }
})
//Eliminar Slide
    $(".eliminarSlide").click(function () {
        idSlide = $(this).parent().attr("id");
        rutaSlide = $(this).attr("ruta");
        console.log(idSlide)
        $(this).parent().remove();
        $("#item" + idSlide).remove();
        var borrarItemSlide = new FormData();
        borrarItemSlide.append("idSlide", idSlide);
        borrarItemSlide.append("rutaSlide", rutaSlide);
        $.ajax({
            url: "views/assets/ajax/gestorSlide.php",
            method: "POST",
            data: borrarItemSlide,
            cache: false,
            contentType: false,
            processData: false,
            success: function (respuesta) {
                console.log(respuesta);
            }
        })
    })