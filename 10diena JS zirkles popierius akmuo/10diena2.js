a=parseInt(window.prompt("A ="))
c=window.prompt(" matematinis simbolis")
b=parseInt(window.prompt("B ="))



switch (c) {
	case "/":
  	case "dalink":
    	document.write(a/b)
    	break;
  	case "*": 
  	case "daugink":
    	document.write(a*b)
  	case "+": 
  	case "sudek":
    	document.write(a+b)
    	break;
  	case "-":
  	case "atimk":
    	document.write(a-b)
    	break;
  	default:
    	console.log('default');
    	document.write("ats negalimas")
}