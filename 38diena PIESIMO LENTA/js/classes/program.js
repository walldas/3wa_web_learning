function Program(){
	this.pen=new Pen()
	this.canvas=new Canvas(this.pen)
	this.picer=new colorPicer(this.pen)
	this.start()
	
}

Program.prototype.start=function(){
$('.pen-color').on("click",this.onColorSelect.bind(this))
$('.size').on("click",this.onSizeSelect.bind(this))
$('.trintukas').on("click",this.onTrintukasSelect.bind(this))
$('.trash').on("click",this.onTrash.bind(this))
$('.btn2').on("click",this.onDrop.bind(this))
// $('.colorpicer').on("click",this.picer.bind(this))
}


Program.prototype.onDrop=function(){
	   $("#canvas2").toggleClass("hidden")
}


Program.prototype.onTrintukasSelect=function(event){
	this.pen.size=20
	this.pen.color="white"
}

Program.prototype.onColorSelect=function(event){
	var color=$(event.target).data("color")
	this.pen.color=color
}

Program.prototype.onSizeSelect=function(event){
	var size=$(event.target).data("size")
	this.pen.size=size
}


Program.prototype.onTrash=function(event){

	this.canvas.context.clearRect(0,0,canvas.width,canvas.height)
	
}