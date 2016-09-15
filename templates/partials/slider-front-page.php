<div class="container-fluid no-padding">
	<div id="owl-example" class="owl-carousel">
	<!-- STATIC ITEM -->
		<div class="item" style="background-image: url('<?php echo esc_url(get_template_directory_uri ()); ?>/assets/images/slider/slider-pozadina.jpg');">
			<div class="container">
				<div class="col-md-7 col-sm-5 col-xs-12 slider-image"><img src="<?= esc_url(get_template_directory_uri ()); ?>/assets/images/slider/bideja-bg.png"></div>
				<div class="col-md-5 col-sm-7 col-xs-12 slider-content">
					<h3>Dobrodošli na novu stranicu Burze ideja!</h3>
					<hr align="left">
					<ul>
						<li>Čitajte blog</li>
						<li>Pogledajte reference</li>
						<li>Informirajte se o uslugama</li>
						<li>Kontaktirajte nas putem Chat-a</li>
						<li>Pratite nas na društvenim mrežama</li>
					</ul>
					<a href="<?= esc_url(get_site_url()); ?>/projekti" class="hvr-icon-forward">Svi projekti</a>
				</div>
			</div>
		</div>
		<!-- END STATIC ITEM -->
	<?php $args = array ('post_type' => 'projekti', 'posts_per_page' => 3);
		$loop = new WP_Query($args);
		while ($loop->have_posts()) : $loop->the_post(); ?>
	<!-- LOOP ITEMS -->
		<div class="item" style="background-image: url('<?php echo esc_url(get_template_directory_uri ()); ?>/assets/images/slider/slider-pozadina.jpg');">
			<div class="container">
				<div class="col-md-7 col-sm-5 col-xs-12 slider-image"><img src="<?= the_field('bi_slider_img'); ?>"></div>
				<div class="col-md-5 col-sm-7 col-xs-12 slider-content">
					<h3><?php the_title(); ?></h3>
					<hr align="left">
					<?php
						$field = get_field_object('bi_usluge');
						$bi_usluge = $field['value']; ?> 
					<?php if($bi_usluge): ?>
					<ul>
					<?php foreach ($bi_usluge as $usluga): ?>
						<li><?php echo $field['choices'][$usluga]; ?></li>
					<?php endforeach; ?>
					</ul>
					<?php endif; ?>
					<a href="<?php echo get_permalink(); ?>" class="hvr-icon-forward">Pogledaj projekt</a>
				</div>
			</div>
		</div>
		<?php endwhile; ?>
	</div>
</div>