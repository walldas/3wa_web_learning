<!DOCTYPE HTML>
<html> 
<head>
<meta charset="utf-8">
	<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Oswald:400,700&amp;subset=latin-ext" rel="stylesheet"> 
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/normalize.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css"/>
	<?php wp_head(); ?>
</head>
<body>
	<div class="container">
		<header class="header clearfix">
			<a href="<?php echo home_url(); ?>" class="logo"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt=""></a>
			<nav class="nav" role="navigation">
					<?php html5blank_nav(); ?>
					</nav>
		</header>
		<main class="main">
			<section class="clearfix">





