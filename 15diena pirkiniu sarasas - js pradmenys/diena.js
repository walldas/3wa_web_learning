var masyvas=["a","b","c","d","e"]

// for(x=0;x<masyvas.length;x++){
// 	console.log(masyvas[x])
// }
// console.log(masyvas)


// for(x=masyvas.length-1;x>-1;x--){
// 	console.log(masyvas[x]);
// }

// x=0
// while(masyvas.length>x){
// 	console.log(masyvas[x])
// 	x++
// }

// x=masyvas.length
// while(0<x){
// console.log(masyvas[x-1])
// x--
// }

// x=0
// do{
// 	console.log(masyvas[x])
// 	x++
// }
// while(x<masyvas.length)

// x=masyvas.length
// do{
// 	console.log(masyvas[x-1])
// 	x--
// }while(x>0)

// arr=[1,2,3,4,5,6,7,8,9,10]
// a=0
// while(arr[a]<=arr.length){
// 	if(arr[a]%2>0){
// 		console.log(arr[a])
// 	}
// 	a++
// }

ll=[]
function kiekll(){
	aa=ll.length
	if(aa>0){
	console.log("liste yra ",aa," prekiu")
	}
	else{
		console.log("krepselis tuscias")
	}
}

function add(a){

	ll.push(a)
	console.log("prideta: ",a)
}
function cl(){
	ll=[]
	// console.clear()
	kiekll()
}
function show(){
	// console.clear()
	for (x=0;ll.length>x;x++){
		console.log(x+1, ll[x])
	}
kiekll()
}
function sort(){
	ll.sort()
	show()
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
function remm(a){
	var itr=ll.indexOf(a)
	if(itr>-1){
		ll.splice(itr,1)
	}
	else{
		console.log("item not found.")
	}
	kiekll()
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

console.clear()
show()





