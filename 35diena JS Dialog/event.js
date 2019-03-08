$(document).ready(function(){
	$("#warning").click(function(e){
		e.preventDefault()

	var dialog=new Dialog('warning',"Ispejimp pranesimas")
	dialog.show()
})
})

$(document).ready(function(){
	$("#success").click(function(e){
		e.preventDefault()

	var dialog=new Dialog('success',"Ispejimp pranesimas")
	dialog.show()
})
})

$(document).ready(function(){
	$("#error").click(function(e){
		e.preventDefault()

	var dialog=new Dialog('danger',"Ispejimp pranesimas")
	dialog.show()
})
})
