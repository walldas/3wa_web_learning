var canvas=document.querySelector("#canvas")
var context=canvas.getContext("2d")
var is_drawing=false
var curent_location
var points=[]

canvas.addEventListener("mousedown",onMouseDown)
canvas.addEventListener("mouseup",onMouseUp)
canvas.addEventListener("mouseleave",onMouseLeave)
// canvas.addEventListener("mousemove",onMouseMove)


function onMouseDown(event){
	is_drawing=true
	curent_location=getLocation(event)
	points.push(curent_location)
	drowPoint(curent_location)

}
function drowPoint(location){
	context.beginPath()
	context.arc(curent_location.x,curent_location.y,2,0,2*Math.PI)
	context.stroke()
}
function onMouseLeave(event){
	is_drawing=false
}function onMouseUp(event){
	is_drawing=false
}
function onMouseMove(event){
	var location=getLocation(event)
	if (is_drawing){
	console.log("X:"+location.x+" Y:"+location.y)
	draw(location)
	}
}

function getLocation(event){
 var rectangle=canvas.getBoundingClientRect()
 var location={
 	x:event.clientX - rectangle.left,
 	y:event.clientY - rectangle.top
 }
 return location
}

function draw(location){
	context.beginPath()
	context.moveTo(curent_location.x,curent_location.y)
	context.lineTo(location.x,location.y)
	context.closePath()
	context.stroke()
	curent_location=location
}

$(document).ready(function(){
	$("#play").click(function(e){
		e.preventDefault()

		for(var i=0;i<points.length;i++){
			if(i==0){
				curent_location=points[0]
			}else{
				draw(points[i])
			}
		}
	})
})