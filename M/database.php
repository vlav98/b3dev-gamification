<?php
<<<<<<< HEAD
<<<<<<< HEAD
$link = mysql_connect('localhost','username','password');
if(!$link) die('Erreur de connection');
mysql_select_db ('ma_base_de_donnees', $link);
=======
$host="locahost";
=======
$host="localhost";
>>>>>>> bac377ea341ab1795da74cebb7d37b23e2996b60
$login="root";
$pass="";
$db="projet_b3dev";
/*$con = mysqli_connect($host,$user,$password,$db);*/

// Check connection
if (! isset ($link)) {
$link = mysqli_connect($host, $login, $pass) 
		or die ("erreur de connexion :" . mysqli_connect_error() . 'numéro :' . mysqli_connect_errno()); 
mysqli_select_db($link, $db) 
		or die ("erreur d'accès à la base :" . $db);
}

<<<<<<< HEAD

>>>>>>> 367319074219d1a2a35d298c8de2b00c4ae7081d
=======
>>>>>>> bac377ea341ab1795da74cebb7d37b23e2996b60
?>