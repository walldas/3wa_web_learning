



// METODAI


function Person(name,gender) {
	this.name = name
	this.gender= gender//this yra kad dirbsim tik su situo objiektu	
}
Person.prototype.print=function(){//sukuriam metoda print . Taskas protptipe daeinam iki ...
	console.log('Mano vardas yra '+ this.name+" ir as esu "+ this.gender)
}


// var zmogus= new Person("Petras","vyras")
// zmogus.print()

function trikampis(a,b){
	this.a=a
	this.b=b
	this.c=this.getC()
	this.perimetras=this.getPerimetras()
}

//SETERS
trikampis.prototype.setA=function(a){
	this.a=a
	this.c=this.getC()
	this.perimetras=this.getPerimetras
}
trikampis.prototype.setB=function(b){
	this.b=b
	this.c=this.getC()
	this.perimetras=this.getPerimetras
}
trikampis.prototype.setC=function(c){
	this.c=c
	this.perimetras=this.getPerimetras
}





//GETERS
trikampis.prototype.getC=function(){
	
	var c=Math.sqrt(this.a*this.a+this.b*this.b)
	return c
}
trikampis.prototype.getPerimetras=function(){
	var perimetras=this.a+this.b+this.c
	return perimetras
}



//INFO
var trikampis=new trikampis(3,4)
function dd(){
console.log( 
	"trikampis a=",trikampis.a,
	"b=",trikampis.b,
	"c=",trikampis.c,
	"Perimetras=", trikampis.getPerimetras())}
// dd()


//2 uzduotis---------------------------




function kvadratas(a){
	this.a=a
	this.plotas=this.getS()
	this.kperimetras=this.getKPer()
	this.kistrizaine=this.getIstrizaide()
}
kvadratas.prototype.getS=function(){
	var plotas=this.a
	plotas=this.a*this.a
	return plotas
}
kvadratas.prototype.getKPer=function(){
	var kPer=this.a*4
	return kPer
}
kvadratas.prototype.getIstrizaide=function(){
	var kIs=this.a*Math.sqrt(2)
	return kIs
}
var kvadratas=new kvadratas(4)
function bb(){
console.log(
	"kvadratas a=",kvadratas.a,
	"kPlotas=",kvadratas.plotas,
	"kPerimetras=",kvadratas.kperimetras,
	"kIstrizaine=",kvadratas.kistrizaine)
}
// bb()
//3 uzduotis---------------------------


function apskritimas(r){
	this.r=r
	this.calculate()
}
apskritimas.prototype.setR=function(r){
	this.r=r
	this.calculate()
}
apskritimas.prototype.calculate=function(){
	this.plotas=this.getAplotas()
	this.ilgis=this.getIlgis()
	this.skersmuo=this.getSkersmuo()
}

apskritimas.prototype.getIlgis=function(){
	var ilgis=2*Math.PI*this.r
	return ilgis
}
apskritimas.prototype.getAplotas=function(){
	var plotas=Math.PI*this.r*this.r
	return plotas
}
apskritimas.prototype.getSkersmuo=function(){
	var skersmuo=this.r*2
	return skersmuo
}
var apskritimas=new apskritimas(3)
function aa(){
	console.log(
		"apskritimas r=",apskritimas.r,
		"plotas=",apskritimas.plotas,
		"ilgis=",apskritimas.ilgis,
		"skersmuo=",apskritimas.skersmuo)
}
// aa()
//4 uzduotis---------------------------
function staciakampis(a,b){
	this.a=a
	this.b=b
	this.calculate()
	
}
staciakampis.prototype.calculate=function(){
	this.plotas=this.getSS()
	this.istrizaine=this.getSI()
	this.perimetras=this.getSP()
}
//seteriai
staciakampis.prototype.setA=function(a){
	this.a=a
	this.calculate()
}
staciakampis.prototype.setB=function(b){
	this.b=b
	this.calculate()
}


//geteriai
staciakampis.prototype.getSS=function(){
	var plotas=this.a*this.b
	return plotas
}
staciakampis.prototype.getSI=function(){
	var istrizaine=Math.sqrt(this.a*this.a+this.b*this.b)
return istrizaine
}
staciakampis.prototype.getSP=function(){
	var perimetras=(this.a+this.b)*2
	return perimetras
}
//info
var staciakampis=new staciakampis(4,5)
function ss(){
	console.log(
		"staciakampis a=",staciakampis.a,
		"b=",staciakampis.b,
		"plotas=",staciakampis.plotas,
		"istrizaine=",staciakampis.istrizaine,
		"perimetras=",staciakampis.perimetras)
}
// ss()
