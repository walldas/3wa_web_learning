
function colorPicer(pen){
	this.picer=document.querySelector("#canvas2")
	this.context=this.picer.getContext("2d")
	this.drawGradient()
	this.picer.addEventListener("click", this.pickColor.bind(this))
	this.pen=pen

}


colorPicer.prototype.drawGradient=function(){
   var gradient;
    gradient = this.context.createLinearGradient(0, 0, this.picer.width, 0);
    //  Horizontal red-> green -> blue gradient.
    gradient.addColorStop(0,    'rgb(255,   0,   0)');
    gradient.addColorStop(0.15, 'rgb(255,   0, 255)');
    gradient.addColorStop(0.32, 'rgb(0,     0, 255)');
    gradient.addColorStop(0.49, 'rgb(0,   255, 255)');
    gradient.addColorStop(0.66, 'rgb(0,   255,   0)');
    gradient.addColorStop(0.83, 'rgb(255, 255,   0)');
    gradient.addColorStop(1,    'rgb(255,   0,   0)');
    this.context.fillStyle = gradient;
    this.context.fillRect(0, 0, this.picer.width, this.picer.height);
    gradient = this.context.createLinearGradient(0, 0, 0, this.picer.height);
    // Vertical opaque white -> transparent -> opaque black gradient.
    gradient.addColorStop(0,   'rgba(255, 255, 255, 1)');
    gradient.addColorStop(0.5, 'rgba(255, 255, 255, 0)');
    gradient.addColorStop(0.5, 'rgba(0,     0,   0, 0)');
    gradient.addColorStop(1,   'rgba(0,     0,   0, 1)');
    this.context.fillStyle = gradient;
    this.context.fillRect(0, 0, this.picer.width, this.picer.height);
 }


 colorPicer.prototype.pickColor=function(event){
 	var palete
	var rectangule=this.picer.getBoundingClientRect()
	var location={
		x:event.clientX-rectangule.left,
		y:event.clientY-rectangule.top
	}
	var x=location.x
	var y=location.y
	palette = this.context.getImageData(x, y, 1, 1);
	r=palette.data[0]
	g=palette.data[1]
	b=palette.data[2]
	this.pen.color="rgb"+"("+r+","+g+","+b+")";

}
