<?php
$link = mysql_connect('localhost','username','password');
if(!$link) die('Erreur de connection');
mysql_select_db ('ma_base_de_donnees', $link);
?>