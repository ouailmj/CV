
var checkbox = document.getElementById('check');
var hiddeninputs = document.getElementById('exp2');
var check2 = document.getElementById('check2');
function showHide(){
	if(checkbox.checked){
		hiddeninputs.style.display = "block";
		check2.style.display = "block";
	}
	else{
		hiddeninputs.style.display = "none";
		check2.style.display = "none";
	}
}
function showHideShipInfo(){
	if(document.getElementById('check2').checked){
		document.getElementById('exp3').style.display="block";
	}
	else{
		
		document.getElementById('exp3').style.display="none";
	}
}

