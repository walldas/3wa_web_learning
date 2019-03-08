

ll=[]
function add(a){
	ll.push(a)
}
// function rem(a){
// 	ll.pop()
// }
function cl(){
	ll=[]
}
function show(){
	for (x=0;ll.length>x;x++){
		console.log(x+1, ll[x])
	}
}

function rem(a){
	nll=[]
	for (x=0;ll.length>x;x++){
		if(a!=ll[x]){
			nll.push(ll[x])
		}		
	}
	ll=nll
	show()

}



add("pienas")
add("kefyras")
add("duona")
add("duona")
add("duona")
add("duona")
add("duona")
add("sviestas")
add("druska")



