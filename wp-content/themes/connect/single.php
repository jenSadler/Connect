<?php get_header(); ?>
<div id="body">
<div class="alignment">

<nav id="sideMenu">
    <?php   
    $args = array(
    'menu'    => 'Top Nav',
    'submenu' => 'Get Involved',
    'highlight' =>'News'
);

wp_nav_menu( $args ); ?>
    </nav>

	<section>
<?php if (have_posts()) : while (have_posts()) : the_post();?>
    <div class="posting">
        <?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
            the_post_thumbnail("banner");
        }?>
        <h1 id="posting-<?php the_ID(); ?>"><?php the_title();?></h1>
        <div class="entrytext">
            <?php the_content('<p class="serif">Read the rest of this page »</p>'); ?>
        </div>
    </div>
    <?php endwhile; endif; ?>
</section>



</div>
</div>
<?php get_footer(); ?>


