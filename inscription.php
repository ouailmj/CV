<?php
$bdd = new PDO('mysql:host=localhost;dbname=', 'root', '');

if(isset($_POST['validation'])){
	if(isset($_POST['nom']) AND isset($_POST['pass']) AND isset($_POST['conpass']) AND isset($_POST['mail'])){
		if($_POST['pass'] = $_POST['conpass']){	
			$nom = htmlspecialchars($_POST['nom']);
			$pass = sha1($_POST['pass']);
			$conpass = sha1($_POST['conpass']);
			$mail = htmlspecialchars($_POST['mail']);
			$requser = $bdd->prepare("SELECT * FROM membres WHERE nom = ?");
			$requser->execute(array($nom));
			$nomexist= $requser->rowCount();
			if($nomexist == 0){
				$insertmbr=bdd->prepare("INSERT INTO membre (nom, mail, pass) VALUES(?, ?, ?)");
				$insertmbr->execute(array($nom, $mail, $pass));
				header('Location: profil.html');
			}
			else{
				$erreur = "nom deja utilisé";
			}
		}
	}
}
?>