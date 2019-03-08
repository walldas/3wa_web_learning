document.write("ok")



var list=[];
function add(item,skaicius=1){
	var productExist = false;
	var productExistIndex = 0;
	for (i = 0; i < list.length; i++) {
		if(list[i].product==item){
			var productExist = true;
			var productExistIndex = i;    
		}
	}
	if (productExist == true) {
		list[productExistIndex].quantity=list[productExistIndex].quantity+skaicius
	} else {
		list.push({product: item.toLowerCase(), quantity: skaicius});
	}
	show()
}
function show(){
	console.clear()
	for (x=0;list.length>x;x++){
		console.log(list[x].product, list[x].quantity)
	}
}
function rem(item,atimtiKiekis=1){
	var productExists=false
	var productExistsIndex=0
	for(var i=0;i<list.length;i++){
		if(list[i].product==item){
			var productExist = true;
			var productExistsIndex = i; 
		}
	}
	if (productExist == true) {
		list[productExistsIndex].quantity=list[productExistsIndex].quantity-atimtiKiekis
	}	
	if(list[productExistsIndex].quantity<=0){
		list.splice(productExistsIndex,1)
	}else{
		console.log("item not found")
	}
	show()
}

var bulk = [
	{
		product: 'Batonas',
		quantity: 12
	},
	{
		product: 'Kefyras',
		quantity: 6
	}, 
	{
		product: 'Pienas',
		quantity: 92
	}
];
for(var i = 0; i < bulk.length; i++) {
	add(bulk[i].product, bulk[i].quantity);
	show()
}

function showw(){
	document.body.innerHTML="";
	document.write("<h1>Pirkiniu sarasas:</h1>")
	document.write("<ol>")
	for (x=0;list.length>x;x++){
		document.write("<li>"+list[x].product+": "+ list[x].quantity+"</li>")
	}document.write("</ol>")
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
showw()

function sortList() {
	list.sort(function(a, b){
	    var nameA = a.name.toLowerCase();
	    var nameB = b.name.toLowerCase();
	    if (nameA < nameB) {
	        return -1; 
	    } else if (nameA > nameB) {
	        return 1;
	    } else {
	    	return 0;
	    }
	});
}