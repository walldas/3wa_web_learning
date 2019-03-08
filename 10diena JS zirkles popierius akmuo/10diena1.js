a=parseInt(window.prompt("A ="))
c=window.prompt(" matematinis simbolis")
b=parseInt(window.prompt("B ="))


if(c=="/"||c=="dalink"){
	if(a==0||b==0){
		document.write("dalyba is nulio negalima")
	}
	else if (a!==0||b!==0)
		ats=a/b
		document.write(ats)
}
else if (c=="*"||c=="daugink"){
	ats=a*b
	document.write(ats)
}
else if (c=="+"||c=="sudek"){
	ats=a+b
	document.write(ats)
}
else if (c=="-"||c=="atimk"){
	ats=a-b
	document.write(ats)
}
else{
	document.write("refresink puslapi ir duok tinkamas vertes")
}