<?php

require_once './M/database.php';
/*try
{
$sql="SELECT * FROM article";
$st=$db->prepare($sql);

if (!$sql) throw new Exception( mysql_error() );
}
catch (Exception $e) { die( $e->getMessage() ); }*/
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Test B3DEV</title>
</head>
<body>
<h1>Liste des articles</h1>
<a href="insert.php">Ajouter une donnée</a>
<?php
// On vérifie qu'il y a bien des articles
if( mysql_num_rows( $sql ) )
//on boucle chaque ligne récupérée
while( $row = mysql_fetch_object( $sql ) )
//on affiche les infos de chaque article
echo '<div><a href="show.php?id='.$row->article_id.'">'.$row->article_name.'</a></div>';
else
//message au cas ou il y a pas d'article
echo 'Aucun article';
?>
</body>
</html>

