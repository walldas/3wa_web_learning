var list = [];
function addToCart(item, pridedamasKiekis = 1) {
	var productExists = false;
	var productExistsIndex = 0;
	// ar nera tokios prekes?
	for(var i = 0; i < list.length; i++) {
		if(list[i].name == item) {
			productExists = true;
			productExistsIndex = i;
		}
	}
	// ar egzistiuoja ar ne?
	if(productExists == true) {
		list[productExistsIndex].quantity = list[productExistsIndex].quantity + pridedamasKiekis;
	} else {
		list.push({name: item.toLowerCase(), quantity: pridedamasKiekis});
	}
}
function removeFromCart(item, atimamasKiekis = 1) {
	var productExists = false;
	var productExistsIndex = 0;
	// ar nera tokios prekes?
	for(var i = 0; i < list.length; i++) {
		if(list[i].name == item) {
			productExists = true;
			productExistsIndex = i;
		}
	}
	// ar egzistiuoja ar ne?
	if(productExists == true) {
		list[productExistsIndex].quantity = list[productExistsIndex].quantity - atimamasKiekis;
		if(list[productExistsIndex].quantity <= 0) {
			list.splice(productExistsIndex, 1);
		} 
	} else {
		console.log('Item not exits.')
	}
}
function clearCart() {
	list = [];
	showCart();
}
function showCart() {
	console.clear()
	for(var i = 0; i < list.length; i++) {
		console.log((i + 1) + '. ' + list[i].product)
	}
}
function showTotalItems() {
	showCart();
	console.log('There are ' + list.length + ' items in cart.');
}
function sortedCart() {
	list.sort();
	showCart();
}
var bulk = [
	{
		name: 'Batonas',
		quantity: 12
	},
	{
		name: 'Kefyras',
		quantity: 6
	}, 
	{
		name: 'Pienas',
		quantity: 92
	}
];

for(var i = 0; i < bulk.length; i++) {
	addToCart(bulk[i].name, bulk[i].quantity);
}

document.body.innerHTML="";