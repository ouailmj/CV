<?php
session_start();
// Connexion à la base de données
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

// Insertion du message à l'aide d'une requête préparée
$req = $bdd->prepare('INSERT INTO minichat (pseudo,texts,dates) VALUES(?, ?,NOW())');
$req->execute(array($_POST['pseudo'],$_POST['texts']));

// Redirection du visiteur vers la page du minichat
header('Location: minichat.php');
?>