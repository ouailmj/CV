<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=exp', 'root', '');
if(ISSET($_POST['validation'])){
if(!isset($_COOKIE['nom']) AND !isset($_COOKIE['pass'])){	
	if(ISSET($_POST['nom']) AND ISSET($_POST['pass'])){
		$pass=sha1($_POST['pass']);
		$nom=htmlspecialchars($_POST['nom']);
		$requser = $bdd->prepare("SELECT * FROM membres WHERE nom = ? AND pass = ?");
		$requser->execute(array($nom, $pass));
		$userexist = $requser->rowCount();
		if($userexist == 1){
			$userinfo = $requser->fetch();
			setcookie("nom", $nom, time() + (86400*100), "/");
			setcookie("pass", $pass, time() + (86400*100), "/");
			$_SESSION['id']=$userinfo['id'];
			$_SESSION['nom']=$userinfo['nom'];
			$_SESSION['mail']=$userinfo['mail'];
			header("Location : profile.html");
		}
		else{
			header("Location : CVINSCRIPTION.html");
			$erreur = "nom ou mot de pass incorrect";
		}
	}
}
else{
	$nom = htmlspecialchars($_COOKIE['nom']);
	$pass = sha1($_COOKIE['pass']);
	$requser = $bdd->prepare("SELECT * FROM membres WHERE nom = ? AND pass = ?");
	$requser->execute(array($nom, $pass));
	$userexist = $requser->rowCount();
	if($userexist == 1){
			$userinfo = $requser->fetch();
			setcookie("nom", $nom, time() + (86400*100), "/");
			setcookie("pass", $pass, time() + (86400*100), "/");
			$_SESSION['id']=$userinfo['id'];
			$_SESSION['nom']=$userinfo['nom'];
			$_SESSION['mail']=$userinfo['mail'];
			header("Location : profile.html");
	}
	else{
			header("Location : CVINSCRIPTION.html");
			$erreur = "nom ou mot de pass incorrect";
		}
}	
}
?>	