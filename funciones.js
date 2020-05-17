var est='';
var seg;
var time1;
var time2;
var stop;
var min;
		// ejecuta repetitivamente la funcion segundero, hasta que transcurran 60 seg lo que es equivalente a un minuto
		// y a su vez se programa la detencion de la funcion segundero una vez transcurrido 1 min e incrementa el valor de min en 1 cada
		// que este se ejecute
		function minutero(){
			min++;
			time2=setInterval(segundero,1000);
			setTimeout(function(){clearInterval(time2);},60000);
		}
		// scada que se ejecuta la funcion segundero se incrementa una unidad el valor de seg, y cuando dicho valor sea equivalente a 60
		// se vuelve a "formatear" definiendo su valor en 0 para usarlo en un nuevo minuto cuando se desee
		function segundero(){
			seg++;
			if (seg==60){
				seg=0;
				
			}
			
		}
		// se recibe por parametro el valor de los segundos que desea realizar de actividad el usuario, retornando si se encuentra en el
		// en el rango de actividad o de descanso segun halla establecido el usuario
		function estado(act){
      		
			if (seg>act && seg<60){
				return'DESCANSO';
			}else{
				return 'ACTIVIDAD';

			}
		}
		// se asigna a los campos los los segundos y estado respectivamente que se va a mostrar en pantalla para el usuario, y a su vez
		// se hace la validacion de, en que estado se encuentra el usuario determinado por los segundos de actividad pre-establecidos
		function validarEstado(act){
			document.getElementById('segundo').innerHTML=seg;
			document.getElementById('sol').innerHTML=estado(act);

		}


		
		



		

		
		
