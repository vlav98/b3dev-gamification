<?php
$host="locahost";
$login="root";
$pass="";
$db="projet_b3dev";
/*$con = mysqli_connect($host,$user,$password,$db);*/

// Check connection
if (! isset ($link)) {
$link = mysqli_connect($host, $login, $pass) 
		or die ("erreur de connexion :" . mysqli_connect_error() . 'numéro :' . mysqli_connect_errno()); 
mysqli_select_db($link, $bd) 
		or die ("erreur d'accès à la base :" . $db);
}


?>