<div class="container-fluid breadcrumb top-marg-50 bg-blue ">
  <div class="container">
    <h1 class="breadcrumb-title">BLOG</h1>
    <?php if ( function_exists('yoast_breadcrumb') ) {
      yoast_breadcrumb('<p id="breadcrumbs">','</p>');
    } ?>
    
  <p>Otvorili smo ovaj blog kako bi Vam približili teme i termine sa kojima ćete se sigurno susresti u komunikaciji sa stručnjacima iz područja izrade web stranica, SEO optimizacije i ostalih. </p>
  </div>
</div>
<div class="container-fluid bg-light-blue">
<div class="container top-marg-50 bottom-marg-50">
		<?php
		$args = array( 'posts_per_page' => 3 );
		$lastposts = get_posts( $args );
		foreach ( $lastposts as $post ) :
		  setup_postdata( $post ); ?>
			<div class="col-md-8 col-md-offset-2 bottom-marg-50">
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
		
	</div>
</div>