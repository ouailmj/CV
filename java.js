alert('voilaaaa!!');//premiere alerte
alert('looool');//deuxieme alerte
alert(5.2);//3eme alert
/*multiline
ouf*/
var x = 5;
var X = 30;
var prenon = 'ouail', nom = 'mjahed',age = 20;
var ville = "";
ville = "kech";
var bool1 = true;
var bool2 = false;
ville ="atlass issille\"53\"";
var a = null;
var b = undefined;
var c = NaN;
alert("variable type : " + typeof(x) +
"\nvariable a :" + typeof(a) +"\nvariable de vile : "+typeof(ville));
while(x<10){
	alert('x contient la valeur :'+ x);
	x++;
}
var i = "";
for(i=0;i<10;i++){
alert('i contient la valeur' + i)
}
function multi(x,y){
	return x*y;
}
var s = multi(5,6);
alert(s);
// *********************************************************
var données = {
	nom :"mjahed",
	prenom:"ouail",
	age:25,
	wakha : function(){
	return this.nom + " \n"+ 
	       this.prenom + "\n" +
	       this.age;
	}
};
alert(données.wakha()) ;

var var1="chaine";
var typevar1=typeof(var1);
var var2=new String('je suis un objet');
var typevar2=typeof(var2);

var var3= new String('je suis un objet');
var obj = new Object();
obj.nom="ouail";
obj.prenom="mjahed";
alert(obj.nom);

function ident(p,n,a){
	this.prenon=p;
	this.non=n;
	this.age=a;
}
var pier= new ident("pierre","ouail",25);
var vic=new ident("victore","mjahed",25);

alert(pier.age + ' ' + vic.age);

//***************************************************************************
var vars1="texte";
var vars2="                TEXTE";
alert(vars1.toUpperCase());
alert(vars2.toLowerCase());
alert(vars2.charAt(0));
alert(vars2.charAt(20));
alert(vars2.indexOf('t',1));
alert(vars1.indexOf('t'));
alert(vars2.replace("TEXTE","ouail"));
alert(vars2.slice(0,10));
alert(vars2.trim());
alert(Number.MIN_VALUE);
alert(Number.MAX_VALUE);
alert(Number.POSITIVE_INFINITY);
alert(Number.NaN);
alert(x.toString);
alert(x.toFixed(2));
alert(x.toPrecision(3));
alert(x.toExponential(2));
parseInt(x);// rendre en int une chaine de caractere nombre
parseFloat(x);//rendre float " ""     ""   ""   ""    ""   
//*****************************************************************************
var prenons=['ouail','ouail','ouail','ouail'];
alert(prenons[0]);
prenons[0]='paul';
alert(prenons[0]);
prenons.length;
var gg = {
	pren1 : 'pierre',
	pren2 : 'julia',
	pren3 : 'mjahed'
},lm='';
for(var nn in gg){
	lm += nn + gg[nn];
}
alert(lm);
prenons.push('ouail','kaka');//ajouter en fin
//var tail = prenons.push(...) est le nombre final d'elements de tableau
 prenons.pop();// supprimer dernier element
prenons.unshift('','')//ajout en debut
prenons.shift();//supprime premier element
prenons.splice(1,0,'')// ellement ajouter element a suprimer aprés et element quon veut introduire
prenons.sort();//classer ordre alphabetique
prenons.reverse()//cntre ordre alphabetique 
var chaine=prenoms.join('/') // fait entrer un symbole entre touts les elemnts
prenons.concat(prenonss);//melanger deux tableaux on put introduire + qun emement
Date();// pour la date
Date.now();//s
var d = new Date("January 25 , 2017 01:00:00");//on stock une date date
d.getTime();//prendre la valeur date
d.getFullYear();
d.getMonth();
d.getDate();
d.getHours();
d.getMinutes();
d.getSeconds();
d.getMilliseconds();
setFullYear();//mettre
Math.random();//arbitraire
Math.round(x);//arrondi valeur approche
Math.floor(x);//arrondi supperieur
Math.ceil(x);//arrondi inferieur
Math.min(0,1,2,3,);//minimum 
//" .max " " " " ";//maximum
Math.abs(x);//valeur absolue
Math.pow(3,4);//3^4
Math.sin(x);//valeur sin
Math.cos(x);//valeur cos
Math.sqrt(x);//racine
Math.PI;//valeur de pi


prompt('entrez un nombre');// demander à l'utilisateur
document.getElementById;//permet de prendre un element depuis son id
document.getElementsByTagName;//permet de prendre un element depuis son type decriture
document.getElementsByClassName;// classe
document.querySelector('p');//donne des donnes paragraphe p
document.getElementById('titre').innerHTML;//te donne ce quil ya en paragraphe
document.getElementById('titre')/*querySelector('.para')*/.textContent;// tout ce quil y a de texte en paragraphe
document.title;
document.body;
document.links
document.querySelector('.para').className// change le nom de la classe mais pas le paragraphe
document." "  " " " " " " " "  .style.// le style;
appendChild()//insere une phrase dns un document
document.createTextNode('')// creer un texte
document.body.insertBefore;// insere avant
document.body.removeChild()// supprimer un element
replaceChild(cela,en place de cela);//remplacer
parentNode('acceder au parentss');
childNodes('enfants dun element');
childNodes.nodeValue;
firstChild.nodeValue;
lastChild. "" "" "" //
.nextSibling;
onclick;//en html
x.addEventListener('click',changetext);
.addEventListener('click',function);
"" "" "" "" "" ""('mouseover',function);
"""""""""""""""" ('mousedown',function);
"""""""""""""""" ('mouseup',function);
"""""""""""""""" ('mouseout',function);
p.target;
p.currentTarget
p.type
p.stopPropagation();
e.preventDefault;
*********************************************************************************
window.open('site','_blank','hauteur largeur','la nouvelle fenetre doit remplacer ou non?')
window.close
p.resizeTo(200,200);// changer la hauteur et largeur
var hauteur=screen.height;
var h =screen.availHeight;
var reso=screen.pixelDepth;
navigator.language
navigator.appVersion;
navigator.appName
navigator.product
navigator.cookieEnabled
var loc = navigator.geolocation;//---------------------------------------------
(function(){
    if (loc) {
	    loc.getCurrentPosition(ok);
	}
    else{
	    alert('impossible');
    }
})();
function ok(x){
	alert(x.coords.latitude + ' ' + x.coords.longitude);
}
//---------------------------------------------------------------------------------
location.assign('http://www. ...'
location.reload();
location.replace();
location.href;
location.pathname;
history.back();
history.forward();
history.go(-3);
history.length
.textContent.match(x);
//ig m /*nouvelle ligne*/
.textContent.search(x);
.textContent.replace(x,' ');
.test(x);
.exec(x);
***********************************************
display:inline-block;
min-width:200px
maxlength,required
type = 'email'
type="tel"
if prenon.validity.valueMissing
e.preventDefault;
<canvas></canvas>
var contexte=canvas.getContext('2d');
.fillStyle='#22ccc';// couleur
contexte.fillRect(50,30,30,44)//decalage gauche,decalage du haut,largeur,hauteur
lineWidth='5'
strokeStyle;
strokeRect("""""""")
.moveTo(x,y);
.lineTo(x,y);
.stroke();
.beginPath();
.arc(//decalage gauche ,haut, ongle de comencement, termine:Math.PI)
contexte.createLinearGradient(4 arguments);
contexte.createLinearGradient(4 arguments).addColorStop(0,'#423');// couleurs
contexte.createLinearGradient(4 arguments).addColorStop(0.5,'#E444');
contexte.createRadialGradient(6 arguments);//gauche hauter taille du dique gauche fin hauteur fin
contexte.font="bold 20px Verdana, Arial, serif"
contexte.strokeStyle='#'
contexte.strokeText('Texte creux' , 25, 100);// texte nest pas remplie au milieu
imagevar.addEventListener('load', affiche);
function affiche(){
	contexte.drowImage(imagevar,50,25,500,350)//display:none; en css
}
contexte.rotate(ongle);
contexte.fillStyle=''
contexte.translate(75,75);
setInterval()
var x = document.getElementById('heure');
var y = setInterval(horloge, 1000);
function horloge(){
	var z = new Date();
	x.innerHTML = z.toLocaleTimeString();
}
function arreter(){
	clearInterval(y);
}
setTimeout(functionanonymeautoinvoqué,temps aprés en ms )
setTimeout((function(){document.body.style.backgroundColor='red'}),200);
document.cookie = 'prenon=pierre;expires=Sun,17 Jul 2016 12:00:00 UTC;path=/';
var c = document.cookie;
document.cookie='prenom=Julia'//changer données cookie
function creercookie(nom,valeur,jour){
	if(jour){
		var date = new Date();
		date.setTime(date.getTime[]+(jour*24*60*60*1000));
		var exp = date.toGMTString();
	}
	else var exp = ''
}
function lirecookie(nom){
	var noms=nom + "=";
	var ctableau = document.cookie.split(;);
	for(var i=0;i<ctableau.lenght;i++){
		var c = ctableau[i];
		while(c.charAT(0)==' '){
			c = c.substring(1,c.length);
		}
		if(c.indexOf(noms)== 0){
			return c/substring(noms.length,c.length);
		}
		
	}
	return null;
}
function supprimercookie(nom){
	creercookie(nom,'',-1);
	
}
type='number' min="1" max="2"
var y = document.getElementById('bouton');
y.addEventListener('click',fonction);
var y = document.getElementById('bouton');
y.addEventListener('click',fonction);
function fonction(){
	var z = document.getElementById('nombre').value;
	var a = document.getElementById('para');
	try{
		if(isNaN(z) || (z == '')){
			throw 'veuillez entrer un nombre ';
		}
		else if((z > 10) || (z < 1)){
			throw 'nombre petit ou grand ';
		}
		else {
			a.innerHTML = 'ok';
		}
		
	}
	catch(e){
		para.innerHTML = e;
	}
	
	finally{
		document.getElementById('nombre').value=''
	}
}

'use strict'// mode strict
document.location.href='http://www.google.com'