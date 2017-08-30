 <?php

if(isset($_POST['valider'])){
	if($_FILES['photo']['error'] == 0){
		if($_FILES['photo']['size']<1500000){
			$extention = strrchr($_FILES['photo']['name'],'.');
			echo $extention;
		}
		else {
			$error = "fichier trop lourd";
		}
	}
	else {
		$error = "votre image ne peut pas se telecharger";
	}
}




?> 




<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Formulaire étape 2</title>
	</head>
	<body>
	
		<div class="photo">
			<h2 align="center">
				Formulaire 
			</h2>
			<h3 align="center">
				Etape 2
			</h3>
			<form method="POST" action="" enctype="multipart/form-data">
				<label for="photo">
					veuillez inserer une photo
				</label>
				<input type="file" name="photo" id="photo" required="true" enctype= "multipart/form-data"><br />
				<input type="submit" name="valider" value="valider">
			</form>
			
	    </div>
	</body>
	
</html>