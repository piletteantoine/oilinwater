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



	<div id="fullpage">

		 <?php if(get_field('pager')): ?>

	        <?php while(the_repeater_field('pager')): ?>
	             <div class="section" data-midnight="<?php the_sub_field('hashtag');?>" id="section<?php the_sub_field('count'); ?>">
	             	<img src="<?php the_sub_field('image'); ?>" alt="<?php the_sub_field('alt'); ?>"/>
	
	 			 		<nav class='hashtags <?php the_sub_field('hashtag'); ?>'>
	 				        <ul>
	 					        <li><a class="<?php the_sub_field('category_1'); ?>" href="">#Graphic Design</a></li>
	 					        <li><a class="<?php the_sub_field('category_2'); ?>" href="#">#Identity</a></li>
	 					        <li><a class="<?php the_sub_field('category_3'); ?>" href="#">#Webdesign</a></li>
	 					        <li><a class="<?php the_sub_field('category_4'); ?>" href="#">#Webdevelopment
	 					        <li><a class="<?php the_sub_field('category_5'); ?>" href="#">#Naming</a></li>
	 					        <li><a class="<?php the_sub_field('category_6'); ?>" href="#">#Brand Space</a></li>
	 					        <li><a class="<?php the_sub_field('category_7'); ?>" href="#">#Scenography</a></li>
	 					        <li><a class="<?php the_sub_field('category_8'); ?>" href="#">#Illustration</a></li>
	 				        </ul><!-- /.menu -->

	 			        </nav>

	             </div>
	        <?php endwhile; ?>

	     <?php endif; ?>
	</div><!-- full page -->


<?php get_footer(); ?>
