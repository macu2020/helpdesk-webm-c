function init(){

}



$(document).ready(function(){

});

$(document).on("click", "#btnsoporte", function(){
	
	if ($("#rol_id").val() == 1) {
		$("#lbltitulo").html("Soporte WebM@c");
		$("#btnsoporte").html("Usuario WebM@c");
		$("#rol_id").val(2);
		$("#imgtipo").attr("src","public/img/2.png")
	}else{
		$("#lbltitulo").html("Usuario WebM@c");
		$("#btnsoporte").html("Soporte WebM@c");
		$("#rol_id").val(1);	
		$("#imgtipo").attr("src","public/img/1.PNG")

	}


 
})

init()