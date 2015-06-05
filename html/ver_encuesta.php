
			
					
				
<html>
	<head>
		<title>Pagina de Creacion de Encuesta</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="../js/jquery.min.js"></script>
		<script src="../js/jquery.poptrox.min.js"></script>
		<script src="../js/skel.min.js"></script>
		<script src="../js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
		<script>
			
	</script>
	</head>
	<body>

		<!-- Header -->
			<header id="header">

				<!-- Logo -->
					<h1 id="logo"><a href="#">Creacion de Encuesta</a></h1>
				
				<!-- Nav -->
					<nav id="nav">
						<ul>
							<li><a href="inicio.html">inicio</a></li>
							
						</ul>
					</nav>

			</header>
<!-- crear -->
			<section id="two" class="main style1 dark fullscreen">
				<div class="content container small">
					<header>
						<?php
						error_reporting(E_ALL); //DEV
						require_once('../php/connect.php');
							$conn=connect() or die("Error al conectarse a la base de datos.");
				if(isset($_POST['tipo']))
				{			$tipo=$_POST['tipo'];
							
						if($tipo=='multiple')
						{
							
							$nombre=$_POST['ver'];
							$categoria=$_POST['cat'];
							echo"Nombre de Encuesta:  ";
							echo"$nombre<br>";
							echo"Categoria de la Encuesta:  ";
							echo"$categoria<br>";
							echo"tipo de la Encuesta:  ";
							echo"$tipo<br><br>";
							$query="select * from preguntas where nombre='$nombre' AND categoria='$categoria'";
							$consulta=mysqli_query($conn,$query);
							while($fila=mysqli_fetch_array($consulta,MYSQLI_ASSOC))
							{
								echo"
								pregunta:   $fila[pregunta]<br>
								respuesta: $fila[respuesta1]<br>
								respuesta2: $fila[respuesta2]<br>
								respuesta3:	$fila[respuesta3]<br>
								respuesta4:	$fila[respuesta4]<br>
								respuesta correcta: $fila[correcta]<br><br>
								";
							
							}
						
						}
						if($tipo=='abiertas')
						{
							
							$nombre=$_POST['ver'];
							$categoria=$_POST['cat'];
							echo"Nombre de Encuesta:  ";
							echo"$nombre<br>";
							echo"Categoria de la Encuesta:  ";
							echo"$categoria<br>";
							echo"tipo de la Encuesta:  ";
							echo"$tipo<br><br>";
							$query="select * from preguntas where nombre='$nombre' AND categoria='$categoria'";
							$consulta=mysqli_query($conn,$query);
							while($fila=mysqli_fetch_array($consulta,MYSQLI_ASSOC))
							{
							echo"entre";
								echo"
								pregunta:   $fila[pregunta]?<br>
								respuesta: $fila[respuesta1]<br><br>
								";
							
							}
						
						}
						if($tipo=='cerradas')
						{
							
							$nombre=$_POST['ver'];
							$categoria=$_POST['cat'];
							echo"Nombre de Encuesta:  ";
							echo"$nombre<br>";
							echo"Categoria de la Encuesta:  ";
							echo"$categoria<br>";
							echo"tipo de la Encuesta:  ";
							echo"$tipo<br><br>";
							$query="select * from preguntas where nombre='$nombre' AND categoria='$categoria'";
							$consulta=mysqli_query($conn,$query)or die("Error al realizar la query.");
							
							while($fila=mysqli_fetch_array($consulta,MYSQLI_ASSOC))
							{
							
								echo"
								pregunta:   $fila[pregunta]<br>
								respuesta: $fila[correcta]<br><br>
								";
							
							}
						
						}
						
				}
						?>
						
					</header>
					
						
				</div>
			</section>
			
	

	</body>
</html>

			