<?php
/*
Template Name: Home
*/
?>

<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
?>

<?php get_header();?>

	<!-- <h1><?php _e( 'Latest Posts', 'html5blank' ); ?></h1> -->

	<div class="device">
	  <a class="arrow-left" href="#"></a> 
	  <a class="arrow-right" href="#"></a>
	  <div class="swiper-container">
	    <div class="swiper-wrapper">
	    <?php if(get_field('slider')): ?>

	        <?php while(the_repeater_field('slider')): ?>
	             <div class="swiper-slide"><img src="<?php the_sub_field('image'); ?>" alt="<?php the_sub_field('alt'); ?>" /></div>
	        <?php endwhile; ?>

	     <?php endif; ?>
	    </div><!-- .device -->
	  </div><!-- .swiper-wrapper -->
	  <div class="pagination"></div><!-- pagination -->
	</div><!-- device -->

	<section class="block quote">
		<div class="wrapper">
			<h2>[a'kin]</h2>
			<ul>
				<li class="underline">1. Of the same kin, related by blood.</li>
				<li class="underline">2. Having a similar quality or character, analogous.</li>
				<li class="underline">3. Linguistics Sharing a common origin or an ancestral form.</li>
			</ul>
		</div>
	</section>


	<section class="collections">
		<div class="wrapper">

	    <?php
	        $collections_args = array(
	            'post_type' => 'collections',
	            'order' => 'ASC',
	            'posts_per_page' => 3
	        );
	        $collections_query = new WP_Query($collections_args);
	    ?>
	    <?php
	        if($collections_query->have_posts()) :
	            while($collections_query->have_posts()) :
	                $collections_query->the_post();
	    ?>
		<h2>Our Collections</h2>
		<figure class="card">
		<img src="<?php the_field('collection_picture'); ?>" alt="<?php the_sub_field('alt'); ?>" />
			<figcaption class="info">
			  	<div class="center">
				    <h3><?php the_field('chimicals'); ?></h3>
				    <p><?php the_field('chimical_text'); ?></p>
				    <a href="<?php bloginfo('url'); ?>/lookbook"><button class="btn-simple">View</button></a>
				</div>
			</figcaption>
		</figure>
		<?php
		    endwhile;
		    endif;
		    wp_reset_postdata();
		?>

		</div>
	</section>
	
	<section class="block map">
		<div id="map-canvas"></div>
	</section>

	<?php get_template_part('pagination'); ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
