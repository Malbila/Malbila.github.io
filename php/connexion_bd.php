<?php

function connect_bd(){
	$dn = 'mysql:dbname=tests;host=localhost';
		try
		{
			$connexion = new PDO($dn,'root','');
		}
		catch(PDOException $e)
		{
			die("Erreur :".$e->getMessage());
			exit();
		}
	return $connexion;
}
?>
