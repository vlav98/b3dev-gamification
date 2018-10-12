<?php 
// On appelle le fichier de connexion Mysql
require_once 'database.php'; 

// On recupere tous les articles
try
{

$sql = mysql_query("SELECT * FROM blog");
// on ferme la connexion MySQL
mysql_close(); 

if (!$sql) throw new Exception( mysql_error() );
}
catch (Exception $e) {die( $e->getMessage()); }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>tuto</title>
</head>
<body>
<h1>Liste des articles</h1>
<a href="insert.php">Ajouter des donnée</a>
</body>
</html>