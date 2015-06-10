<?php get_header(); ?>
<div id="body">
<div class="alignment">

<nav id="sideMenu">
        <?php wp_nav_menu(array('menu'=>'side-menu','container_id' => 'sideNav','walker'=> new SideMenu()) ); ?>

    </nav>

	<section>
<?php if(have_posts()) : while (have_posts()) : the_post();?>
    <div class="post">

        <a href="<?php the_permalink();?>">

        <?php 
        $thumbnailOpts = array(
            'class' => "newsThumbnail",
            
        );
        the_post_thumbnail('thumbnail',$thumbnailOpts);?>
        </a>
        <h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink();?>" class="postLink"><?php the_title();?></a></h2>
        <h3 style="font-size:12px;color:black;padding:0px;margin:0px;"><?php the_time('F j, Y'); ?></h3><!-- <h3 style="font-size:12px;color:black;padding:0px;margin:0px;"><?php the_date();?></h3> -->
        <div class="entrytext">
            <?php the_excerpt('<p class="serif">Read the rest of this page »</p>'); ?>
        </div>
    </div>
    <?php endwhile; endif; ?>
</section>



</div>
</div>
<?php get_footer(); ?>