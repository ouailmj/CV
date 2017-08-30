<?php

session_start();

if(isset($_POST['go'])){
	
			
				header("Location: cv_formulaire_etape_3_sur_5.php");
			
}


?>
<!DOCTYPE html>
<html>
<head>
	<title>créez votre CV</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="STYLECVENTRER.css">
</head>
<body>
	<div class="tete" id="tete">
		<div class="search" id="search">
			<form method="post" action="" class="formulaire">
			<input class="recherche" type="text" name="recherche" placeholder="une recherche">
			<input class="go" name="go" type="submit" value="go">
			</form>
		</div>
		<div class="logobarre" id="logobarre">
			<div class="logo" id="logo">
			</div>
			<div class="barre" id="barre">	
		<table>
	<tr>
		<td>
			<a href="produit.html" class="produit" id="produit">
				Produit
			</a>	
		</td>
		<td>	
			<a href="propos.html" class="propos" id="propos">
				A propos
			</a>
		</td>
		<td>
			<a href="outils.html" class="outils" id="outils">
				Outils
			</a>
		</td>
		<td>
			<a href="contact.html" class="contact" id="contact">
				Contact
			</a>
		</td>	
	</tr>
	<tr>
		<td>
			<a href="web.html" class="firstrow" id="web">
				web
			</a>	
		</td>
		<td>	
			<a href="histoire.html" class="secondrow" id="histoire">
				Histoire
			</a>
		</td>
		<td>
			<a href="carte.html" class="thirdrow" id="carte">
				Carte
			</a>
		</td>
	</tr>
	<tr>	
		<td>
			<a href="renseignement.html" class="firstrow" id="renseignement">
				Renseignement
			</a>	
		</td>
		<td>	
			<a href="carriere.html" class="secondrow" id="carriere">
				carriere
			</a>
		</td>
		<td>
			<a href="logo.html" class="thirdrow" id="logo">
				logo
			</a>
		</td>
	</tr>	
	<tr>	
		<td>
			<a href="assistance.html" class="firstrow" id="assistance">
				Assistance
			</a>	
		</td>
		<td>	
			<a href="media.html" class="secondrow" id="media">
				Media
			</a>
		</td>
		<td>
			<a href="posters.html" class="thirdrow" id="posters">
				Posters
			</a>
		</td>
	</tr>	
		</table>		
			</div>
		</div>	
	</div>
	<div class="corp" id="corp">
		<h2>
			Creez gratuitemet un superbe CV
		</h2>
		<a href="cv.php" class="bouton" id="bouton">
			Creez votre CV
		</a>
		<div class="paragraphes" id="paragraphes">
			<p>
			Creez un CV perfectionné qui méritera sa place en en haut de la pile	
			</p>
			<p>
				Le CV est ta carte de visite professionnelle. Il doit permettre à une entreprise d'avoir une vue d'ensemble de ton profil, de tes principales qualifications et lui donner envie de te rencontrer. C'est ton image de marque, ton argument de «vente». Prends le temps de le préparer avec rigueur et méthode.
			</p>
			<p>
				Généralement, l'employeur prend très peu de temps pour lire un CV (environ 30 secondes). D'où l'importance de faire un document qui te présente fidèlement, de façon positive et efficace, mais qui sorte de l'ordinaire!
			</p>
			<p>
				Gràce a nos specialistes en ce domaine
			</p>
		</div>
		<a href="design.html" class="bouton" id="bouton">Ouvrir un design CV</a>
	</div>
</body>
</html>