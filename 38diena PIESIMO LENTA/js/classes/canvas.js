function Canvas(pen){
	this.canvas=document.querySelector("#canvas")
	this.context=this.canvas.getContext("2d")

	this.current_location=null
	this.is_draving=false
	this.pen=pen
	this.points = [];

	this.canvas.addEventListener("mousedown",this.onMouseDown.bind(this))
	this.canvas.addEventListener("mouseup",this.onMouseUp.bind(this))
	this.canvas.addEventListener("mouseleave",this.onMouseLeave.bind(this))
	this.canvas.addEventListener("mousemove",this.onMouseMove.bind(this))
}

Canvas.prototype.onMouseMove = function(event) {
	var location = this.getLocation(event);
	if(this.is_drawing) {
		this.points.push(location);
		for(var i = 0;  i < this.points.length; i++) {
			if(i > 0) {
				this.pen.config(this.context);
				this.context.beginPath();
				this.context.lineCap = 'round';
				this.context.moveTo(this.points[i-1].x, this.points[i-1].y);
				if(i + 1 != this.points.length) {
					this.context.quadraticCurveTo(
					    this.points[i].x,
					    this.points[i].y,
					    this.points[i + 1].x,
					    this.points[i + 1].y
					);
				} else {
					this.context.lineTo(this.points[i].x, this.points[i].y);
				}
				this.context.stroke();
			}
		}
	}
}


Canvas.prototype.onMouseDown=function(event){
	this.is_drawing=true
	this.current_location=this.getLocation(event)
}
Canvas.prototype.onMouseUp=function(event){
	this.is_drawing=false
	this.points = []
}
Canvas.prototype.onMouseLeave=function(event){
	this.is_drawing=false
	this.points = []
}
Canvas.prototype.getLocation=function(event){
	var rectangule=this.canvas.getBoundingClientRect()

	var location={
		x:event.clientX-rectangule.left,
		y:event.clientY-rectangule.top
	}
	return location
}