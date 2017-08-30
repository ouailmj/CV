<?php

session_start();

if(isset($_POST['valider'])){
	if($_FILES['photo']['error'] == 0){
		if($_FILES['photo']['size'] < 2000000){
			$extension = strrchr($_FILES['photo']['name'],'.');
			if($extension == '.jpg' || $extension == '.png'){
				move_uploaded_file($_FILES['photo']['tmp_name'],'img/'.$_FILES['photo']['name']);
				header("Location: cv_formulaire_etape_3_sur_5.php");
			}
			else{
				echo "votre fichier n'est pas comforme";
			}
		}
		else{
			echo "fichier trop lourd";
		}	
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