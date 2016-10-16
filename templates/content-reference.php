<div class="container-fluid breadcrumb top-marg-50 bg-blue ">
  <div class="container">
    <h1 class="breadcrumb-title">REFERENCE</h1>
    <?php if ( function_exists('yoast_breadcrumb') ) {
      yoast_breadcrumb('<p id="breadcrumbs">','</p>');
    } ?> 
  <p>Ponosni smo predstaviti Vam reference na kojima smo radili.</p>
  </div>
</div>
<div class="container-fluid bg-white">
<div class="container top-marg-50 bottom-marg-50 text-center">
	<?php $args = array ('post_type' => 'reference');
	$loop = new WP_Query($args);
	while ($loop->have_posts()) : $loop->the_post(); ?>
		<div class="col-md-4 m-bot-marg-50">
			<div class="ref-item">
				<a href="<?php echo get_permalink(); ?>"><img src="<?php the_post_thumbnail_url(); ?>" class="img-responsive project-img"></a>
				<a href="<?php echo get_permalink(); ?>" class="project-more-plus"><i class="fa fa-plus" aria-hidden="true"></i></a> 
				<a href="<?php echo get_permalink(); ?>" class="project-box-blue-bot"><?php the_title(); ?></a>
			</div>
		</div>
	<?php endwhile; ?>
	</div>
</div>