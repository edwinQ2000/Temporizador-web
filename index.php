<html>
	<div class="p-3 mb-2 bg-info text-white">
	
	<head>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
		<br>
		<title>TEMPORIZADOR</title>

		
	</head>

	<body>
		<br>
		<font size="30" color= "454747" face= "ALGERIAN">
			<center>DATOS PARA EL TEMPORIZADOR<center>
				<br>
		</front>

			<form action="segundaPag.php" method="POST">

  				<p>Nombre de usuario: <input type="text" name="nombre" size="20"></p>
  				<p>Tiempo de entrenamiento: <input type="number" name="total" min="0" max="120"> Min</p>
  				<p>Tiempo de actividad por minuto: <input type="number" name="activo" min="0" max="60"> Seg</p>
				<a href="" > <input class="btn btn-primary btn-lg " role="button" aria-pressed="true" type="submit" value="GUARDAR DATOS"></a>
				<a href="" ><input class="btn btn-primary btn-lg " role="button" aria-pressed="true" type="submit" value="CARGAR DATOS"></a>
			</form>
		<br>
		
		
		


</body>

</html>