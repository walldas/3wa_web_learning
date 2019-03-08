<!DOCTYPE HTML>
<html lang="en"> 
<head>
	<meta charset="utf-8">
	<title> 34diena</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
	<link rel="stylesheet" type="text/css" href="css/diena34.css"/>

</head>
<body>

 <meta charset="UTF-8">
    <title><?php echo $movie['title']; ?></title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>


	<div class="container centras">
		<div class="row">
		<span class="pull-right"><a href="index.php"> Home</a></span>
		<h1><?php echo $movie['title']; ?> 
		<small><?php echo $movie['year']; ?> metai</h1>


		<form method="post" enctype="multipart/form-data">
		<label>Title:</label>
			<input type="text" name="title" value="<?php echo $movie['title']; ?>"><br>
		<label>Year:</label>
			<input type="number" name="year" value="<?php echo $movie['year']; ?>"><br>



		<label>Img link:</label>
			<input type="file" name="img"  required ><br>




		<label>Trailer link:</label>
			<input type="text" name="trailer" value="<?php echo $movie['trailer'];?>"><br>
		<label>Description text:</label>
			<input type="textarea" rows="20" name="description" value="<?php echo $movie['description']; ?>">
			<p><button type="submit">save</button></p>
		</form>
			





		</div>
	</div>





<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>