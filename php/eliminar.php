<?php
require_once('connect.php');

if(isset($_POST['pregunta']))
{
	
	$pregunta=$_POST['pregunta'];
	
	$conn = connect() or die ("Error al conectarse a la base de datos.");
	$query="delete from preguntas where pregunta='$pregunta'";
			mysqli_query($conn,$query);
				echo "<script>alert('Pregunta borrada')</script>";
			echo "<script>window.location='../html/eliminar.html';</script>";

		mysqli_close($conn);
}
if(isset($_POST['categoria']))
{
	
	$categoria=$_POST['categoria'];
	
	$conn = connect() or die ("Error al conectarse a la base de datos.");
	$query="delete from preguntas where categoria='$categoria'";
			mysqli_query($conn,$query);
			$query="delete from inicio where categoria='$categoria'";
			mysqli_query($conn,$query);
				echo "<script>alert('categoria borrada')</script>";
			echo "<script>window.location='../html/eliminar.html';</script>";

		mysqli_close($conn);
}
if(isset($_POST['nombre']))
{
	
	$nombre=$_POST['nombre'];

	$conn = connect() or die ("Error al conectarse a la base de datos.");
	$query="delete from preguntas where nombre='$nombre'";
			mysqli_query($conn,$query);
			$query="delete from inicio where nombre='$nombre'";
			mysqli_query($conn,$query);
				echo "<script>alert('encuesta borrada')</script>";
			echo "<script>window.location='../html/eliminar.html';</script>";

		mysqli_close($conn);
}
?>