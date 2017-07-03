
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
				var response = $.parseJSON(data);
				var cursos='';			
				$.ajax({
					url:"api/Cursos",
					success:function(data1){
						cursos=$.parseJSON(data1);
						$.each($("#table_id tr"),function (i,item) {
	                        if(i>0)
	                            this.remove();
	                    });									
						var tdHTML = "";						
						$.each(response,function (i,item){						
							$.each(cursos,function(j,cur){
								if(cur.id==item.idCurso)
									tdHTML +='<tr class="info"><td>' + item.rut+'</td><td>' + item.name+'</td><td>' + cur.nombre+'</td><td>' + DateAFechaNormal(item.fechaContratacion)+'</td></tr>';
							});
						});	
						if(tdHTML=="")
							$("#table_id").append('<tr><td colspan="4">No hay datos para mostrar</td></tr>');
						else
							$("#table_id").append(tdHTML);						
						$("#cuerpoBuscar").removeClass("hidden");					
					},
					error:function(){					
					}
			});		
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
			var response = $.parseJSON(data);
			var cursos='';			
			$.ajax({
				url:"api/Cursos",
				success:function(data1){
					cursos=$.parseJSON(data1);
					$.each($("#table_id tr"),function (i,item) {
                        if(i>0)
                            this.remove();
                    });								
					var tdHTML = "";					
					$.each(response,function (i,item){
						if(item.rut==rut){
							$.each(cursos,function(j,cur){
								if(cur.id==item.idCurso)
									tdHTML +='<tr class="info"><td>' + item.rut+'</td><td>' + item.name+'</td><td>' + cur.nombre+'</td><td>' + DateAFechaNormal(item.fechaNacimiento)+'</td><td>' + item.direccion+'</td><td>' + item.telefono+'</td><td>' + item.celular+'</td><td>' + DateAFechaNormal(item.fechaContratacion)+'</td></tr>';
							});							
						}
					});	
					if(tdHTML=="")
						$("#table_id").append('<tr><td colspan="8">No hay datos para mostrar</td></tr>');
					else
						$("#table_id").append(tdHTML);						
					$("#cuerpoBuscar").removeClass("hidden");					
				},
				error:function(){					
				}
			});					
		},
		error:function(){			
		}
});
}
function cargarPaginaAlumno(){
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
function cargarPaginaEliminar(){
	$.ajax({
		url:"cargarPaginaEliminar",
		type : "GET",
		success : function(data){			
			$("#cuerpoInspector").html(data);
		},
		error:function(){			
		}
});
}
$("body ").on('click','#eliminar',function(){
	$.ajax({
		url : "api/Users/buscar/"+$("#rutM").val()
	});		
	eliminarAlumno($("#rutM").val());
});
$("#listarAlu").on("click",function(){
	cagarListado();
	cargarDatos();
});
$("#consultarAlu").on("click",function(){	
	cargarPaginaAlumno();
});
$("#eliminarAlu").on("click",function(){	
	cargarPaginaEliminar();
});
function eliminarAlumno(elemento) {

	$("#eliminarModal").modal();
	$("#btnEliminar").unbind().on('click', function() {
		$.ajax({
			'method':'get',
			'url': 'usuario/eliminar/' + elemento,
			'success': function(data) {
				
				$("#eliminarModal").modal('hide');
				toastr.success('Eliminado correctamente');
				//$("#divTable").html(data);
			},
			'error': function() {
				toastr.error('No se ha podido eliminar');
			}
		});	
	});

}

function DateAFechaNormal(fecha) {
    var d1 = new Date(fecha);
    var y1= d1.getFullYear();
    var m1 = d1.getMonth()+1;
    if(m1<10)
        m1="0"+m1;
    var dt1 = d1.getDate();
    if(dt1<10)
        dt1 = "0"+dt1;
    var d2 = dt1+"-"+m1+"-"+y1;
    return d2;
}