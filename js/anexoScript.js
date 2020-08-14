/*Landing Page*/
document.getElementById("btnAbrirPopup").onclick=function(){
	document.getElementById("overlay").style.visibility="visible";
}

document.getElementById("btn-cerrar-popup").onclick=function(){
	document.getElementById("overlay").style.visibility="hidden";
}
/*Página Web Comercial*/
document.getElementById("btnAbrirPopup2").onclick=function(){
	document.getElementById("overlay2").style.visibility="visible";
}

document.getElementById("btn-cerrar-popup2").onclick=function(){
	document.getElementById("overlay2").style.visibility="hidden";
}

/*One Page*/
document.getElementById("btnAbrirPopup3").onclick=function(){
	document.getElementById("overlay3").style.visibility="visible";

}

document.getElementById("btn-cerrar-popup3").onclick=function(){
	document.getElementById("overlay3").style.visibility="hidden";
}
/*Mas*/
document.getElementById("btnAbrirPopup4").onclick=function(){
	document.getElementById("overlay4").style.visibility="visible";
	
}

document.getElementById("btn-cerrar-popup4").onclick=function(){
	document.getElementById("overlay4").style.visibility="hidden";
}

/*Scripts de la página de servios*/

document.getElementById("btn-lp").onclick=function(){

	document.getElementById("hoja1").style.visibility="visible";
	document.getElementById("hoja2").style.visibility="hidden";
	document.getElementById("hoja3").style.visibility="hidden";
	
}

document.getElementById("btn-lp2").onclick=function(){
	
	document.getElementById("hoja2").style.visibility="visible";
	document.getElementById("hoja1").style.visibility="hidden";
	document.getElementById("hoja3").style.visibility="hidden";
	
}

document.getElementById("btn-lp3").onclick=function(){
	
	document.getElementById("hoja3").style.visibility="visible";
	document.getElementById("hoja1").style.visibility="hidden";
	document.getElementById("hoja2").style.visibility="hidden";
	
}