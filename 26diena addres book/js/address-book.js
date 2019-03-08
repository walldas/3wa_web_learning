// var save=$("#save-contact")
// save.click(saveToLocalStorage)



function loadAddresBook(){
	var addresBook=loadfromLocalStorage()
	if(addresBook==null){
		saveToLocalStorage([])
	}
	
 return loadfromLocalStorage()
}






function createContact(title,firstName,lastName,phone) {
	var contact={
		firstName:firstName,
		title:title,
		lastName:lastName,
		phone:phone
	}
	return contact
}







function refreshAddresBook(){
var addresBook=loadAddresBook()
$("#address-book").empty()
var newList=$('<ul>')

// $("#address-book").append("<ul>")
for(i=0;i<addresBook.length;i++){
	var contact=addresBook[i]
	var a=$('<a>').attr('href','#').attr('data-index',i)
	a.addClass('contact')
	a.text(contact.firstName)
	newList.append( $("<li>").append(a)     );
}
$("#address-book").append(newList)
}






function saveAdressBook(data){
saveToLocalStorage(data)

}




refreshAddresBook()