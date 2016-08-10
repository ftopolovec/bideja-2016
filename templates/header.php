<div class="container-fluid bg-blue header-top">
  <div class="container ">
    <div class="col-md-2 slogan"><p>Samo trenutak, evo <span>ideje!</span></p></div>  
    <div class="col-md-6 col-md-offset-1">
      <ul class="fa-list header-top-contact">
        <li><i class="fa fa-phone" aria-hidden="true"></i>+385 95 910 9102 – Mladen</li>
        <li><i class="fa fa-phone" aria-hidden="true"></i>+385 91 186 5265 – Josip</li>
      </ul>
    </div>
    <div class="col-md-1 no-padding">
      <ul class="header-top-social fa-list">
        <a href="https://www.facebook.com/burza.ideja/?fref=ts" target="_blank"><li><i class="fa fa-facebook" aria-hidden="true"></i></li></a>
      </ul>
    </div>
    <div class="col-md-2 no-padding">
      <ul class="header-top-cta fa-list">
        <a href="#" target="_blank"><li>Zatražite ponudu <i class="fa fa-paper-plane-o" aria-hidden="true"></i></li></a>
      </ul>
    </div>
  </div>
</div>
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
