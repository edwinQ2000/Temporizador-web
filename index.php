<html>
	<div class="p-3 mb-2 bg-info text-white">
	
	<head>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
		<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
		<br>
		<title>TEMPORIZADOR</title>

		
	</head>

	<body>
		<br>
		<font size="30" color= "454747" face= "ALGERIAN">
			<center>DATOS PARA EL TEMPORIZADOR<center>
				<br>
		</front>

			<form action="" method="POST">

  				<p>Nombre de usuario: <input type="text" id="nombre" name="nombre" size="20"></p>
  				<p>Tiempo de entrenamiento: <input type="number" id="min" name="total" min="0" max="120"> Min</p>
  				<p>Tiempo de actividad por minuto: <input type="number" id="activo" name="activo" min="0" max="60"> Seg</p>
				<input class="btn btn-primary btn-lg " role="button" aria-pressed="true" type="button" onclick="guardar()" value="GUARDAR DATOS">
				
				<input class="btn btn-primary btn-lg " role="button" aria-pressed="true" type="button" value="BORAR DATOS" onclick="borrar()">
			</form>
		<br>
		
		<script>
			function borrar(){
				localStorage.clear();
				alert('Datos borrados');
			}
			function guardar(){

				var str="";
				var nombre=document.getElementById("nombre").value;
				var min=document.getElementById("min").value;
				var activo=document.getElementById("activo").value;
				str+= min+","+activo;
				
				if (nombre=="" || min=="" || activo=="") {
					alert('Alguno de los campos esta mal diligenciado');
				}else{
					if(localStorage.getItem(nombre)==null){
						localStorage.setItem(nombre,str);
						 
					}else{
						str+= "/"+localStorage.getItem(nombre);
						localStorage.setItem(nombre,str); 			

					}
					
					var parametros= {"nombre":nombre,
									"total":min,
									"activo":activo};

					
					$.ajax({
				        data: parametros,
	                    url: 'segundaPag.php',
	                    type: 'post',
				        success: function (data) {
				          //data es la respuesta del php
				          
				          
				            window.location.href="segundaPag.php?nombre="+nombre+"&total="+min+"&activo="+activo+"&datos="+str+"";
				          

				      	}
					});
				}


			}

		</script>
		


</body>

</html>