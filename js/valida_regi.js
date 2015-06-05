<script>
		function valida() {
			if (document.getElementById("nombre").value=="") {
				alert("llene su nombre");
			   	return false;
		   	} else if(document.getElementById("apellido").value=="") {
				alert("llene su apellido");
				return false;
		   	} else if(document.getElementById("email").value=="") {
				alert("llene su email");
				return false;
			} else if(document.getElementById("usuario").value=="") {
				alert("llene el usuario");
				return false;
			} else if(document.getElementById("password").value=="") {
			       	alert("llene su password");
				return false;
			}
			 else if(document.getElementById("ask").value=="") {
			       	alert("conteste la pregunta de seguridad");
				return false;
			}
			
		}
			
	</script>