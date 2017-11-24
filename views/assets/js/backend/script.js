//Altura del NavBar
var alturaBody = $("body").height();
if(alturaBody < 1020 && window.innerWidth > 767){
	$("#col1").css({"height":"150vh"})
}
if(alturaBody > 1020 && window.innerWidth > 767){
	$("#col1").css({"height":alturaBody+"px"})
}
//Menú despegable del usuario administrador
$("p#member span").click(function(){
	$("#cabezote #admin").slideToggle("fast")
	$("p#member span").toggleClass("fa-chevron-down");
	$("p#member span").toggleClass("fa-chevron-up");
})
//Slide
var numeroSlide = 1;
var formatearLoop = false;
var cantidadImg = $("#slide ul li").length;
$("#slide ul").css({"width": (cantidadImg*100) + "%"})
$("#slide ul li").css({"width": (100/cantidadImg) + "%"})
//Indicadores del Slide
$("#indicadores li").click(function(){
	 var roleSlide = $(this).attr("role-slide");
	 $("#slide ul li").css({"display":"none"});
	 $("#slide ul li:nth-child("+roleSlide+")").fadeIn();
	 $("#indicadores li").css({"opacity":".5"});
	 $("#indicadores li:nth-child("+roleSlide+")").css({"opacity":"1"});
	 formatearLoop = true;
	numeroSlide = roleSlide;
})
//Flecha Avanzar del Slider
function avanzar(){
	if(numeroSlide >= cantidadImg){numeroSlide = 1;}
	else{numeroSlide++}
	$("#slide ul li").css({"display":"none"});
	$("#slide ul li:nth-child("+numeroSlide+")").fadeIn();
	$("#indicadores li").css({"opacity":".5"});
	$("#indicadores li:nth-child("+numeroSlide+")").css({"opacity":"1"});
}
$("#slideDer").click(function(){
	avanzar();
	formatearLoop = true;
})
//Flecha Retroceder del Slider
$("#slideIzq").click(function(){
	if(numeroSlide <= 1){numeroSlide = cantidadImg;}
	else{numeroSlide--}
	$("#slide ul li").css({"display":"none"});
	$("#slide ul li:nth-child("+numeroSlide+")").fadeIn();
	$("#indicadores li").css({"opacity":".5"});
	$("#indicadores li:nth-child("+numeroSlide+")").css({"opacity":"1"});
	formatearLoop = true;
})
//Loop del Slider
setInterval(function(){
	if(formatearLoop == true){
		formatearLoop = false;
	}
	else{
	avanzar();
	}
},5000);
//Galería
$("ul#lightbox li a").fancybox({
	openEffect  : 'elastic',
	closeEffect  : 'elastic',
	openSpeed  : 150,
	closeSpeed : 150,
	helpers : {title :{type : 'inside'}}
});
//Tabla de Suscriptores
$('#tablaSuscriptores').DataTable({
	"language": {
            "sProcessing":     "Procesando...",
			"sLengthMenu":     "Mostrar _MENU_ registros",
			"sZeroRecords":    "No se encontraron resultados",
			"sEmptyTable":     "Ningún dato disponible en esta tabla",
			"sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
			"sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
			"sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
			"sInfoPostFix":    "",
			"sSearch":         "Buscar:",
			"sUrl":            "",
			"sInfoThousands":  ",",
			"sLoadingRecords": "Cargando...",
			"oPaginate": {
				"sFirst":    "Primero",
				"sLast":     "Último",
				"sNext":     "Siguiente",
				"sPrevious": "Anterior"
			},
			"oAria": {
				"sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
				"sSortDescending": ": Activar para ordenar la columna de manera descendente"
			}
        }
});