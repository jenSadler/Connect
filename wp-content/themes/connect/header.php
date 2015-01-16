<!DOCTYPE html>

<html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>

	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/navigation.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/style.css" type="text/css" media="screen" />
	<link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico"/>
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>




<body>

<header>
	<div class="alignment">
		<img class="logo" src="<?php bloginfo('template_directory'); ?>/images/logo.png"/>

		<div id="socialBar">
			<?php echo loginLink();?>

			<div id="searchContainer">
				<?php get_search_form(); ?>
			</div>
		
		</div>

		<div id="slogan">
			<h1 class = "slogan1">Recovery is possible,</h1>
			<h1 class = "slogan2">You're not alone.</h1>
		</div>
	</div>

<nav>
	<div class="alignment">
	<ul>

		<li><a href="#" id="crisisNav">In Crisis?</a>
			<div>
				<div class ="alignment">
					<div class="navInfoColumn">

					    <h1>Resources</h1>
					    <?php wp_nav_menu( array( 'theme_location' => 'crisis-resources' ) ); ?>
					</div>
					 
					<div class="navLinksColumn">
					  
					   <p>Call The CMHA Crisis Line:</p>
					   <h1>519-433-2023</h1>
					   <p>Call The London Crisis Distress Centre:</p>
					   <h1>519-667-6711</h1>
					</div>
				</div>
			</div>

		</li>
		<li>
			<a href="#" id="supportNav">Support</a>
			<div>
				<div class ="alignment">
					<div class="navInfoColumn">
					    <h1 >Programs</h1>
					    <?php wp_nav_menu( array( 'theme_location' => 'support-programs' ) ); ?>

					    <h1>Resources</h1>
					    <?php wp_nav_menu( array( 'theme_location' => 'support-resources' ) ); ?>
					
					    <h1>News</h1>
					    <?php echo getPostLinksForCategory('support')?>
					</div>
					 
					<div class="navLinksColumn">
					  
					    <?php wp_nav_menu( array( 'theme_location' => 'support-actions' ) ); ?>
					 
					    <p>Lorum Ipsum dolor sit</p>
					</div>
				</div>
			</div>
		</li>
		<li>
			<a href="#" id="educationNav">Education</a>
			<div>
				<div class ="alignment">
					<div class="navInfoColumn">
					    <h1>Events</h1>
					   <?php wp_nav_menu( array( 'theme_location' => 'education-events' ) ); ?>

					   <h1>Resources</h1>
					   <?php wp_nav_menu( array( 'theme_location' => 'education-resources' ) ); ?>
					    <h1>News</h1>
					    <?php echo getPostLinksForCategory('education')?>
					</div>
					 
					<div class="navLinksColumn">
					    <?php wp_nav_menu( array( 'theme_location' => 'education-actions' ) ); ?>
					 
					    <p>Lorum Ipsum dolor sit</p>
					</div>
				</div>
			</div>
		</li>
		<li>
			<a href="#" id="outreachNav">Outreach</a>
			<div>
				<div class ="alignment">
					<div class="navInfoColumn">
					    <h1>Information</h1>
					   <?php wp_nav_menu( array( 'theme_location' => 'outreach-information' ) ); ?>

					    
					   <h1>News</h1>
					   <?php echo getPostLinksForCategory('outreach')?>
					</div>
						 
					<div class="navLinksColumn">
						  
					   <?php wp_nav_menu( array( 'theme_location' => 'outreach-actions' ) ); ?>
						 
					    <p>Lorum Ipsum dolor sit</p>
					</div>	
				</div>
			</div>

		</li>
		<li>

			<a href="#" id="involvedNav">Get Involved</a>
			<div>
				<div class ="alignment">
					<div class="navInfoColumn">
					    <h1>Community</h1>
					   <?php wp_nav_menu( array( 'theme_location' => 'involved-menu' ) ); ?>

					   <h1>Social</h1>
					   <?php wp_nav_menu( array( 'theme_location' => 'involved-social' ) ); ?>

					     <h1>News</h1>
					    <?php echo getPostLinksForCategory('get-involved')?>
					</div>
					 
					<div class="navLinksColumn">
					  
					    <?php wp_nav_menu( array( 'theme_location' => 'involved-actions' ) ); ?>
					 
					    <p>Lorum Ipsum dolor sit</p>
					</div>
				</div>
			</div>
		</li>

	</ul>
</div>
</nav>
</header>