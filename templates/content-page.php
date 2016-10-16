<?php global $post; ?>
<?php if (is_front_page() ) { get_template_part('templates/partials/front', 'page'); } ?>
<?php if (is_page(7)) { get_template_part('templates/partials/onama', 'page'); } ?>
<?php if (is_page(11)) { get_template_part('templates/partials/kontakt', 'page'); } ?>
<?php if (is_page('blog')) { get_template_part('templates/partials/blog', 'page'); } ?>
<?php if (is_page('usluge')) { get_template_part('templates/partials/usluge', 'page'); } ?>
<?php if ($post->post_parent == '55') { get_template_part('templates/partials/usluge-single');} ?>
<?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
