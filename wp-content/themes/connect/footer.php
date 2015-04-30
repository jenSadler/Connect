<footer>
	<div class= "alignment">
	<section>
		<h1>About</h1>
		<ul>
			<li><a href="<?php echo site_url( "about-connect/", $scheme ); ?>">About Connect</a></li>
			<li>Board Members</li>
		</ul>
	</section>

	<section>
		<h1>Join</h1>
		<ul>
			<li><a href="<?php echo site_url( "get-involved/become-a-member/", $scheme ); ?>">Become a Member</a></li>
			<li><a href="<?php echo site_url( "get-involved/volunteer-opportunities/", $scheme ); ?>">Become a Volunteer</a></li>
			<li>Subscribe to our Newsletter</li>
		</ul>
	</section>

	<section>
		<h1>Contact</h1>
		<p>Phone:	519-679-4040</p>
		<p>Mail:	Connect for Mental Health Inc. <br/> 515 Richmond St. PO Box 42,<br/> London Center London,<br/> ON N6A 4V3</p>
	</section>

	<div id="socialLinks">
		<a href="http://youtube.com"><img src="<?php bloginfo('template_directory'); ?>/images/youtube-bottom.png"/></a>
		<a href="http://twitter.com"><img src="<?php bloginfo('template_directory'); ?>/images/twitter-bottom.png"/></a>
		<a href="http://facebook.com"><img src="<?php bloginfo('template_directory'); ?>/images/facebook-bottom.png"/></a>
	</div>
</div>
</footer>
<?php wp_footer(); ?>
</div>
</body>
</html>