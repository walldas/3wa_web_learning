// var del=$("#clear-address-book")
// del.click(onClickAddressBook)
$(document).on("click","#clear-address-book",onClickAddressBook)
//galima ir taip
//$("#clear-address-book").on("click",onClickAddressBook)
function onClickAddressBook() {
	 saveToLocalStorage([])
	 refreshAddresBook()
}

// var show=$("#add-contact")
// show.click(onClickAddContact)
// $("#add-contact").on("click",onClickAddContact)
$(document).on("click","#add-contact",onClickAddContact)
function onClickAddContact(){
	$("#contact-form").fadeIn()
	$("#contact-form").attr("data-mode","add")
}
// var save=$("#save-contact")
// save.click(onClickSaveContact)
// $("#save-contact").on("click",onClickSaveContact)
$(document).on("click","#save-contact",onClickSaveContact)
function onClickSaveContact(){
	$("#clear-address-book").show()
	var form=$('#contact-form')
	if(form.valid()){
		 var contact=createContact(
		 	$("#title").val(),
		 	$("#firstName").val(),
		 	$("#lastName").val(),
		 	$("#phone").val()
		 	)
		db=loadAddresBook()
		mode=document.querySelector('#contact-form').dataset.mode
		console.log(mode)
		if (mode=="edit" &&db.length>0){
			index=parseInt(document.querySelector("#contact-details>a").dataset.index)
		 	// contact=loadAddresBook()[index]
		 	db[index]=contact
		}

		else {
			db.push(contact)
		}
		saveAdressBook(db)
		$("#contact-form").trigger('reset')
		$("#contact-form").hide()
		refreshAddresBook()
		}
}


// $(".contact").on("click",onClickShowContactDetails)
$(document).on("click",".contact",onClickShowContactDetails)
function onClickShowContactDetails(){
	a=loadAddresBook()
	index=$(this).data('index')
	contact=a[index];
	switch(contact.title){
	case '1':
		title="Ms";
		break;
	case '2':
		title="Mrs.";
		break
	case '3':
		title="Mr.";
		break;
}
	$("#contact-details>h3").text(title+" "+contact.firstName +" "+ contact.lastName)
	$("#contact-details>p").text(contact.phone)
	$("#contact-details>a").attr("data-index",index)
	// $("#contact-details").toggle("hide")
	$("#contact-details").show()
}


// $("#contact-details>a").on("click",onClickEditContact)
$(document).on('click','#contact-details a',onClickEditContact) 
function onClickEditContact(e){
	 $("#clear-address-book").hide()
 $("#contact-form").fadeIn()
 index=parseInt(e.currentTarget.dataset.index)
 adresas=loadAddresBook()[index]
 fn=adresas.firstName
 ln=adresas.lastName
 ti=adresas.title
 ph=adresas.phone

 $('#firstName').val(fn)
 $("#lastName").val(ln)
 $("#title").val(ti)
 $("#phone").val(ph)

 $("#contact-form").attr("data-mode","edit")
 console.log(fn,ln,ti,ph)
 $("#contact-details").hide()
}
