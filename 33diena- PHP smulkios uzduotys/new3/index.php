<?php

function dd($array)//do and die
{
	echo "<pre>";
	print_r($array);
	echo "</pre>";
	// die;
}


$colors=[
	'rouge',
	'orange',
	'jaune',
	'vert'
	];
$fruits=[
	'fraise',
	'abricot',
	'citron',
	'citron'
	];
$coutres=[
	'fr'=>'france',
	"en"=>"angleterre",
	"it"=>"italie",
	"es"=>'espagne'
	];

// foreach ($fruits as $fruit ) {
// 	echo $fruit."<br>";
// }
// $new=[];//------------------------------------------------------------------
// for ($x=0;count($fruits)>$x;$x++){
// 	$new[$fruits[$x]]=$colors[$x];
// }

// $new=array_combine($fruits, $colors);// sujungia du vienodus masyvus---------------------

//dd($new);

//----------------------------------------------------

// for ($x=0;count($fruits)>$x;$x++){
// 	if (isset($fruits[$x])){
// 	$new[$fruits[$x]]++;
// 	}
// 	else {
// 		$new[$fruits[$x]]=1;
// 	}
// }



// dd($new);-------------------------------------------


// $new=[];

// foreach ($fruits as $x) {
// 	if (isset($x)){
// 	$new[$x]++;
// 	}
// 	else {
// 		$new[$x]=1;
// 	}
// }
// dd($new); //----------------------------

// $new=array_count_values($fruits);
// dd($new);
//-----------------------------------------
// $salys=[];
// foreach ($coutres as $key => $country) {
// 	$salys[$country]=$key;
// }
// dd($salys);//-----------------------------------------------------------

// $salys=array_flip($coutres);
// dd($salys);//-------------------------------------------------------------

// $new=[];
// foreach ($fruits as $fruit) {
// 	if($fruit=="citron"){
// 		$new[]="citron";
// 	}
// }
// dd($new);//__________________________________________________________________________

// $ne=range(1,144);
// $power=[];
// foreach ($ne as $v) {
// 	$power[]=number_format(pow($v,$v));
// }
// dd($power);//------------------------------------------------------------

// $numbers=range(1,100);

// $new=array_map(function($skaicius){// pasiima nauja ir panaudoja masiva
// 	return $skaicius*$skaicius;
// },$numbers);
// dd($new);//----------------------------------------------------------

// // $filtratas = array_filter($masyvas);//isvalo masyva nuo null , 0, 0.0
// $new=array_merge($colors,$fruits);// jei tik vienas masyvas tada sutvarko ir indexus
// dd($new);//-------------------------------------------------------------

// //1.
// array_push($fruits,"framboise");//ideda i masyvo gala
// dd($fruits);
// //2.
// $fruit=$fruits[(count($fruits)-1)]; // paskutine verte
// dd($fruits);

// //arba
// $fruit=array_pop($fruits);//isima paskutine verte is masyvo 
// dd($fruits);

// //3.
// array_unshift($fruits, $fruit);//ideda i masyvo gala paduodama verte
// dd($fruits);
// array_shift($v)// popas is priekio--------------------------------------
// dd($colors);

// $someColors=array_slice($colors,-2,2);//nusikopijuoja vertes//minusas nurodo nuo kurios vietos skaiciuot siuo atveju nuo galo
// dd($someColors);
// dd($colors);

// $someColors=array_splice($colors,-2,2,["repleisina","bet ir prideda"]);//atsikerpa vertes/ir repleisina
// dd($someColors);
// dd($colors);//-----------------------------------------------------------

// $new=[];
// foreach ($fruits as $fruit) {
// 	if(!in_array($fruit, $new)){
// 		$new[]=$fruit;
// 	}
// }
// dd($new);


// $oi=array_unique($fruits);//sugraziina masiva su nekartotinem vertem
// dd($oi);//______________________________________________________________________-

 //1.
$prekes=["pienas","duona","suris","bandele","limonadas","desra","piestukas","trintukas","kefyras","lempute"];
//2.
$kainos=[3.34534,7.23567,7.98765,4.67826,7.65232,8.23345,8.34534,2.23234,3.55555,8.26733];
//3.
$nkainos=array_map(function($sk){// pasiima nauja ir panaudoja masiva
	return round($sk,2);
},$kainos);
echo "3---------------";
dd($nkainos);
//4.
$ksar=array_combine($prekes,$nkainos);
echo "4---------------";
dd($ksar);

//5.
// $nufiltruota=array_filter($ksar,$ksar[50]);// nesuprantu filtro funkcijso
// dd($nufiltruota);

$nufiltruotas=[];
foreach ($ksar as $preke => $kaina) {
	if ($kaina<5){
		$nufiltruotas[$preke]=$kaina;
	}
}
echo "5---------------";
dd($nufiltruotas);

//7,

$pkainos=array_map(function($sk){// pasiima nauja ir panaudoja masiva
	return $sk=99.00;
},$nufiltruotas);
echo "7---------------";
dd($pkainos);
//8.
$nukainos=array_merge($ksar,$pkainos);
echo "8---------------";
dd($nukainos);



$nk=$nukainos;
$bk=$ksar;
//9.
arsort($nukainos);
// $mkk=[];
// foreach ($nukainos as $preke => $kaina) {
// 	$mkk[]=$preke = $kaina;
// 	// echo "$preke = $kaina\n";
// }
echo "9---------------";
dd($nukainos);



print"<table style='border:1px solid black;'>";
foreach ($bk as $preke => $kaina) {
	foreach ($nk as $preke => $kaina) {
		if($kaina<50){
			echo "<tr><td style='color:red;'>".$preke."</td><td>".$bk[$preke]."</td><td>".$kaina ."</td></tr>";
		}
		else{
		echo "<tr><td>".$preke."</td><td>".$bk[$preke]."</td><td>".$kaina ."</td></tr>";}
	}
	die;
}
print "</table>";






?>