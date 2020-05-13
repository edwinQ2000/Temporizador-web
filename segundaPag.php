<?php 
$nombre=$_GET['nombre'];
$min=$_GET['total'];
$activo=$_GET['activo'];
$datos=$_GET['datos'];

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
		<script>

			

		</script>
		<title>TEMPORIZADOR PROGRMADO</title>
	</head>
	<body onload="ejecutar()" style="background-color:rgb(23, 162, 184);">
		
		<font size="50" color= "454747" face= "ALGERIAN">
			<center>ENTRENAMIENTO <br><?php echo $nombre;?> <center>
		</font>

			<table class="table">
				<center>
 					 <thead>
   				<tr>
     				
     				
     				 <th scope="col">TIEMPO DE RUTINA</th>
     				 <th scope="col">TIEMPO DE ACTIVIDAD</th>
     				 <th scope="col">TIEMPO DE DESCANSO</th>
     				 
   		 </tr>
   		 
  	</thead>
  <tbody>
  	<?php

  	$datos=explode("/", $datos);

  	for ($i=0; $i <sizeof($datos); $i++) {
  	$sub=explode(",", $datos[$i] ); 
  	$desc=60-$sub[1];
  	
	  	echo '
	  				<tr>
	     				 
	     				 
	     				 <th scope="col">'.$sub[0].' Minutos</th>
	     				 <th scope="col">'.$sub[1].' Segundos</th>
	     				 <th scope="col">'.$desc.' segundos</th>
	     				 
	    			</tr>


	  	';
	}
  	?>
    			
				
     				
  			</tbody>
		</center></table>

		<font size="50" color= "454747" face= "ALGERIAN">
			<center > ESTADO EN: <span id="sol"  value=""> </span>  
			 <p id="segundo" value=""> </p>  </center>
		</font>
<input class="btn btn-primary btn-lg " role="button" aria-pressed="true" type="button" onclick="window.location.href='index.php'" value="REGRESAR">

	</body>	
</div>

</html>


