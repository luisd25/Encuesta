<?php
require_once('connect.php');

if(isset($_POST['tipo']) && isset($_POST['cantidad']) && isset($_POST['nombre']))
{
	
	$tipo=$_POST['tipo'];
	$cantidad=$_POST['cantidad'];
	$nombre=$_POST['nombre'];
	$categoria=$_POST['categoria'];
	$conn = connect() or die ("Error al conectarse a la base de datos.");
	$cad="insert into inicio(tipo,categoria,nombre,cantidad) values('".$tipo."','".$categoria."','".$nombre."','".$cantidad."')";
			mysqli_query($conn,$cad);
			
				echo $tipo;

				if($tipo=='abiertas')
					{
						echo "<script>window.location='../html/encuesta_abierta.html';</script>";
					}
				else if($tipo=='cerradas')
					{
						echo "<script>window.location='../html/encuesta_cerrada.html';</script>";
					}
				else if($tipo=='multiple')
				{
						echo "<script>window.location='../html/encuesta_multiple.html';</script>";
				}
		mysqli_close($conn);
}
?>