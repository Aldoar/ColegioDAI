function cagarListado()
{
	$.ajax({
		url:"listarUsuarios",
		type : "GET",
		success : function(data){			
			$("#cuerpoInspector").html(data);
		},
		error:function(){			
		}
});
}
function cargarDatos(){
	$.ajax({
		url:"api/Users/Rol/" + 4,
		type : "GET",
		success : function(data){
			$.each($("#table_id tr"),function (i,item) {
                        if(i>0)
                            this.remove();
                    });
			var response = $.parseJSON(data);	
			var tdHTML = "";
			$.each(response,function (i,item){
				tdHTML +='<tr class="info"><td>' + item.rut+'</td><td>' + item.nombre+'</td><td>' + item.curso+'</td></tr>';
			});	
			if(response.length==0)
				$("#table_id").append('<tr><td colspan="3">No hay datos para mostrar</td></tr>');
			else	
				$("#table_id").append(tdHTML);			
		},
		error:function(){			
		}
});
}
function cargarAlumno(rut){
	$.ajax({
		url:"api/Users/Rol/" + 4,
		type : "GET",
		success : function(data){
			$.each($("#table_id tr"),function (i,item) {
                        if(i>0)
                            this.remove();
                    });
			var response = $.parseJSON(data);			
			var tdHTML = "";			
							
			$.each(response,function (i,item){
				if(item.rut==rut)
					tdHTML +='<tr class="info"><td>' + item.rut+'</td><td>' + item.nombre+'</td><td>' + item.curso+'</td></tr>';
			});	
			if(tdHTML=="")
				$("#table_id").append('<tr><td colspan="6">No hay datos para mostrar</td></tr>');
			else
				$("#table_id").append(tdHTML);						
			$("#cuerpoBuscar").removeClass("hidden");		
		},
		error:function(){			
		}
});
}
function cargarPaginaAlumno()
{
	$.ajax({
		url:"cargarPaginaAlumno",
		type : "GET",
		success : function(data){			
			$("#cuerpoInspector").html(data);			
			$("body #buscar").on("click",function(){
				if($("body #rutM").val()!="")			
					cargarAlumno($("body #rutM").val());		
			});
		},
		error:function(){			
		}
});
}
$("#listarAlu").on("click",function(){
	cagarListado();
	cargarDatos();
});
$("#consultarAlu").on("click",function(){	
	cargarPaginaAlumno();
});
