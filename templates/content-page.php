<?php if (is_front_page() ) { get_template_part('templates/partials/front', 'page'); } ?>
<?php if (is_page(7)) { get_template_part('templates/partials/onama', 'page'); } ?>
<?php the_content(); ?>
<?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
