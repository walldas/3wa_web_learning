function loadfromLocalStorage() {
	var data=window.localStorage.getItem("addres book")
	return JSON.parse(data)
}
// addressData=loadfromLocalStorage()

function saveToLocalStorage(data){
data=JSON.stringify(data)
window.localStorage.setItem("addres book",data)

}




