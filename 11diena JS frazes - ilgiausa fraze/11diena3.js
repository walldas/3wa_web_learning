




// sk=parseInt(window.prompt("daugybos lentele is"))
sk=10
pm=[]
document.write("<table>")
for(b=0;sk>b;b++){
	pm=[]
	document.write("<tr>")
	for(a=0;sk>a;a++){
		pm[a]=(a+1)*(b+1)
	}
	for(x=0;pm.length>x;x++){
		document.write("<td>",pm[x],"</td>")
	} 
	console.log(pm)
	document.write("</tr>")
}document.write("</table>")



