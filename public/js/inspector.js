	
function cagarListado(){
	$.ajax({
		url:"inspector/listarAlumnos",
		type : "GET",
		success : function(data){
			$("#cuerpoInspector").empty();		
			$("#cuerpoInspector").html(data);
		},
		error:function(){			
		}
});
}
function cagarListadoProf(){
	$.ajax({
		url:"inspector/listarProfesores",
		type : "GET",
		success : function(data){
			$("#cuerpoInspector").empty();		
			$("#cuerpoInspector").html(data);
		},
		error:function(){			
		}
});
}
function cagarListadoUsuarios(){
	$.ajax({
		url:"inspector/listarUsuarios",
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
function cargarDatosUsuario(){
	$.ajax({
		url:"api/Users",
		type : "GET",
		success : function(data){
				var response = $.parseJSON(data);
				$.ajax({
					url:"api/Rols",
					type: "GET",
					success : function(data){
						rols=$.parseJSON(data);
						$.each($("#table_id tr"),function (i,item) {
                    		if(i>0)
                        	this.remove();
		                });									
						var tdHTML = "";						
						$.each(response,function (i,item){
							$.each(rols,function(j,rol){
								if(rol.id==item.idRols)
									tdHTML +='<tr class="info"><td>' + item.rut+'</td><td>' + item.name+'</td><td>' + item.direccion+'</td><td>' + DateAFechaNormal(item.fechaNacimiento)+'</td><td>' + rol.nombre+'</td></tr>';							
							});
							
						});	
						if(tdHTML=="")
							$("#table_id").append('<tr><td colspan="5">No hay datos para mostrar</td></tr>');
						else
							$("#table_id").append(tdHTML);						
						$("#cuerpoBuscar").removeClass("hidden");	
							}
						});
				
					
		},
		error:function(){			
		}
});
}
function cargarDatosProf(){
	$.ajax({
		url:"api/Users/Rol/" + 5,
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
					tdHTML +='<tr class="info"><td>' + item.rut+'</td><td>' + item.name+'</td><td>' + DateAFechaNormal(item.fechaNacimiento)+'</td><td>' + item.direccion+'</td><td>' + item.telefono+'</td><td>' + item.celular+'</td><td>' + item.email+'</td></tr>';											
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
function cargarProfesor(rut){
	
	$.ajax({
		url:"api/Users/Rol/" + 5,
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
					tdHTML +='<tr class="info"><td>' + item.rut+'</td><td>' + item.name+'</td><td>' + DateAFechaNormal(item.fechaNacimiento)+'</td><td>' + item.direccion+'</td><td>' + item.telefono+'</td><td>' + item.celular+'</td><td>' + item.email+'</td></tr>';											
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
function cargarUsuario(rut){	
		$.ajax({
		url:"api/Users",
		type : "GET",
		success : function(data){
				var response = $.parseJSON(data);
				$.ajax({
					url:"api/Rols",
					type: "GET",
					success : function(data){
						rols=$.parseJSON(data);
						$.each($("#table_id tr"),function (i,item) {
                    		if(i>0)
                        	this.remove();
		                });									
						var tdHTML = "";						
						$.each(response,function (i,item){
							$.each(rols,function(j,rol){
								if(item.rut==rut)
									if(rol.id==item.idRols)										
										tdHTML +='<tr class="info"><td>' + item.rut+'</td><td>' + item.name+'</td><td>' + DateAFechaNormal(item.fechaNacimiento)+'</td><td>' + item.direccion+'</td><td>' + item.telefono+'</td><td>' + item.celular+'</td><td>' + item.email+'</td><td>' + rol.nombre+'</td></tr>';
							});
							
						});	
						if(tdHTML=="")
							$("#table_id").append('<tr><td colspan="8">No hay datos para mostrar</td></tr>');
						else
							$("#table_id").append(tdHTML);						
						$("#cuerpoBuscar").removeClass("hidden");	
							}
						});
				
					
		},
		error:function(){			
		}
});
}
function cargarPaginaAlumno(){
	$.ajax({
		url:"inspector/cargarPaginaAlumno",
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
function cargarPaginaProf(){
	$.ajax({
		url:"inspector/cargarPaginaProfesor",
		type : "GET",
		success : function(data){			
			$("#cuerpoInspector").html(data);			
			$("body #buscar").on("click",function(){
				if($("body #rutM").val()!="")			
					cargarProfesor($("body #rutM").val());		
			});
		},
		error:function(){			
		}
});
}
function cargarPaginaUsu(){
	$.ajax({
		url:"inspector/cargarPaginaUsuario",
		type : "GET",
		success : function(data){			
			$("#cuerpoInspector").html(data);			
			$("body #buscar").on("click",function(){
				if($("body #rutM").val()!="")			
					cargarUsuario($("body #rutM").val());		
			});
		},
		error:function(){			
		}
});
}
function cargarPaginaEliminar(){
	$.ajax({
		url:"inspector/cargarPaginaEliminar",
		type : "GET",
		success : function(data){			
			$("#cuerpoInspector").html(data);
		},
		error:function(){			
		}
});
}
function cargarPaginaEliminarUsuario(){
	$.ajax({
		url:"inspector/cargarPaginaEliminarUs",
		type : "GET",
		success : function(data){		
			$("#cuerpoInspector").html(data);
		},
		error:function(){			
		}
});
}
function cargarPaginaRegistra(){
	
	$.ajax({
		url:"cargarPaginaRegistrarAlumnos",
		type : "GET",
		success : function(data){	
			$("#cuerpoInspector").html(data);			
			$("body #btnRegistra").on("click",function(){						
				$.ajax({
					url:"registrarAlumno",
					'method':'post',
					data : {},
					success: function(data){
						if(data=="ok")
						{
							$("#mensajeModal").text('Se ha registrado el Alumno');
							$("#eliminarModal").modal();
						}
						else
						{
							$("#mensajeModal").text('Debe llenar todos los campos');
							$("#eliminarModal").modal();
						}

					},
					error : function(){						
					}
				});
			});
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
$("body ").on('click','#eliminarUsurio',function(){
	var usur={};
	$.ajax({
		url : "api/Users/buscar/"+$("#rutM").val(),
		success : function(data){			
			if(data!="")
			{
				usur=$.parseJSON(data);
				eliminarUsuario(usur.id);					
			}
			else
				{
					$("#eliminarModal").modal('hide');
					$("#strong").text('No existe Usuario');
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
$("#listarUsu").on("click",function(){

	cagarListadoUsuarios();
	cargarDatosUsuario();
});
$("#listarProf").on("click",function(){

	cagarListadoProf();
	cargarDatosProf();
});
$("#registrarAlu").on("click",function(){

	cargarPaginaRegistra();	
});
$("#consultarAlu").on("click",function(){	
	cargarPaginaAlumno();
});
$("#consultarProf").on("click",function(){	
	cargarPaginaProf();
});
$("#consultarUsu").on("click",function(){	
	cargarPaginaUsu();
});
$("#eliminarAlu").on("click",function(){	
	cargarPaginaEliminar();
});
$("#eliminarUsu").on("click",function(){	
	cargarPaginaEliminarUsuario();
});
function eliminarAlumno(elemento) {
	$("#eliminarModal").modal();
	$("#btnEliminar").unbind().on('click', function() {
		$.ajax({
			'method':'get',
			'url': 'inspector/usuario/eliminar/' + elemento,
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
function eliminarUsuario(elemento) {
	$("#eliminarModal").modal();
	$("#btnEliminarUs").unbind().on('click', function() {
		$.ajax({
			'method':'get',
			'url': 'inspector/usuario/eliminar/' + elemento,
			'success': function(data) {				
				if(data=="ok"){					
					$("#eliminarModal").modal('hide');
					$("#strong").text('Eliminado Correctamente el Usuario');
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
					$("#strong").text('No existe Usuario');
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