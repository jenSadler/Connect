<?php
/*
Template Name: Page
*/
get_header(); ?>
<div id="body">
<div class="alignment">

<nav id="sideMenu">
        <?php wp_nav_menu(array('menu'=>'side-menu','container_id' => 'sideNav','walker'=> new SideMenu()) ); ?>

    </nav>

	<section>
<?php if (have_posts()) : while (have_posts()) : the_post();?>
    <div class="page">
        <h1 id="page-<?php the_ID(); ?>"><?php the_title();?></h1>
        <div class="entrytext">
            <?php the_content('<p class="serif">Read the rest of this page »</p>'); ?>
        </div>
    </div>
    <?php endwhile; endif; ?>
</section>



</div>
</div>
<?php get_footer(); ?>


