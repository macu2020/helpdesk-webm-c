function init(){

}

$(document).ready(function(){
	var tick_id= getUrlParameter('ID');

        listardetalle(tick_id);



	    $('#ticketd_Descrip').summernote({
	        height: 400,
	        lang: "es-ES",
	        callbacks: {
	            onImageUpload: function(image) {
	                console.log("Image detect...");
	                myimagetreat(image[0]);
	            },
	            onPaste: function (e) {
	                console.log("Text detect...");
	            }
	        }
	    });
		 
		$('#tickd_descripusu').summernote({
	        height: 400,
	        lang: "es-ES"
	    });  

    	$('#tickd_descripusu').summernote('disable');





});


var getUrlParameter = function getUrlParameter(sParam){
	var sPageURL = decodeURIComponent(window.location.search.substring(1)),
	    sURLVariables = sPageURL.split('&'),
	    sParameterName,
	    i;

	    for ( i = 0; i < sURLVariables.length; i++) {
	    	sParameterName = sURLVariables[i].split('=');

	    	if (sParameterName[0] === sParam) {
	    		return sParameterName[1] === undefined ? true :sParameterName[1];
	    	}

	    }
};

$(document).on("click","#btnenviar", function(){
    var tick_id = getUrlParameter('ID');
    var usu_id = $('#user_idx').val();
    var tickd_descrip = $('#ticketd_Descrip').val();


    if ($('#ticketd_Descrip').summernote('isEmpty')){
        swal("Advertencia!", "Falta Descripción", "warning");
    }else{
        $.post("../../controller/ticket.php?op=insertdetalle", { tick_id:tick_id,usu_id:usu_id,tickd_descrip:tickd_descrip}, function (data) {
            listardetalle(tick_id);
            $('#ticketd_Descrip').summernote('reset');
            swal("Correcto!", "Registrado Correctamente", "success");
        }); 
    }
});

//cuando de cierra el ticket notas a tener en cuenta:
//   debemos cambiar el estado del ticket de abierto a cerrado
//   guardar la fecha y el usuario kien a cerrado el ticket
$(document).on("click","#btncerrarticket", function(){
    swal({
        title: "HelpDesk",
        text: "¿ Esta seguro de Cerrar el Ticket?",
        type: "warning",
        showCancelButton: true,
        confirmButtonClass: "btn-warning",
        confirmButtonText: "Si",
        cancelButtonText: "No",
        closeOnConfirm: false
    },
    function(isConfirm) {
        if (isConfirm) {
            var tick_id = getUrlParameter('ID');
            var usu_id = $('#user_idx').val();

            $.post("../../controller/ticket.php?op=update", { tick_id : tick_id,usu_id:usu_id }, function (data) {

            }); 

            listardetalle(tick_id);

            swal({
                title: "HelpDesk!",
                text: "Ticket Cerrado correctamente.",
                type: "success",
                confirmButtonClass: "btn-success"
            });
        }
    });
});




//metodo para listar todos las conversaciones detallas de tikt_detalle
function listardetalle(tick_id){
		$.post("../../Controller/ticket.php?op=listardetalle",{tick_id:tick_id}, function (data){
			$("#lbldetalle").html(data)
		})

 		$.post("../../Controller/ticket.php?op=mostrar",{tick_id:tick_id}, function (data){
			data = JSON.parse(data);
 			$("#lblestado").html(data.tick_estado)
			$("#lblnomusuario").html(data.usu_nom+' '+data.usu_ape)
			$("#lblfechcrea").html(data.fech_crea)
			$("#lblnomidticket").html("Detalle Tickets -"+data.tick_id)

			$("#cat_nom").val(data.cat_nom)
			$("#tick_titulo").val(data.tick_titulo)
  	        $("#tickd_descripusu").summernote('code',data.tick_descrip);

  	        if (data.tick_estado_mostrar == "Cerrado") {
  	        $("#pnldetalle").hide(); 
			}
		})



}







init();
