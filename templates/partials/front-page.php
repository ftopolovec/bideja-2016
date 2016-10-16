<?php get_template_part('templates/partials/slider-front', 'page'); ?>
<div class="container">
	<div class="row services bottom-pad-50 top-marg-50">
		<div class="col-md-3 m-bot-marg-50" align="center">
			<img src="<?= esc_url(get_template_directory_uri ()); ?>/assets/images/iws.jpg" alt="Izrada web stranica">
			<a href="<?= esc_url(get_site_url()); ?>/usluge/izrada-web-stranica">
			<h3>Izrada web stranica</h3></a>
			<p>U izradi web stranica imamo višegodišnje iskustvo i preko stotinjak zadovoljnih klijenata.</p>
			<a href="<?= esc_url(get_site_url()); ?>/usluge/izrada-web-stranica">Saznaj više...</a>
		</div>
		<div class="col-md-3 m-bot-marg-50" align="center">
			<img src="<?= esc_url(get_template_directory_uri ()); ?>/assets/images/iwt.jpg" alt="Izrada web trgovina">
			<a href="<?= esc_url(get_site_url()); ?>/usluge/izrada-web-trgovina">
			<h3>Izrada web trgovina</h3></a>
			<p>Nudimo kompletno rješenje izrade responzivnih web trgovina koje možete potpuno sami ažurirati!</p>
			<a href="<?= esc_url(get_site_url()); ?>/usluge/izrada-web-trgovina">Saznaj više...</a>
		</div>
		<div class="col-md-3 m-bot-marg-50" align="center">
			<img src="<?= esc_url(get_template_directory_uri ()); ?>/assets/images/seo.jpg" alt="SEO analiza i optimizacija">
			<a href="<?= esc_url(get_site_url()); ?>/usluge/seo-analiza-optimizacija">
			<h3>SEO analiza i optimizacija</h3></a>
			<p>Nudimo cjelovitu SEO analizu i optimizaciju web stranica za najbolje položaje na Google-u!</p>
			<a href="<?= esc_url(get_site_url()); ?>/usluge/seo-analiza-optimizacija">Saznaj više...</a> 
		</div>
		<div class="col-md-3 m-bot-marg-50" align="center">
			<img src="<?= esc_url(get_template_directory_uri ()); ?>/assets/images/diz.jpg" alt="Grafički dizajn">
			<a href="<?= esc_url(get_site_url()); ?>/usluge/graficki-dizajn">
			<h3>Grafički dizajn</h3></a>
			<p>Grafički dizajn nošen na leđima IDEJA koje pristaju Vašem projektu!<br><br></p>
			<a href="<?= esc_url(get_site_url()); ?>/usluge/graficki-dizajn">Saznaj više...</a>
		</div>
	</div>
</div>
<div class="container-fluid bg-light-gray top-pad-50 m-bot-marg-50">
	<div class="container">
		<div class="col-md-7"><img src="<?= esc_url(get_template_directory_uri ()); ?>/assets/images/monitor-mobitel-grafika.jpg" class="img-responsive" alt="Monitor-mobitel grafika"></div>
		<div class="col-md-5 bottom-pad-50 ukratko">
			<h1>Burza ideja - ukratko</h1>
			<p>Mi smo kreativan i ambiciozan tim sa puno ideja 
spremnih za poboljšanje vašeg poslovanja!</p>
			<hr align="left">
			<p>Burza ideja djeluje od 2008. godine kao specijalizirana tvrtka za izradu i održavanje responzivnih web stranica i web trgovina, izradu SEO analiza i SEO optimizacije web stranica.</p>
			<a href="<?= esc_url(get_site_url()); ?>/o-nama" class="hvr-icon-forward">Saznaj nešto više</a>
		</div>
	</div>
</div>
<div class="container-fluid bg-green">
	<div class="container top-marg-50 bottom-marg-50">
		<div class="col-md-12 text-center">
			<h2>Izradit ćemo Vam neobvezujuću ponudu!</h2>
			<hr>
			<span class="bg-light-blue-sub">Pošaljite nam upit, objasnite čime se bavite i što biste željeli<br> te ćemo Vam izraditi prikladnu neobvezujuću ponudu.</span>
		</div>
		<div class="col-md-12" align="center"><a href="<?= esc_url(get_site_url()); ?>/kontakt" class="hvr-icon-forward">Zatražite ponudu</a></div>
	</div>
</div>
<div class="container-fluid bg-blue">
	<div class="container top-marg-50 bottom-marg-50 text-center">
		<div class="row">
			<div class="col-md-12">
				<h2>Reference na kojima smo radili</h2>
				<hr>
				<span class="bg-blue-sub">Svakom projektu posvećujemo posebnu pažnju kako<br> bi poboljšali poslovanje naših klijenata</span>
			</div>
		</div>
		<div class="row top-marg-50">
			<?php $args = array ('post_type' => 'reference', 'posts_per_page' => 3);
				$loop = new WP_Query($args);
				while ($loop->have_posts()) : $loop->the_post(); ?>
				<div class="col-md-4 m-bot-marg-50">
					<div class="ref-item">
						<a href="<?php echo get_permalink(); ?>"><img src="<?php the_post_thumbnail_url(); ?>" class="img-responsive project-img"></a>
						<a href="<?php echo get_permalink(); ?>" class="project-more-plus"><i class="fa fa-plus" aria-hidden="true"></i></a> 
						<a href="<?php echo get_permalink(); ?>" class="project-box-bot"><?php the_title(); ?></a>
					</div>
				</div>
			<?php endwhile; ?>
		</div>
		<div class="col-md-12 top-marg-50" align="center"><a href="<?= esc_url(get_site_url()); ?>/reference" class="hvr-icon-forward">Sve reference</a></div>
	</div>
</div>
<div class="container-fluid bg-light-gray">
	<div class="container top-marg-50 bottom-marg-50">
		<?php
		$args = array( 'posts_per_page' => 1 );
		$lastposts = get_posts( $args );
		foreach ( $lastposts as $post ) :
		  setup_postdata( $post ); ?>
			<div class="col-md-8 bottom-marg-50">
			<ul class="blog-headline">
				<li class="date-blog"><?php echo get_the_date('d');?></li>
				<li class="month-year-blog"><?php echo get_the_date('M');?><br><?php echo get_the_date('Y'); ?></li>
				<li class="title-blog-frontpage"><a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a></li>
			</ul>
			<ul class="fa-list">
				<li><i class="fa fa-folder" aria-hidden="true"></i> <?php the_category( ' ' ); ?></li>
			</ul>
			<a href="<?php the_permalink(); ?>">
				<img src="<?php the_post_thumbnail_url(); ?>" class="img-responsive"></a>
			<p><?= get_field( "bi_sazetak", $page->ID );?></p>
			<a href="<?php the_permalink(); ?>" class="hvr-icon-forward">Pročitaj više</a>
		</div>
		<?php endforeach; 
		wp_reset_postdata(); ?>
		<div class="col-md-4">
			<h2>Facebook aktivnosti</h2>
			<hr align="left">
			<div class="fb-page" data-href="https://www.facebook.com/burza.ideja/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/burza.ideja/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/burza.ideja/">Burza ideja Facebook aktivnosti</a></blockquote></div>

		</div>
	</div>
</div>
<div class="container-fluid">
	<div class="container top-marg-50 bottom-marg-50 clients-wrapper">
	<div class="col-md-12 ukratko"><h2 align="center">Naši klijenti</h2><hr></div>
	<div class="row top-marg-50">
		<div class="col-md-2"><img src="<?= esc_url(get_template_directory_uri ()); ?>/assets/images/klijenti/3dentall.jpg"></div>
		<div class="col-md-2"><img src="<?= esc_url(get_template_directory_uri ()); ?>/assets/images/klijenti/mag-commerce.jpg"></div>
		<div class="col-md-2"><img src="<?= esc_url(get_template_directory_uri ()); ?>/assets/images/klijenti/zupanijska-bolnica-cakovec.jpg"></div>
		<div class="col-md-2"><img src="<?= esc_url(get_template_directory_uri ()); ?>/assets/images/klijenti/noah-international.jpg"></div>
		<div class="col-md-2"><img src="<?= esc_url(get_template_directory_uri ()); ?>/assets/images/klijenti/mah-sport.jpg"></div>
		<div class="col-md-2"><img src="<?= esc_url(get_template_directory_uri ()); ?>/assets/images/klijenti/catpaw.jpg"></div>
	</div>
	<div class="row top-marg-50 ">
		<div class="col-md-2"><img src="<?= esc_url(get_template_directory_uri ()); ?>/assets/images/klijenti/centar-poslovniih-analiza.jpg"></div>
		<div class="col-md-2"><img src="<?= esc_url(get_template_directory_uri ()); ?>/assets/images/klijenti/poliel.jpg"></div>
		<div class="col-md-2"><img src="<?= esc_url(get_template_directory_uri ()); ?>/assets/images/klijenti/vina-preiner.jpg"></div>
		<div class="col-md-2"><img src="<?= esc_url(get_template_directory_uri ()); ?>/assets/images/klijenti/editer.jpg"></div>
		<div class="col-md-2"><img src="<?= esc_url(get_template_directory_uri ()); ?>/assets/images/klijenti/poljodom-ivanec.jpg"></div>
		<div class="col-md-2"><img src="<?= esc_url(get_template_directory_uri ()); ?>/assets/images/klijenti/tectum.jpg"></div>
	</div>
	</div>
</div>