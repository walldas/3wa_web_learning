const pvm=21
var kaina

kaina=window.prompt("Kiek € mokesite ?")
skkaina=parseInt(kaina)

ph1="<h1> Tax calculation :</h1>"
document.write(ph1)



nuolaida=window.prompt("ar nori nuolaidos?")
if(nuolaida=="yes"){
	kiek=window.prompt("kiek % nori nuolaidos?")
	pritaikytanuolaida=skkaina-skkaina*parseInt(kiek)/100
	document.write("For a tax free amount " +pritaikytanuolaida+" € there is "+pvm+"% ("+(skkaina*(pvm/100)*(kiek/100))+"€ )of  VAT.<br>")

	saskaita=skkaina*(pvm/100+1)
	taikomanuolaida=skkaina*(pvm/100+1)*parseInt(kiek)/100
	saskaita2=saskaita-taikomanuolaida


	document.write("The ATI amount is of "+ saskaita2+" €<br>")
	document.write("A discount of "+parseInt(kiek)+"% has been applied to the tax free amount.")
} else{
	document.write("For a tax free amount " +kaina+" € there is "+pvm+"% ("+ skkaina*pvm/100+"€ )of  VAT.<br>")

	saskaita=skkaina*(pvm/100+1)
	document.write("The ATI amount is of "+ saskaita+" €")
}
