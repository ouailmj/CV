<?php 
session_start();
if (isset($_POST['valider'])){
	if(!empty($_POST['exp1'])){
		$_SESSION['exp1'] = $_POST['exp1'];
		if(!empty($_POST['exp2'])){
			$_SESSION['exp2'] = $_POST['exp2'];
			if(!empty($_POST['exp3'])){
				$_SESSION['exp3'] = $_POST['exp3'];
			}
		}
		header("Location: cv_formulaire_etape_4_sur_5.php");
	}
}

?>



<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>experiences professionnelles</title>
		<link rel="stylesheet" type="text/css" href="style_etape_3.css">
	</head>
	<body>
		<h2 align="center">
			experiences professionnelles
		</h2>
		<h3 align="center">
			etape 3
		</h3>
		<p>Veuiler parler d'une de vos experiences</p>
		<div class="experience">
			<table>
				<form method="POST" action="">
					<tr>
						<td>
							<input type="text" name="exp1" id="exp1" class="exp1" required="true">
						</td>
					</tr>
					<tr>
						<td>
							<input type="checkbox" name="check" id="check" class="check" onclick="showHide()">
						</td>
					</tr>
					<tr>
						<td>
							<input type="text" id="exp2" name="exp2" class="exp2">
						</td>
					</tr>
					<tr>
						<td>
							<input type="checkbox" id="check2" name="check2" class="check2" onclick="showHideShipInfo()">
						</td>
					</tr>
					<tr>
						<td>
							<input type="text" name="exp3" id="exp3" class="exp3">
						</td>
					</tr>
					<tr>
						<td>
							<input type="submit" value="valider" id="valider" name="valider">
						</td>
					</tr>	
				</form>
			</table>
		</div>
	</body>
	<script src="script_etape_3.js">
	</script>
</html>