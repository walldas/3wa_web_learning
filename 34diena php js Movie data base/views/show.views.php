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
	<span class="pull-right"><a href="upload.php?id=<?php echo $movie['id'] ?>" >Upload </a></span>
	<div class="row"><h1><?php echo $movie['title']; ?> <small><?php echo $movie['year']; ?> metai</small></h1>
	
			<div class="maza col-sm-4">
				<a href="<?php echo $movie['trailer']; ?>">
				<img src="upload/<?php echo $movie['img']; ?>"></a>

			</div>
			<div class="col-sm-8">
					<iframe width="560" height="315" src="<?php echo str_replace('watch?v=','embed/',$movie['trailer']); ?>" frameborder="0" allowfullscreen></iframe>
				<p><?php echo $movie['description']; ?></p>
				
				<br><br><span class="pull-right"><a onclick="return confirm('sure?')" href="delete.php?id=<?php echo $movie['id'] ?>" >DELETE</a></span>
				<span><a href="index.php" >atgal </a></span>
				<span><a href="edit.php?id=<?php echo $movie['id'] ?>" >Edit </a></span>
			</div>


			</div>




	</div>





<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>