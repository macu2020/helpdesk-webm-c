function init(){
   
}

$(document).ready(function(){
    var usu_id = $('#user_idx').val();

    if ( $('#rol_idx').val() == 1){
        $.post("../../Controller/usuario.php?op=total", {usu_id:usu_id}, function (data) {
            data = JSON.parse(data);
            $('#lbltotal').html(data.TOTAL);
        }); 
    
        $.post("../../Controller/usuario.php?op=totalabierto", {usu_id:usu_id}, function (data) {
            data = JSON.parse(data);
            $('#lbltotalabierto').html(data.TOTAL);
        });
    
        $.post("../../Controller/usuario.php?op=totalcerrado", {usu_id:usu_id}, function (data) {
            data = JSON.parse(data);
            $('#lbltotalcerrado').html(data.TOTAL);
        });

        $.post("../../Controller/usuario.php?op=grafico", {usu_id:usu_id},function (data) {
            data = JSON.parse(data);
            new Morris.Bar({
                element: 'divgrafico',
                data: data,
                xkey: 'nom',
                ykeys: ['total'],
                labels: ['Value'],
                barColors: ["#06B47A"], 
            });
        }); 

    }else{
        $.post("../../Controller/ticket.php?op=total",function (data) {
            data = JSON.parse(data);
            $('#lbltotal').html(data.TOTAL);
        }); 
    
        $.post("../../Controller/ticket.php?op=totalabierto",function (data) {
            data = JSON.parse(data);
            $('#lbltotalabierto').html(data.TOTAL);
        });
    
        $.post("../../Controller/ticket.php?op=totalcerrado", function (data) {
            data = JSON.parse(data);
            $('#lbltotalcerrado').html(data.TOTAL);
        });  

       $.post("../../Controller/ticket.php?op=grafico",function (data) {
            data = JSON.parse(data);
        console.log(data)

            new Morris.Bar({
                element: 'divgrafico',
                data: data,
                xkey: 'nom',    //hace referencia al nombre
                ykeys: ['total'], //hace referncia al total
                labels: ['Value']
            });
        }); 

    }

 
});



init();