<?php global $post; $post_slug = $post->post_name; ?>
<div class="container-fluid bg-light-gray bottom-marg-50">
  <div class="container">
  <div class="col-md-12">
    <?php
          wp_nav_menu([
            'menu' => 'Usluge',
            'depth' => 2,
            'container' => 'ul',
            'after' => ' / '
            ]);
        ?>
  </div>
  </div>
  </div>
  <div class="container-fluid ">
  <div class="container bottom-marg-50">
    <div class="col-md-8 ukratko">
      <p><?php the_content(); ?></p>
    </div>
    <div class="col-md-4 sidebar">
      <h3>Kontaktirajte nas:</h3>
        <?php echo do_shortcode('[bideja_kontakt_forma]'); ?>
      <!--<a href="<?= esc_url(get_site_url()); ?>/kontaktirajte-nas"><img src="<?=  esc_url(get_template_directory_uri ()); ?>/assets/images/baner-bg.jpg" class="img-responsive" alt="Izradit cemo vam neobvezujucu ponudu"></a>
      <a href="<?=  esc_url(get_site_url()); ?>/kontaktirajte-nas" class="hvr-icon-forward baner-button">ZATRAŽI PONUDU</a> -->
    </div>
  </div>
</div>

