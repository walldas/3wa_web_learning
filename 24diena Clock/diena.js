var minutes=document.querySelector(".minutes");
// minutes.style.transform="rotate(100deg)";
// minutes.style.transform="rotate("+timeToDegree(25,100)+"deg)";




var clock={
	hands:{},
	time:{
		hundredth:0,
		seconds:0,
		minutes:0
	},
	moving:0
}
// clock.hands.minutes.style.transform="rotate(60deg)"
clock.hands.hundredth=document.querySelector(".hundredth")
clock.hands.minutes=document.querySelector(".minutes")
clock.hands.seconds=document.querySelector(".seconds")

ms=clock.time.hundredth
min=clock.time.minutes
s=clock.time.seconds

function laikas(){
	console.log(min,s,ms)
}

function show(){
	clock.hands.hundredth.style.transform="rotate("+timeToDegree(ms,100)+"deg)";
	clock.hands.minutes.style.transform="rotate("+timeToDegree(min,60)+"deg)";
	clock.hands.seconds.style.transform="rotate("+timeToDegree(s,60)+"deg)";
	laikas()
}


function chrono() {
	ms++
	if((ms%100)==0){
		s++
		if((s%60)==0){
			min++
		}
	}

	show()

	// laikas()
}
function start(){
	clock.moving=setInterval(chrono,10)
	pirmyn.innerHTML="Pause"

}
function stop(){
	clearInterval(clock.moving)
	clock.moving=0
	pirmyn.innerHTML="Start"
}
function toggleClock(){
	if (clock.moving==0){
		start()
	}
	else{

		stop()
	}
}


function reset(){
	ms=0
	min=0
	s=0
	stop()
	show()
}

var pirmyn=document.getElementById("start")
var atgal=document.getElementById("reset")
// var startButton=document.querySelector("#start")
// pirmyn.classList.toggle("tran")
// atgal.classList.toggle("tran")

pirmyn.addEventListener("click", toggleClock)
atgal.addEventListener("click", reset)
// startButton.addEventListener("clock",toggleClock)
