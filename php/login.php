<?php
require_once('libreria.php');

if (isset($_POST['user']) and !empty($_POST['user'])) {
	$user=$_POST['user'];
	$password=$_POST['password'];
	$ask=$_POST['ask'];

	
		$conn = connect() or die ("Error al conectarse a la base de datos.");
		$consulta = "select * from usuario where user='$user'";
		$resp = mysqli_query($conn,$consulta);

		if (mysqli_num_rows($resp) > 0) {
			$consulta="select * from usuario where password='$password'";
			$resp=mysqli_query($conn,$consulta);
			if(mysqli_num_rows($resp)>0)
			{
				$consulta="select * from usuario where ask='$ask'";
				$resp=mysqli_query($conn,$consulta);
					if(mysqli_num_rows($resp)>0)
			{
				echo "<script>alert(' Gracias por iniciar sesion')</script>";
				
				echo "<script>window.location='../html/inicio.html';</script>";
			}
			else
		{
				echo "<script>alert('no has podido iniciar sesion')</script>";
				echo "<script>window.location='../html/Login.html';</script>";
		}
			}
			else
		{
				echo "<script>alert('no has podido iniciar sesion')</script>";
				echo "<script>window.location='../html/Login.html';</script>";
		}

			

			
		}
		else
		{
				echo "<script>alert('no has iniciado sesion')</script>";
		}

		mysqli_free_result($resp);
		mysqli_close($conn);
	
}

?>