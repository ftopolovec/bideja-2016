<?php use Roots\Sage\Titles; ?>
<div class="container-fluid breadcrumb top-marg-50 bg-blue ">
  <div class="container">
    <h1 class="breadcrumb-title"><?= Titles\title(); ?></h1>
    <?php if ( function_exists('yoast_breadcrumb') ) {
      yoast_breadcrumb('<p id="breadcrumbs">','</p>');
    } ?>
    
  <p><?php the_field('bc_opis_stranice'); ?></p>
  </div>
</div>
<div class="container-fluid ">
  <div class="container top-marg-50">
    <div class="col-md-12 ukratko">
      <p><?php the_content(); ?></p>
      <div class="col-md-12">
        <h3>Možda Vas interesira:</h3>
       <?php get_template_part('templates/partials/related-post', 'page'); ?>
      </div>
    </div>
    <!--<div class="col-md-4 bottom-marg-50 sidebar">
     <?php if ( 'reference' == get_post_type()) { ?>
      <a href="<?php the_field('bi_slider_img'); ?>"" class="fancybox" rel="fancybox"><img src="<?php the_field('bi_slider_img'); ?>" class="img-responsive bottom-marg-50" alt="Prikaz projekta">
     <?php } else { ?>
     <h3>Ostale objave:</h3>
     <ul class="bottom-marg-50">
     <?php $lastposts = get_posts ( array('sort_column' => 'post_date', 'sort_order' => 'asc' ) ); ?>
     <?php foreach ( $lastposts as $post ) :
      setup_postdata( $post ); ?> 
        <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
      <?php endforeach; ?>
      </ul>
      <?php } //endif ?>
      <a href="<?= esc_url(get_site_url()); ?>/kontaktirajte-nas"><img src="<?= esc_url(get_template_directory_uri ()); ?>/assets/images/baner-bg.jpg" class="img-responsive" alt="Izradit cemo vam neobvezujucu ponudu"></a>
      <a href="<?= esc_url(get_site_url()); ?>/kontaktirajte-nas" class="hvr-icon-forward baner-button">ZATRAŽI PONUDU</a>
    </div>-->
  </div>
</div>

