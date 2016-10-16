<?php use Roots\Sage\Titles; ?>

<?php if (is_front_page() || is_archive('reference')) { ?>
<?php } else { ?>
<div class="container-fluid breadcrumb top-marg-50 bg-blue ">
	<div class="container">
	  <h1 class="breadcrumb-title"><?= Titles\title(); ?></h1>
	  <?php if ( function_exists('yoast_breadcrumb') ) {
			yoast_breadcrumb('<p id="breadcrumbs">','</p>');
	  } ?>
	  
	<p><?php the_field('bc_opis_stranice'); ?></p>
	</div>
</div>
<?php } ?>

