<?php
error_reporting(E_ALL); //DEV
require_once('connect.php');
/* Función para conectarse a la base de datos. */



if (isset($_POST['nombre']) and !empty($_POST['nombre'])) {
	$nombre=$_POST['nombre'];
	$apellido=$_POST['apellido'];
	$email=$_POST['email'];
	$user=$_POST['user'];
	$password=$_POST['password'];
	$ask=$_POST['ask'];

	if (strlen($password) < 6) {
		echo "<script>alert('la clave debe de ser mayor de 6 digitos')</script>";
	} else {
		$conn = connect() or die ("Error al conectarse a la base de datos.");
		$consulta = "select * from usuario where user='$user'";
		$resp = mysqli_query($conn,$consulta);

		if (mysqli_num_rows($resp) > 0) {
			echo "<script>alert('el usuario existe')</script>";
		} else {


			$cad="insert into usuario(nombre,apellido,email,user,password,ask) values('".$nombre."','".$apellido."','".$email."','".$user."','".$password."','".$ask."')";
			mysqli_query($conn,$cad);

			echo "<script>alert('Gracias por registrarse')</script>";
			echo "<script>window.location='../html/login.html';</script>";

		}

		mysqli_free_result($resp);
		mysqli_close($conn);
	}
}
?>
