
<!-- End of main -->
</main>
<!-- footer -->
<footer id="main-footer" class="home blog wrap">
	<nav id="footer-menu" class="wrap">
		<a href="https://www.facebook.com/akintoyou">follow <br>us</a>
		<a href="/">latest <br>news</a>
		<a href="/">legal <br>mention</a>
		<a href="mailto:nicetomeetyou@akinto.be">send <br>an email</a>
		<div class="divider">
			<form class="box">
			  <input class="email" type="email" placeholder="my email adress">
			  <input class="submit" type="submit" value="subscribe">
			</form>
		</div>
	</nav>
</footer>

<!-- Vendor -->
<script>
function my_scripts_method() {
	wp_enqueue_script(
		'custom-script',
		get_template_directory_uri() . '/js/vendor/jquery-1.6.2.min.js',
		array('jquery')
	);
}
if(is_page( 'shop' ) ) add_action('wp_enqueue_scripts', 'my_scripts_method');

</script>

<!--  -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script> window.jquery || document.write('<script src="assets/js/vendor/jquery-2.1.1.min.js"><\/script>')</script>
<?php if(is_page(9)) {?>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<?php }?>
<script src="http://maps.googleapis.com/maps/api/js?v=3.exp&amp;libraries=places&amp;sensor=false"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/vendor/idangerous.swiper.scrollbar-2.1.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/vendor/idangerous.swiper.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/vendor/classie.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/vendor/gridset-overlay.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/vendor/masonry.js"></script>
<!-- Custom -->
<script>
	jQuery(function($){
		var shop = $('#shop');
		shop.masonry({
			isAnimated: true,
			itemSelector:'.bloc:not(.hidden)',
			isFitWidth:true,
			columnWidth:160
		});

		$('.sub_menu a').click(function(e){
			var cls = $(this).attr('href').replace('#','');
			shop.find('.bloc').removeClass('hidden'); 
			shop.find('.bloc:not(.'+cls+')').addClass('hidden');
			shop.masonry('reload'); 
			shop.find('.'+cls).show(300);
			shop.find('.bloc:not(.'+cls+')').hide(300);

			location.hash = cls;
			e.preventDefault(); 
		});

		var bloc = shop.find('.bloc:first'); 
		var cssi = {width:bloc.width(),height:bloc.height()};
		var cssf = null; 

		shop.find('a.thumb').click(function(e){
			var elem = $(this); 
			var cls = elem.attr('href').replace('#','');
			var fold = shop.find('.unfold').removeClass('unfold').css(cssi); 
			var unfold = elem.parent().addClass('unfold').css(cssf); 
			shop.masonry('reload'); 
			if(cssf == null){
				cssf = {
					width : unfold.width(),
					height: unfold.height()
				};
			}
			unfold.css(cssi).animate(cssf);
		})

		if(location.hash != ''){
			$('a[href="'+location.hash+'"]').trigger('click');
		}
	})


</script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/script.js"></script>


</body>
</html>
