<?php

/* page de bienvenue/accueil */
function bienvenue(){
	$profil=  isset($_SESSION['profil'])?$_SESSION['profil']:'';
	echo('Bienvenue '. $profil['nom'] . ' ' . $profil['prenom']);
/*	$tests = test($profil['num_grpe']);
	require('./modele/etudiant/DeskEtudiantBD.php');
	require('./vue/etudiant/AccueilEtu.tpl'); */
}

function getBDDInstance(){
	require_once('./M/MySQLClass.php');
	$bdd = MySQL::init("localhost", "projet_b3dev", "root", "");
	return $bdd;
}
	
function signup(){

	if(isset($_SESSION["User"]) && !empty($_SESSION["User"]))
		header("Location:index.php?controle=Services&action=redirect");
	else {
		getBDDInstance()->insertData("User", array("user_type", "username", "user_email", "firstname", "lastname", "password"), array($usertype, $username, $email, $fname, $lname, $pass));
		$_SESSION["User"] = $_POST ["username"];
		require('./M/UserClass.php'); 
	}
}

function user_type(){
	$select= "SELECT * FROM Session WHERE idGroupe = '%s'"; 
	$req = sprintf($select, $idGroupe);
	$res = mysqli_query($link, $req)	or die (utf8_encode("erreur de requête : ") . $req); 

	if (mysqli_num_rows ($res) == 0) {
		return false ;
	}
	
	$tab= array();

	$i=0;	
	while($ligne = $res->fetch_assoc() and isset($ligne)){
		$tab[$i]=$ligne;
		$i++;
	}
	
	return $tab;
}

function login(){
	$_SESSION["User"] = $_POST["usernameLog"];
	header("Location:index.php?controle=log&action=getFormConnection");
}

function logout(){
	session_destroy();
	header('Location:index.php');
	//require('./index.php');
}


function addToCart(){
	
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

