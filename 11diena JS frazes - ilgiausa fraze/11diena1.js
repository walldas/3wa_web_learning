var arr=[6,5,412,5347,1,-2312,5]


var buvessk=0
for(x=0;x<arr.length;x++){
	sk=arr[x]
	console.log(sk)
	if(buvessk<sk){
		buvessk=sk
		inx=x
	}
}
document.write(arr[inx])