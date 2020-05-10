<?php 
$nombre=$_POST['nombre'];
$min=$_POST['total'];
$activo=$_POST['activo'];

echo "<script>
		
		var nombre='".$nombre."';
		var min='".$min."';
		var activo='".$activo."';
		
 	  </script>";

?>
<html>
	<div class="p-3 mb-2 bg-info text-white">
	<head>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
		<br>
		<script src="funciones.js"></script>
		<title>TEMPORIZADOR PROGRMADO</title>
	</head>
	
			
	<body onload="ejecutar()" style="background-color:rgb(23, 162, 184);">
		<br>
		<font size="50" color= "454747" face= "ALGERIAN">
			<center>ENTRENAMIENTO<center>
		</font>


		<br>

			<table class="table">
				<center>
 					 <thead>
   				<tr>
     				 <th scope="col"></th>
     				 <th scope="col">NOMBRE</th>
     				 <th scope="col">TIEMPO DE RUTINA</th>
     				 <th scope="col">TIEMPO DE ACTIVIDAD</th>
     				 <th scope="col">TIEMPO DE DESCANSO</th>
   		 </tr>
   		 
  	</thead>
  <tbody>
    			<tr>
     				  <th scope="col"></th>
     				 <th scope="col"><?php echo $nombre; ?> </th>
     				 <th scope="col"><?php echo $min; ?> Minutos</th>
     				 <th scope="col"><?php echo $activo; ?> Segundos</th>
     				 <th scope="col"><?php echo (60-$activo); ?> segundos</th>
    			</tr>
				
     				
  			</tbody>
		</center></table>

		<font size="50" color= "454747" face= "ALGERIAN">
			<br>
			
			<center > ESTADO EN: <div id="sol"  value=""> </div>  
			 <p id="segundo" value=""> </p>  </center>
		</font>


	</body>	
</div>

</html>


