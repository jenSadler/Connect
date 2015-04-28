<!DOCTYPE html>

<html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>

	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js" ></script>
	<script src = "<?php bloginfo('template_directory'); ?>/js/slider.js" type = "text/javascript"></script>
	<script src = "<?php bloginfo('template_directory'); ?>/js/main.js" type = "text/javascript"></script>

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/navigation.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/style.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/slider.css" type="text/css" media="screen" />
	<link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico"/>
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>




<body>

<div id="container">
<header>

	<div class="alignment">
		<div id="logoContainer">
			<a href = "<?php echo esc_url(home_url('/'));?>"><img class="logo" src="<?php bloginfo('template_directory'); ?>/images/logo.png"/></a>
		</div>
		
		<div id="sloganContainer">
			<img  class="slogan" src = "<?php bloginfo('template_directory'); ?>/images/slogan.png"/>
		</div>
		
		<div id="socialBar">
			<?php echo loginLink();?>

			<div id="searchContainer">
				<?php get_search_form(); ?>
			</div>
		
		</div>

		
	</div>

	<nav id= "mainMenu">
		 <?php wp_nav_menu(array('menu'=>'top-menu','container_id'=>'mainNav','container_class' => 'alignment','walker'=> new MegaMenu()) ); ?>
		 
	</nav>

</header>