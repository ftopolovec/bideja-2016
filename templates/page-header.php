<?php use Roots\Sage\Titles; ?>

<?php if (is_front_page()) { ?>
<?php } else { ?>
<div class="container-fluid breadcrumb top-marg-50">
	<div class="container">
	  <h1 class="breadcrumb-title"><?= Titles\title(); ?></h1>
	  <?php if ( function_exists('yoast_breadcrumb') ) {
			yoast_breadcrumb('<p id="breadcrumbs">','</p>');
	  } ?>
	</div>
</div>
<?php } ?>

