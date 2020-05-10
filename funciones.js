
		var seg=0;
		var est="ACTIVIDAD";;
		min=Number(min);
		activo=Number(activo);
		function run() {
			seg++;
			if (seg==60) {
					seg=0;
					min--;
				}
			if(min==0){
				clearInterval(time);

			}
			est=estado(seg,min,activo);
			document.getElementById('sol').innerHTML=est;
			if (est=="FINALIZO EJERCICIO") {
				document.getElementById('segundo').innerHTML='';
			}else{				
				document.getElementById('segundo').innerHTML=seg;
			}
				
		}

      	function ejecutar(num){
      		time=setInterval(run,1000);

      	}

      
		function estado(segundo,min,activo){
			var str;
			if (segundo<=activo && min>0) {
				str='ACTIVIDAD';
			}else if(segundo>activo && min>0){
				str='DESCANSO';
			}else{
				str="FINALIZO EJERCICIO";
			}
			return str;
		}
