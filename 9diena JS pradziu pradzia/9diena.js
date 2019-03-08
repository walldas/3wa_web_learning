// const pvm=21
// var kaina

// kaina=window.prompt("Kiek € mokesite ?")
// skkaina=parseInt(kaina)

// ph1="<h1> Tax calculation :</h1>"
// document.write(ph1)

// document.write("For a tax free amount " +kaina+" € there is "+pvm+"% of  VAT.<br>")
// saskaita=skkaina*(pvm/100+1)
// document.write("The ATI amount is of "+ saskaita+" €")


// _____________________________________________________

// var savaite=1
// var menesis

// var siandien=new Date();
// var metai

// metai=siandien.getFullYear()
// menesis1=siandien.getMonth()
// savaite1=siandien.getDay()
// diena=siandien.getDate()
// valanda=siandien.getHours()
// minute=siandien.getMinutes()
// sekunde=siandien.getSeconds()
// msekunde=siandien.getMilliseconds()



// savaite=["sekmadienis","pirmadienis","antradienis","treciadienis","ketvirtadienis", "penktadienis", "sestadienis"]
// menesis=["sausis","vasaris","kovas","balandis","geguse","birzelis","liepa","rugpjutis","rugsejis","spalis", "lapkritis", "gruodis"]
// krc="Siandien yra "+metai+" "+savaite[savaite1]+" "+ menesis[menesis1]+" "+ diena+" d. "+valanda+"h. "+minute+"min. "+sekunde+"s. "+msekunde+" ms."
// console.log(siandien)
// document.write(krc)
// _____________________________________________________

var car={
	brand: "BMW",
	year: 2014,
	purchase:2018,
	passenger: [
		{
			name:"Jonas",
			surname:"Jonaitis",
			dob:new Date("1988-06-25")
		},
		{
			name:"Petras",
			surname:"Petraitis",
			dob:new Date("1988-07-15")
		},
		{
			name:"Antanas",
			surname:"Antanaitis",
			dob:new Date("1988-08-15")
		}
		]
};

document.write(
	"<ul><li>"+car.brand+"</li>"+
	"<li>"+car.year+"</li>"+
	"<li>"+car.passenger[2].name+"</li>"+
	"<li>"+car.purchase+"</li></ul>")
console.log(car.passenger[0].dob.getFullYear())