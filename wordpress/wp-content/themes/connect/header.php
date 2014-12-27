<!DOCTYPE html>

<html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>

	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/navigation.css" type="text/css" media="screen" />
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>




<body>

<header>
<img src="<?php bloginfo('template_directory'); ?>/images/logo.jpg"/>

<div id="socialBar">

	<a href="https://twitter.com/ConnectforMH"><img src="<?php bloginfo('template_directory'); ?>/images/twitter.png"/></a> 
	<a href="https://www.facebook.com/ConnectforMH"><img src="<?php bloginfo('template_directory'); ?>/images/facebook.png"/></a>
	<a href="https://www.youtube.com"><img src="<?php bloginfo('template_directory'); ?>/images/youtube.png"/></a>
	<?php get_search_form(); ?>
	
	<?php echo loginLink();?>
	

</div>

<nav>
	<ul>
		<li>
			<a href="#" id="supportNav">Support</a>
			<div>
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
		</li>
		<li>
			<a href="#" id="educationNav">Education</a>
			<div>
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
		</li>
		<li>
			<a href="#" id="outreachNav">Outreach</a>
			<div>
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
		</li>
		<li>

			<a href="#" id="involvedNav">Get Involved</a>
			<div>
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
		</li>
		<li><a href="#" id="crisisNav">In Crisis</a>
			<div>
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

		</li>
	</ul>
</nav>
</header>