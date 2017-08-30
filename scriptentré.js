var web = document.getElementById('web');
var produit = document.getElementById('produit');
var propos = document.getElementById('propos');
var outils = document.getElementById('outils');
produit.addEventListener('mouseover',Produit);
propos.addEventListener('mouseover',Propos);
outils.addEventListener('mouseover',outils);
function Produit() {
	web.style.display="block";
}
