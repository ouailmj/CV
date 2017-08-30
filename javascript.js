$(function() {
   $('sel').each(function(index){
	   this.src = 'images2/i' + (index+1) + '.jpg';
  //Une ou plusieurs instructions JavaScript
	});
	
   $('#text').html('Hello world. Ce texte est affiché par jQuery.');
   
	var variableJQ = $(variableJS);
   
   $('#logo').attr('src','logo.gif');
	$('#logo').attr({src: 'logo.gif', alt: 'Logo de la société', width: '200px'});
	$("a").attr({target:function(){…}});
   
   var test = $('a').attr('href');
           document.write(test);
		   
	$('a').attr('target', function() {
	if(this.host == location.host) return '_self'
	else return '_blank'
	});

	$(sel).removeAttr('attribut');

	var taille = $('.para').css('font-size');
	
	$('.para').css('font-size', '40px');
	
	$('#julia').addClass('rouge');
	
	$('#eric').removeClass('vert').addClass('rouge'); // meme $('#paul').toggleClass('vert').toggleClass('rouge').toggleClass('grand').toggleClass('petit'); $('#pierre').removeClass('vert grand').addClass('rouge petit');
 
	if ($('#jean').hasClass('rouge')) // $('#jean').is('.grand.rouge'); pour plusieurs class
  alert('le span #jean est de classe rouge');
else
  alert('le span #jean n\'est pas de classe rouge');

	$(':radio#H:checked').val() 
	
	var posparent=$('#parent').offset().background// par exemple;

	$('div').width('400px');
	
	$.data(nom, 'variable', nom_don: don); //exp $.data(div, 'mesValeurs', {premier: 'bonjour', deuxieme: 12, troisieme: 'http://www.siteduzero.com'});
 
	$.removeData(nom,'var');
	
	.append() insère du contenu à la fin de la sélection ;
prepend() insère du contenu au début de la sélection ;
before() insère du contenu avant la sélection ;
after() insère du contenu après la sélection.

	$('hr').replaceWith('<br>');

	$('h2').each(function(){
  var elemH2 = $(this);
  elemH2.replaceWith('<h3>' + elemH2.text() + '</h3>');
});

	eai.appendTo(cible) insère un élément à la fin de la cible ;
eai.prependTo(cible) insère un élément au début de la cible ;
eai.insertBefore(cible) insère un élément avant la cible ;
eai.insertAfter(cible) insère un élément après la cible.
 
	$('<li>Deuxième élément bis</li>').insertAfter($('li:nth-child(2)'));

	
	 $(function() {
    $('img').one('click', function() {
      $('#message').text('Vous avez cliqué sur l\'image. Désormais, je resterai insensible aux clics.').fadeIn(1000).fadeOut(5000);
    });
  });
	
	
 
 
 
 });
 
