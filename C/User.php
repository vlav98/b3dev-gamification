<?php

/* page de bienvenue/accueil */
function bienvenue(){
	$profil=  isset($_SESSION['profil'])?$_SESSION['profil']:'';
	echo('Bienvenue '. $profil['nom'] . ' ' . $profil['prenom']);
/*	$tests = test($profil['num_grpe']);
	require('./modele/etudiant/DeskEtudiantBD.php');
	require('./vue/etudiant/AccueilEtu.tpl'); */
}

	
function logout(){
	session_destroy();
	header('Location:index.php');
	//require('./index.php');
}
	
	
/* fonctionne avec questionReponse.php */
/*
function showQ() {
	require('./modele/etudiant/questionReponse.php');
	echo $donnees['texte'];
	var_dump($donneesR);
}*/

/*
function studentCo($id_etu) {
	require ("modele/connect_SQL.php") ;
	$select = "UPDATE etudiant SET bConnect=1 WHERE etudiant.id_etu='%s' ;";
	$sql = sprintf ($select,$id_etu);		
	$res = mysqli_query($link, $sql)	
	or die (utf8_encode("erreur de requete : ") . $select); 
}
*/
?>

