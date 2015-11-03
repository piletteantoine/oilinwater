<?php
/*
Template Name: shop
*/
?>

<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
?>
<?php $cats = array('coat','dresses','shirt','accessories','trousers','knitwear'); ?>
<?php get_header();?>
<div class="sub_menu">
	<div class="wrapper">
		<a href="<?php bloginfo('url'); ?>/shop">all</a>
		<?php foreach($cats as $v): ?>
		<a href="#<?php echo $v;?>"><?php echo $v;?></a>
<?php endforeach; ?>	
	</div>
</div>

<div id="shop">
	<?php
        $lookbook_args = array(
            'post_type' => 'Lookbook',
            'order' => 'ASC',
            'posts_per_page' => 10
        );
        $lookbook_query = new WP_Query($lookbook_args);
        for ($i=0; $i<6; $i++):
    ?>
    <?php
        if($lookbook_query->have_posts()) :
        while($lookbook_query->have_posts()) :
		$lookbook_query->the_post();
    ?>
	<?php if(get_field('lookbook')): ?>
	<?php while(the_repeater_field('lookbook')): ?>
	<div class ="bloc <?php echo $cats[$i%6];?>">
		<a class="thumb" href="#projet"><img src="<?php the_sub_field('images'); ?>" alt="<?php the_sub_field('alt'); ?>" width="150" height="225"></a>
		<div class ="info">
			<img src="<?php the_sub_field('images'); ?>" alt="<?php the_sub_field('alt'); ?>" alt="" width="470" height="675">
		</div>
	</div>
	<?php endwhile;?>
	<?php endif; ?>
	<?php
	    endwhile;
	    endif;
	    wp_reset_postdata();
	?>
<?php endfor; ?>
</div>

<?php get_template_part('pagination'); ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>

