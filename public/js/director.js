function cagarListado(){
	$.ajax({
		url:"dlistarUsuarios",
		type : "GET",
		success : function(data){
			$("#cuerpoDirector").empty();		
			$("#cuerpoDirector").html(data);
		},
		error:function(){			
		}
});}
function cargarDatos(){
	$.ajax({
		url:"api/Users/Rol/" + 1,
		type : "GET",
		success : function(data){
				$("#cuerpoDirector").append(data);
				var response = $.parseJSON(data);
				$.each($("#table_id tr"),function (i,item) {
                    if(i>0)
                        this.remove();
                });									
				var tdHTML = "";						
				$.each(response,function (i,item){
					tdHTML +='<tr class="info"><td>' + item.rut+'</td><td>' + item.name+'</td><td>' + item.direccion+'</td><td>' + DateAFechaNormal(item.fechaNacimiento)+'</td></tr>';							
				});	
				if(tdHTML=="")
					$("#table_id").append('<tr><td colspan="4">No hay datos para mostrar</td></tr>');
				else
					$("#table_id").append(tdHTML);						

					
		},
		error:function(){			
		}
});
}

$("body #listarAlu2").on("click",function(){
	cagarListado();
	cargarDatos();
});