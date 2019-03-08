





a=parseInt(window.prompt(" 1=Zirkles; 2=Popierius; 3=Akmuo"))
// 0.33=akmuo
// 0.66=zirkles
// 1.00=popierius
pc=Math.random()
winer="<h1>Laimejo: PC</h1><br>"
if (a==1 && pc<=0.33){
	document.write("zmogus: Zirkles <br>")
	document.write("pc: Akmuo<br>")
	document.write(winer)
}
else if (a==2 && pc<=0.66 && pc>0.33){
	document.write("zmogus: Popierius<br>")
	document.write("pc: Zirkles<br>")
	document.write(winer)
}
else if (a==3 && pc>0.66){
	document.write("zmogus: Akmuo<br>")
	document.write("pc: Popierius<br>")
	document.write(winer)
}
else if (a==1 && pc<=0.66 && pc>0.33){
	document.write("zmogus: Akmuo<br>")
	document.write("pc: Zirkles<br>")
	document.write("<h1>Laimejo: Zmogus</h1><br>")
}
else if (a==2 && pc>0.66){
	document.write("zmogus: Zirkles<br>")
	document.write("pc: Popierius<br>")
	document.write("<h1>Laimejo: Zmogus</h1><br>")
}
else if (a==3 && pc<=0.33){
	document.write("zmogus: Popierius<br>")
	document.write("pc: Akmuo<br>")
	document.write("<h1>Laimejo: Zmogus</h1><br>")
}
else{
	if(a==1){
		document.write("zmogus: Zirkles<br>")
		document.write("pc: Zirkles<br>")
		document.write("<h1>LYGIOSIOS</h1>")
	}
	else if(a==2){
		document.write("zmogus: Popierius<br>")
		document.write("pc: Popierius<br>")
		document.write("<h1>LYGIOSIOS</h1>")
	}
	else if(a==3){
		document.write("zmogus: Akmuo<br>")
		document.write("pc: Akmuo<br>")
		document.write("<h1>LYGIOSIOS</h1>")
	}
	else{
		document.write("rasyk tik skaicius 1 2 3<br>")
	}
	
}