// dragon=("<img src='dragon.jpg'>")
// document.write(dragon)


function getRandomInteger(min,max){
	return Math.floor(Math.random()*(max-min+1)+min)
}

function requestInteger(mesage, min,max){
	do {
	 a= parseInt(window.prompt(mesage))
	}
	while (a<min || a>max || a != parseFloat(a)|| isNaN(a))
	return a
}

function kaspirmas(){
	var kaspirmas=Math.random()
	// console.log(kaspirmas)
	if (kaspirmas>0.5){
		return("dragon")
		// return(0)
	}else{
		return("player")
		// return(1)
	}
}


