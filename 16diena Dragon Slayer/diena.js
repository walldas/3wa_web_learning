// dragon=("<img src='dragon.jpg'>")
// // document.write(dragon)
//************************************DATA********************************


//Clear console
console.clear()
//initialize game_________________________________________________________________
//show starting health________________________________________________________
function startGame(){
lvl=requestInteger("Drakono lvl (1:easy 2:normal 3:hard)",1,3)
armor=requestInteger("Riterio armor lvl (1:rare 2:epic 3:legendary)",1,3)
sword=requestInteger("Riterio kardo lvl (1:rare 2:epic 3:legendary)",1,3)

var round=0
sildmin=10*armor
sildmax=100*armor
sild=getRandomInteger(sildmin,sildmax)
hpPlayer=getRandomInteger(200,250)+sild
hpDragon=getRandomInteger(250,300)*lvl

krdmin=2*sword
krdmax=20*sword
dmgmin=10
dmgmax=20

//game loop
console.clear()
console.log("_________________________________")
console.log("Player :",hpPlayer," HP")
console.log("Dragon :",hpDragon," HP")
console.log("_________________________________")
do{
	
	round++
	if(hpDragon>0||hpPlayer>0){
		ataka=kaspirmas()
		if(ataka=="dragon"){
			dmg=getRandomInteger(dmgmin,dmgmax)
			hpPlayer=hpPlayer-dmg
			console.log("Round:",round)
			console.log("Dragon hit Player: ",dmg," HP")
		}
		else if(ataka=="player"){
			krd=getRandomInteger(krdmin,krdmax)
			hpDragon=hpDragon-krd
			console.log("Round:",round)
			console.log("Player hit Dragon: ",krd," HP")
		}
	}
	
	console.log("Dragon:",hpDragon," HP || Player", hpPlayer," HP")
	console.log("_________________________________")
}while(hpDragon>0 && hpPlayer>0)

if(hpDragon>hpPlayer){
	winner="DRAGON"
	document.write("<img src='dragon.jpg'>")
}else{
	 winner="PLAYER"
	document.write("<img src='knight.jpg'>")}

//show winner___________________________________________________________________
console.log("Winner:",winner)
console.log("Player ",hpPlayer," HP left")
console.log("Dragon",hpDragon," HP left")
console.log("_________________________________")
}

startGame()