
var student1={
		name:"AJonas",
		surname:"AJonaitis",
		bod:new Date("1988-06-15"),
		age:28
}

var student2={
		name:"BJonas",
		surname:"BJonaitis",
		bod:new Date("1988-06-15"),
		age:28
}

var student3={
		name:"CJonas",
		surname:"CJonaitis",
		bod:new Date("1988-06-15"),
		age:28
}

var student4={
		name:"DJonas",
		surname:"DJonaitis",
		bod:new Date("1988-06-15"),
		age:28
}
var student5={
		name:"EJonas",
		surname:"EJonaitis",
		bod:new Date("1988-06-15"),
		age:28
}

var student6={
		name:"FJonas",
		surname:"FJonaitis",
		bod:new Date("1988-06-15"),
		age:28
}



var class1={
	flor:1,
	capacity:10,
	doorcode:123456,
	students:[student1,student2,student4]
}
var class2={
	flor:1,
	capacity:10,
	doorcode:123456,
	students:[student2,student3]
}
var class3={
	flor:1,
	capacity:10,
	doorcode:123456,
	students:[student1,student2,student4,student5,student6]
}
var class4={
	flor:1,
	capacity:10,
	doorcode:123456,
	students:[student5,student6,student3]
}

var building={
	address:"Seiminiskiu g. 1A",
	offices:[class1,class2,class3,class4]
}
// document.write(building.offices[2].students[1].name)
// console.log(building.offices[2].students[1])
// console.log(building.offices[0].students)
// tmpStudent=building.offices[0].students.pop(); //isima paskutini
// console.log(building.offices[0].students)
// building.offices[1].students.push(tmpStudent)//ideda i gala
// console.log(building.offices[1].students)

// document.write(building.address="px g. 11111111")

// students=["jonas","petras","antanas"]
// document.write(students.join(" - "))//join atskiria isvardintus elementus


allStudents=building.offices[0].students.concat(building.offices[1].students)
allStudents=allStudents.concat(building.offices[2].students)
allStudents=allStudents.concat(building.offices[3].students)//.concat();sujungia masyvus
// document.write(allStudents.length)//.length suskaiciuoja - ilgis





console.log(class1)
console.log(class2)
if(class1.students.length>class2.students.length){
	document.write("pirmoje daugiau")
}
else{
	document.write("antroje daugiau")}
