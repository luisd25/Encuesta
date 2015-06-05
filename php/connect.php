<?php
function connect() 
{
	//conectar a la base de datos
	$conn = mysqli_connect('localhost','root','','base'); // mysqli_connect('localhost', 'my_user', 'my_password', 'my_db');
	return $conn;
}
?>