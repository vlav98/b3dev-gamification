<?php

function getBDDInstance()
{
	require_once("./M/MySQLClass.php");
    $bdd = MySQL::init("localhost","projet_pwebc","root","");
    return $bdd;
}

function redirect() {
	if(isset($_SESSION["User"]) && !empty($_SESSION["User"]))
		require("./V/services.tpl");
	else
		header("Location:index.php");
}