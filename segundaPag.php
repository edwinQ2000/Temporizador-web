<?php 
$nombre=$_GET['nombre'];
$min=$_GET['total'];
$activo=$_GET['activo'];
$datos=$_GET['datos'];

echo "<script>
		
		var nombre='".$nombre."';
		var total='".$min."';
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
	
	function run(){
		total=Number(total);
		activo=Number(activo);
		min=0;
		seg=0;
		// esta funcion se va a estar ejecutando repetitivamente cada segundo hasta que culminen los minutos a repetir el usuario y en
		// cada iteracion hacer una validacion del estado en la cual se debe encontrar el usuario en su actividad
		stop=setInterval(validarEstado,1000,activo);
		setTimeout(function(){ clearInterval(stop);document.getElementById('sol').innerHTML='FINALIZO EJERCICIO';},(60000*(total)+1000));
		//---------------------------------------------
		// Se ejecuta la funcion minutero cada minuto consecutivamente,al mismo tiempo se programa la detencion de la misma, determinando el tiempo dado la cantidad de minutos que el usuario desea repetir esta funcion
		minutero();
		if (total>1){
			time1=setInterval(minutero,60000);
			// se programa la detencion de los minutos transcurridos el total de minutos ingresados por el usuario
			setTimeout(function(){ clearInterval(time1);},(60000*(total-1)));
		}
		
	}

		
			

		</script>
		<title>TEMPORIZADOR PROGRMADO</title>
		
		
	</head>
	<body onload="run()" style="background-color:rgb(23, 162, 184);">
		
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


