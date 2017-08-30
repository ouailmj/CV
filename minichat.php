<!DOCTYPE html>
<?php
session_start();
?>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Mini-chat</title>
    </head>
    <style>
    form
    {
        text-align:center;
    }
	*{
		background:red
	}
    </style>
    <body>
    
    <form action="minichat_post.php" method="post">
        <p>
        <label for="pseudo">Pseudo</label> : <input type="text" name="pseudo" id="pseudo" /><br />
        <label for="message">Message</label> :  <input type="text" name="texts" id="texts" /><br />

        <input type="submit" value="Envoyer" />
	</p>
    </form>

<?php
// Connexion à la base de données
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
$_SESSION='pseudo';
// Récupération des 10 derniers messages
$rep= $bdd->query('SELECT pseudo,texts,dates FROM minichat ORDER BY ID DESC LIMIT 0, 10');

// Affichage de chaque message (toutes les données sont protégées par htmlspecialchars)
while ($don = $rep->fetch())
{
	echo '<p><strong>' . htmlspecialchars($don['pseudo']) . '  le  ' . $don['dates'] . '</strong> :  ' . htmlspecialchars($don['texts']) . '</p>';
}

$rep->closeCursor();

?>
    </body>
</html>


</body>
</html>