<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>

<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/instafeed.min.js"></script>
<script type="text/javascript" src="<?php echo wp_enqueue_script( 'script', get_template_directory_uri() . '/themoviedb.min.js', array ( 'jquery' ), 1.1, true);?>"</script>

<link href="https://fonts.googleapis.com/css?family=Roboto:300" rel="stylesheet">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="wrapper" class="hfeed">
<header id="header" role="banner">
<section id="branding">

</section>
<nav id="menu" role="navigation">
<div id="search">

</div>

</nav>
</header>
<div id="container" align="center">
<div class="quote blackbg">
	<h2 class="grey">"I only work in black and sometimes a very, very, dark grey"</h2>

</div>
