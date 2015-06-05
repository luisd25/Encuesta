<?php
require_once('libreria.php');

	$conn=connect();
	$consulta="DELETE FROM usuario where user='$user'";
	if(msqli_query($conn,$consulta))
	{
		echo"<script>alert('se ha borrado el usuario')</scrip>";
	}




?>