<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>CV</title>
<link rel="Stylesheet" href="cv.css">
</head> 
<body>
<form method="post" action="projet_post.php">
<div>
<div class="infophoto">
<div class="info">

<label for="nom">nom :</label>
<input type="text" id="nom"><br /><br />
<label for="prenom">prenom :</label>
<input type="text" id="prenom"><br />
<p>Né le : <strong><input type="number" id="jour" ></strong> , <strong><input type="text" id="mois"></strong>  <strong><input type="number" id="année"></strong> </p>
<p>adresse : <input type="text" id="adresse"></p>
<p>numéro : + <input type="number" id="tel"> </p>
<p>email : <input type="email" id="email"></p>
<p>permis :<input type="texte" min="A" max="C">(<strong></strong>)</p>
</div>
<div class="photo">
<canvas id="photo">
<img src="">
</canvas>
</div>
</div>
</div>
</form>
</body>
<script src="javaprojetphoto.js"></script>
</html>