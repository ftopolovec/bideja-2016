<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo( 'url' ); ?>/favicon.ico">
  <?php wp_head(); ?>
</head>
<?php if(is_page('kontakt')) { echo "<script src='https://www.google.com/recaptcha/api.js' async></script>"; } ?>