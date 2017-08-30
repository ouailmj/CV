var web = document.getElementById('web');
var renseignement = document.getElementById('renseignement');
var assistance = document.getElementById('assistance');
var histoire = document.getElementById('histoire');
var carriere = document.getElementById('carriere');
var media = document.getElementById('media');
var carte = document.getElementById('carte');
var Logo = document.getElementById('Logo');
var posters = document.getElementById('posters');

var produit = document.getElementById('produit');
var propos = document.getElementById('propos');
var outils = document.getElementById('outils');
produit.addEventListener('mouseover',Produit);
propos.addEventListener('mouseover',Propos);
outils.addEventListener('mouseover',Outils);
function Produit() {
	web.style.display="block";
	renseignement.style.display="block";
	assistance.style.display="block";
}

function Propos() {
	histoire.style.display="block";
	carriere.style.display="block";
	media.style.display="block";
}

function Outils() {
	carte.style.display="block";
	Logo.style.display="block";
	posters.style.display="block";
}