<?php
/*
Template Name: Blog
*/

 get_header(); ?>
<div id="body">
<div class="alignment">

<nav id="sideMenu">
        <?php wp_nav_menu(array('menu'=>'side-menu','container_id' => 'sideNav','walker'=> new SideMenu()) ); ?>

    </nav>

	<section>
<?php if(have_posts()) : while (have_posts()) : the_post();?>
    <div class="post">
        <h1 id="post-<?php the_ID(); ?>"><?php the_title();?></h1>
        <div class="entrytext">
            <?php the_excerpt('<p class="serif">Read the rest of this page »</p>'); ?>
        </div>
    </div>
    <?php endwhile; endif; ?>
</section>



</div>
</div>
<?php get_footer(); ?>