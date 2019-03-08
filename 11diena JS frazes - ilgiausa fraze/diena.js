var diena= new Date()
sav=diena.getDay(5)
savaite=["sekmadienis","pirmadienis","antradienis","treciadienis","ketvirtadienis", "penktadienis", "sestadienis"]
document.write("siandien yra ",savaite[sav],"<br>")
h=diena.getHours(4)
min=diena.getMinutes(50)
sec=diena.getSeconds(22)
document.write("<br>tikslus laikas : "+ h+":"+min+":"+sec+"<br><br><br>")



c=parseInt(window.prompt("Celsijus =>Farenheitas"))
c=parseFloat(c)
f=c*9/5+32
document.write(c," laipsniai Celsijaus yra ",Math.round(f * 100) / 100," laipsniai Farenheito<br>")


ff=parseInt(window.prompt("Farenheitas => Celsijus"))
cc=(ff-32)*5/9
document.write(ff," laipsniai Farenheito yra ",Math.round(cc * 100) / 100," laipsniai Celsijaus<br>")