
function cagarListado(){
	$.ajax({
		url:"listarUsuarios",
		type : "GET",
		success : function(data){
			$("#cuerpoInspector").empty();		
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
				$("#cuerpoBuscar").removeClass("hidden");	
					
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
			$.each($("#table_id tr"),function (i,item) {
                if(i>0)
                    this.remove();
            });								
			var tdHTML = "";					
			$.each(response,function (i,item){
				if(item.rut==rut){
					tdHTML +='<tr class="info"><td>' + item.rut+'</td><td>' + item.name+'</td><td>' + item.direccion+'</td><td>' + DateAFechaNormal(item.fechaNacimiento)+'</td><td>' + item.direccion+'</td><td>' + item.telefono+'</td><td>' + item.celular+'</td><td>' + item.email+'</td></tr>';											
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
	var alumno={};
	$.ajax({
		url : "api/Users/buscar/"+$("#rutM").val(),
		success : function(data){
			console.log(data);
			if(data!="")
			{
				alumno=$.parseJSON(data);
				if(alumno.idRols==4)
					eliminarAlumno(alumno.id);
				else
				{
					$("#eliminarModal").modal('hide');
					$("#strong").text('No existe Alumno');
					$(".alert-danger").removeClass("hidden");
				    setTimeout(function() {
				        $(".alert-danger").fadeIn();
				    },0);
				    setTimeout(function() {
				        $(".alert-danger").fadeOut();
				    },3000);
				}
			}
			else
				{
					$("#eliminarModal").modal('hide');
					$("#strong").text('No existe Alumno');
					$(".alert-danger").removeClass("hidden");
				    setTimeout(function() {
				        $(".alert-danger").fadeIn();
				    },0);
				    setTimeout(function() {
				        $(".alert-danger").fadeOut();
				    },3000);
				}
		}

	});		
	
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
				if(data=="ok"){					
					$("#eliminarModal").modal('hide');
					$("#strong").text('Eliminado Correctamente el Alumno');
					$(".alert-danger").removeClass("hidden");
				    setTimeout(function() {
				        $(".alert-danger").fadeIn();
				    },0);
				    setTimeout(function() {
				        $(".alert-danger").fadeOut();
				    },3000);
				}
				else
				{
					$("#eliminarModal").modal('hide');
					$("#strong").text('No existe Alumno');
					$(".alert-danger").removeClass("hidden");
				    setTimeout(function() {
				        $(".alert-danger").fadeIn();
				    },0);
				    setTimeout(function() {
				        $(".alert-danger").fadeOut();
				    },3000);
				}				
				//$("#divTable").html(data);
			},
			'error': function() {
				
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