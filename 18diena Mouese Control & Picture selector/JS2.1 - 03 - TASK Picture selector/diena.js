var images = document.querySelectorAll("ul#listas img");
var aa = document.querySelectorAll("ul#listas a");
// var counter= document.querySelector("p span");
// var counter2= document.getElementById("counter2");

function mark(event){
	console.log(event.target);
	var selected_image = event.target;
	selected_image.classList.toggle("border")

	var total= document.querySelectorAll(".border");
	counter.innerHTML=total.length


}


function gone(event){
	
	var selected_image = event.target;
	if(selected_image.previousSibling && selected_image.previousSibling.tagName == 'IMG'){
		selected_image.previousSibling.classList.remove("border")
	} else {
		selected_image.classList.remove("border")
	}
	selected_image.parentNode.classList.add("puf")

	var del= document.querySelectorAll(".puf");
	counter2.innerHTML=del.length

	var total= document.querySelectorAll(".border");
	counter.innerHTML=total.length
}

for(i=0;i<aa.length;i++){
	images[i].addEventListener('click',mark);
	images[i].addEventListener('dblclick',gone);
	aa[i].addEventListener('click',gone);
}
