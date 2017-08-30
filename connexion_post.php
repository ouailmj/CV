<?php


<?php
try
{
    $bdd = new pdo('mysql:host=localhost;dbname=espacemembres;charset=utf8', 'root', 'root');
}
 
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}
if(ISSET[$_POST('pseudo')] AND ISSET[$_POST('pass')] AND ISSET[$_POST('cpass')] AND ISSET[$_POST('mail')]]){
$pass=htmlspecialchar($_POST['pass']);
$cpass=htmlspecialchar($_POST['cpass']);
$mail=htmlspecialchar($_POST['mail']);
$pseudo=htmlspecialchar($_POST['pseudo']);
if(preg_match("#^[0-9a-zA-Z]+@[a-zA-Z]+/.[a-z]{2,4}$#",$mail)){
	if{
		if($pass==$cpass){
			$rep=bdd->query('SELECT pseudo FROM formulaire WHERE pseudo=$pseudo');
			$count=rep->rowCount();
			if($count==0){
				$rep=$bdd->prepare('INSERT (pseudo,pass,mail) VALUE($pseudo,$pass,$mail)')
			}
		}
	}
}
}




?>