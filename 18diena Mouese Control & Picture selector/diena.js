var mygtukas = document.getElementById('mygtukas');
var blynas=	document.getElementById("blynas")

function toggleRectangle(){
	//ter toggle (nuima arba uzdeda klase)
	// blynas.classList.toggle("hide")
	//per if'a
	if (blynas.style.display=="none"){
		blynas.style.display="block";
	}else{
		blynas.style.display="none";
	}
}

function spalva(){
	blynas.style.background="red"
}
function spalva2(){
	blynas.style.background="blue"
}
// function spalva3(){
// 	blynas.style.background="green"
// }
function spalva3(){
	blynas.classList.toggle("bluee")
	blynas.style.background="green"
	// blynas.innerHTML="asdasdasd"
}

mygtukas.addEventListener('click', toggleRectangle);
blynas.addEventListener('mouseover', spalva);
blynas.addEventListener('mouseout', spalva2);
blynas.addEventListener('dblclick', spalva3);





	