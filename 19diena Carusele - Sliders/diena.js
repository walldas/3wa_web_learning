document.addEventListener("DOMContentLoaded", function(event) {
    console.log("DOM fully loaded and parsed");
 
//vykdyti kazka kai uzsikrove visas html




var toggleToolbar= document.getElementById("toggle-toolbar")
// console.log(toggleToolbar)
toggleToolbar.addEventListener("click", function(){
	//alert("paspaustas migtukas")//paspaudus migtuka paslepti
	var toolbar=document.getElementById("toolbars");
	toolbar.classList.toggle("hide")
	


//----------------------------------------rodiklytes--UP/DOWN------------------------------\
var toggleArrowDown=document.getElementById("toggleArrowDown")
var toggleArrowRight=document.getElementById("toggleArrowRight")

toggleArrowDown.classList.toggle("hide")
toggleArrowRight.classList.toggle("hide")
	// console.log(toolbar);
})//--------------------------------------Play/Pause------------------------------------------/

var toggleplay=document.getElementById("autoPlay")
toggleplay.addEventListener("click", function(){
togglepause.classList.toggle("hide")
toggleplay.classList.toggle("hide")

})

var togglepause=document.getElementById("pause")
togglepause.addEventListener("click", function(){
toggleplay.classList.toggle("hide")

togglepause.classList.toggle("hide")
})


//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
document.addEventListener("keyup", function(event){
// console.log(event.keyCode)
if(39==event.keyCode){
	pakeistiNuotrauka()
}
else if(37==event.keyCode){
	pakeistiNuotraukaAtgal()
}
})



var pirmyn=document.getElementById("pirmyn")
var atgal=document.getElementById("atgal")
var random=document.getElementById("random")
var autoPlay=document.getElementById("autoPlay")
var pause=document.getElementById("pause")

pirmyn.addEventListener("click", pakeistiNuotrauka)
atgal.addEventListener("click", pakeistiNuotraukaAtgal)
random.addEventListener("click", randomNuotrauka)
autoPlay.addEventListener("click", autoPlayy)
pause.addEventListener("click", stop)

// var slider=document.querySeelectorAll("#slider img")

 });
//_____________________________________bendrines funkcijos_________________________\

function getRandomInteger(min,max){
	return Math.floor(Math.random()*(max-min+1)+min)
}
function changePicture(imageNumber){
	var sliderImage=document.getElementById("sliderImage")
	sliderImage.setAttribute("src","carusel/images/"+imageNumber+".jpg")
}
//__________________________________________________________________________________/
var imageNumber=1
function pakeistiNuotrauka (){
	// var sliderImage=document.getElementById("sliderImage")
	imageNumber++;
	// console.log(imageNumber,sliderImage)
	if(imageNumber>6){
		imageNumber=1
	}
	// sliderImage.setAttribute("src","carusel/images/"+imageNumber+".jpg")
	changePicture(imageNumber)
}
function pakeistiNuotraukaAtgal (){
	// var sliderImage=document.getElementById("sliderImage")
	imageNumber--;
	// console.log(imageNumber,sliderImage)
	if(imageNumber<1){
		imageNumber=6
	}
	// sliderImage.setAttribute("src","carusel/images/"+imageNumber+".jpg")
	changePicture(imageNumber)
}
function randomNuotrauka(){
	var buvesimageNumber
	buvesimageNumber=imageNumber
	// var sliderImage=document.getElementById("sliderImage")
	imageNumber=getRandomInteger(1,6)
	while (imageNumber==buvesimageNumber){
		imageNumber=getRandomInteger(1,6)
	}
	// sliderImage.setAttribute("src","carusel/images/"+imageNumber+".jpg")
	changePicture(imageNumber)
	console.log(imageNumber,sliderImage)
}


slideInterval=0
function autoPlayy(){
	slideInterval=window.setInterval(pakeistiNuotrauka,1000)
	console.log("autoPlay ON")
	
}
function stop(){
	window.clearInterval(slideInterval)
	console.log("autoPlay OFF")
	
}