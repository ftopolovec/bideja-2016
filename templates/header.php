<div class="container-fluid">
  <div class="col-md-12 bg-blue header-top"></div>
  <div class="container">
  <header role="banner" class="navbar navbar-fixed-top navbar-inverse nav-down">
    <div class="container">
      <div class="navbar-header">
      <div id="nav-icon1" data-toggle="collapse-side" data-target=".side-collapse" data-target-2=".side-collapse-container" type="button" class="navbar-toggle pull-right">
        <span></span>
        <span></span>
        <span></span>
      </div>
        <!--<button data-toggle="collapse-side" data-target=".side-collapse" data-target-2=".side-collapse-container" type="button" class="navbar-toggle pull-left"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>-->
        <a class="navbar-brand" href="#">
          <img alt="Brand" src="<?= esc_url(get_template_directory_uri ()); ?>/assets/images/burza-ideja-logo.svg">
        </a>
      </div>
      <div class="navbar-inverse side-collapse in">
        <nav role="navigation" class="navbar-collapse nav-primary">
          <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
          endif;
          ?>
        </nav>
      </div>
    </div>
  </header>
  </div>
</div>