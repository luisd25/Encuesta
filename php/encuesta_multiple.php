<?php
require_once('connect.php');
$conn=connect() or die("Error al conectarse a la base de datos.");
	
//////////////
//obtiene ultimo ID//
$consulta;
$query="SELECT MAX(id) AS id FROM inicio";
$rs = mysqli_query($conn,$query);
if ($row = mysqli_fetch_row($rs)) {
$id = trim($row[0]);
}
//////////obtiene la cantidad de veces que se van a realizar preguntas////////////////
$query="select cantidad from inicio where id='$id'";
$consulta=mysqli_query($conn,$query);
if ($row = mysqli_fetch_row($consulta)) 
{$cantidad = trim($row[0]);}

$aux=$cantidad;
///////////////
$query="select nombre from inicio where id='$id'";
$consulta=mysqli_query($conn,$query);
if ($row = mysqli_fetch_row($consulta)) 
{$nombre = trim($row[0]);
echo $nombre;
}
///////////////
$query="select categoria from inicio where id='$id'";
$consulta=mysqli_query($conn,$query);
if ($row = mysqli_fetch_row($consulta)) 
{$categoria = trim($row[0]);
echo $categoria;
}
		
///////////////
if(isset($_POST['pregunta']) && isset($_POST['respuesta1'])&& isset($_POST['respuesta2']) && isset($_POST['respuesta3']) && isset($_POST['respuesta4']))
		{
			$pregunta=$_POST['pregunta'];
			$respuesta1=$_POST['respuesta1'];
			$respuesta2=$_POST['respuesta2'];
			$respuesta3=$_POST['respuesta3'];
			$respuesta4=$_POST['respuesta4'];
			$correcta=$_POST['correcta'];
			
			$query="insert into preguntas(respuesta1,respuesta2,respuesta3,respuesta4,correcta,pregunta,nombre,categoria) values('".$respuesta1."','".$respuesta2."','".$respuesta3."','".$respuesta4."','".$correcta."','".$pregunta."','".$nombre."','".$categoria."')";
			mysqli_query($conn,$query);
		}
///////////////

				if($cantidad>1)
					{
						$aux-=1;
						$query="update inicio set cantidad='$aux' where id='$id'";
						mysqli_query($conn,$query);
						$query="select cantidad from inicio where id='$id'";
						$consulta=mysqli_query($conn,$query);
						if ($row = mysqli_fetch_row($consulta)) 
						{
							$cantidad = trim($row[0]);
							echo $cantidad;
						}
						echo "<script>window.location='../html/encuesta_multiple.html';</script>";
						
						
					}
					else{
						echo "<script>window.location='../html/inicio.html';</script>";
					
					}

////////////////////
		
?>