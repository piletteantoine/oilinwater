<?php
/*
Template Name: Lookbook
*/
?>

<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
?>

<?php get_header();?>

	<section class="lookbook">
		<div class="wrapper">
	    <?php
	        $lookbook_args = array(
	            'post_type' => 'Lookbook',
	            'order' => 'ASC',
	            'posts_per_page' => 10
	        );
	        $lookbook_query = new WP_Query($lookbook_args);
	    ?>
	    <?php
	        if($lookbook_query->have_posts()) :
	            while($lookbook_query->have_posts()) :
	                $lookbook_query->the_post();
	    ?>
		<!-- Masonry Effect Start -->
		<div class="intro">
			<h2><?php the_field('chimical-text'); ?></h2>
			<span><?php the_field('chimical-elem'); ?></span>
			<img src="<?php the_field('chimical-picture'); ?>" alt="<?php the_sub_field('alt'); ?>" />
		</div>
		
			<div class="grid">
			    <?php if(get_field('lookbook')): ?>

			        <?php while(the_repeater_field('lookbook')): ?>
			             <div class="pictures"><img src="<?php the_sub_field('images'); ?>" alt="<?php the_sub_field('alt'); ?>" /></div>
			        <?php endwhile; ?>

			    <?php endif; ?>

			<?php
			    endwhile;
			    endif;
			    wp_reset_postdata();
			?>
			</div>

		</div>
	</section>

	<?php get_template_part('pagination'); ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
