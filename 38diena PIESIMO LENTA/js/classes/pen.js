function Pen(){
	this.color="blue"
	this.size=2
}
Pen.prototype.config=function(context){
	context.strokeStyle=this.color
	context.lineWidth=this.size
}
