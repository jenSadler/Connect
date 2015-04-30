<?php 
/*
Template Name: Homepage
*/

get_header(); ?>
<div id="body">
<div class="alignment">

	<div>
<?php if (have_posts()) : while (have_posts()) : the_post();?>
    <div class="post">
        <div class="entrytext">
            <?php the_content('<p class="serif">Read the rest of this page »</p>'); ?>
        </div>
    </div>
    <?php endwhile; endif; ?>
</div>
</div>
</div>
<?php get_footer(); ?>


