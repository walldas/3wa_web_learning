//mokomes su canvas
var canvas=document.querySelector("#canvas")
var context=canvas.getContext("2d")


$(document).ready(function(){
	$("button[type=submit]").click(function(e){
		e.preventDefault()

		var x=$("#x").val()
		var y=$("#y").val()
		var width=$("#width").val()
		var height=$("#height").val()

		drawRectangle(x,y,width,height)
	})
})




function drawRectangle(x,y,width,height){
context.rect(x,y,width,height)
context.stroke()
}

function drawCustomRectangle(x, y, width, height) {
	context.beginPath();
	context.lineWidth="6";
	context.strokeStyle="blue";
	context.rect(x, y, width, height)	; 
	context.fillStyle="#FF0000";
	context.fillRect(x, y, width, height);
	context.stroke();
}