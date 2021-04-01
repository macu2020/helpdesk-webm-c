
function init(){
	$("#ticket_form").on("submit", function(e){
		guardaryeditar(e);
	})
}

  
 		$(document).ready(function() {
			$('#ticket_Descrip').summernote({
		        height: 150,
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
			$.post('../../Controller/categoria.php?op=combo',function (data,status) {
				$("#cat_id").html(data)
			});






		});

function guardaryeditar(e){


	e.preventDefault();
	var formData= new FormData($("#ticket_form")[0]);
    if ($('#tick_descrip').summernote('isEmpty') || $('#tick_titulo').val()==''){
        swal("Advertencia!", "Campos Vacios", "warning");
    }else{

	$.ajax({
		url: '../../Controller/ticket.php?op=insert',
		type: 'POST',
		contentType: false,
		processData: false,
		data:formData ,
	})
	.done(function(data) {
		$("#tick_titulo").val('');
		$("#ticket_Descrip").summernote('reset');
		swal("Correcto!", "Registrado correctamente", "success")

	})
	.fail(function() {
		console.log("error");
	})
	.always(function() {
		console.log("complete");
	});
	}
}


init();