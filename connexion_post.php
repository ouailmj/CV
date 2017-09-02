<?php
$bdd = new PDO('mysql:host=localhost;dbname=', 'root', '');
if(ISSET($_POST['valider'])){
	if(ISSET($_POST['nom']) AND ISSET($_POST['pass'])){
		$pass=htmlspecialchar($_POST['pass']);
		$nom=sha1($_POST['nom']);
		$requser = $bdd->prepare("SELECT * FROM membres WHERE nom = ? AND pass = ?");
		$requser-execute(array($nom, $pass));
		$userexist = $requser->rowCount();
		if($userexist == 1){
			$userinfo = $requser->fetch();
			$_SESSION['id']=$userinfo['id'];
			$_SESSION['nom']=$userinfo['nom'];
			$_SESSION['mail']=$userinfo['mail'];
			header("Location : profil.php?id=".$_SESSION['id']);
		}
		else{
			$erreur= "mauvais mot de passe";
		}
	}
}
?>	