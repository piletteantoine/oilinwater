<?php get_header(); ?>

		<!-- section -->
		<section>

			<!-- <h1><?php _e( 'Latest Posts', 'html5blank' ); ?></h1> -->

			<div class="device">
			  <a class="arrow-left" href="#"></a> 
			  <a class="arrow-right" href="#"></a>
			  <div class="swiper-container">
			    <div class="swiper-wrapper">
			      <div class="swiper-slide"> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider1-1.png"> </div>
			      <div class="swiper-slide"> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider1-2.png"> </div>
			      <div class="swiper-slide">
			        <div class="content-slide">
			          <p class="title">Slide with HTML</p>
			          <p>You can put any HTML inside of slide with any layout, not only images, even another Swiper!</p>
			        </div>
			      </div>
			    </div>
			  </div>
			  <div class="pagination"></div>
			</div>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>


		
		<!-- /section -->
<?php get_sidebar(); ?>

<?php get_footer(); ?>
