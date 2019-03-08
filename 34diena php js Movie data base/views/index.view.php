<!DOCTYPE HTML>
<html lang="en"> 
<head>
	<meta charset="utf-8">
	<title> 34diena</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
	<link rel="stylesheet" type="text/css" href="css/diena34.css"/>

</head>


<body>
	<!-- <h2><?php echo $minlenth ;?></h2> -->
	<h1><?php echo $mdb ;?></h1>

	<div class="container">
		<?php foreach ($movieColection as $movies) :?>
			<div class="row">
				<?php foreach ($movies as $movie) :?>
					<div class="col-sm-3" data-id="<?php echo $movie['id']; ?>">
						<a href="show.php?id=<?=$movie['id']?>">
							<img src="<?php echo $movie['img'];?> alt='' class='img-resmonsive'">
						</a>
						<h5>
							<?php echo $movie['year'];?>
							<a href="show.php?id=<?=$movie['id']?>">
								<?php echo $movie['title'];?> </a>
								<small>
									<?php echo formatTime($movie['length']);?> 
								</small>
							</h5>

						</div>
					<?php endforeach;?>
				</div>
			<?php endforeach;?>
		</div>

		<form>
		<input type="text" name="title" min='<?php echo $minlenth ;?>' placeholder="Search for...">
			<button>Search</button>

		</form>


		<ul class="pagination center">
			<?php if($prePage>0):    ;?>
				<li class="page-item">
					<a class="page-link" href="?page=<?php echo $prePage ;?>" aria-label="Previous">
						<span aria-hidden="true">&laquo;</span>
						<span class="sr-only" name="prePage">Previous</span>
					</a>
				</li>
			<?php endif ;?>


			<?php for ($i=1; $i<=$pageCount;$i++): ?>


				<?php if($i==$page): ?>
					<li class="page-item active">

					<?php else :?>	
						<li class="page-item">
						<?php endif ;?>



						<a class="page-link" href="?page=<?php echo $i ;?>" ><?php echo $i ;?></a></li>
					<?php endfor ;?>

					<?php if ($currentTotal < $total): ;?>
						<li class="page-item">
							<a class="page-link" href="?page=<?php echo $nextPage ;?>" aria-label="Next">
								<span aria-hidden="true">&raquo;</span>
								<span class="sr-only" name="nextPage">Next</span>
							</a>
						</li>
					<?php endif ;?>
				</ul>


				<script src="js/jquery-3.1.1.min.js"></script>
				<script src="js/bootstrap.js"></script>
			</body>
			</html>