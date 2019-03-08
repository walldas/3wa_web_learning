function Person (name,email,position){
	this.id= Date.now()
	this.name=name
	this.email=email
	this.position=position
	this.avatar=this.getAvatar()

}


Person.prototype.getAvatar=function(){
	var letter=this.name[0].toUpperCase()
	return "http://placehold.it/50x50?text="+letter
}