<?php
/**
 * Sage includes
 *
 * The $sage_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/sage/pull/1042
 */
$sage_includes = [
  'lib/assets.php',    // Scripts and stylesheets
  'lib/extras.php',    // Custom functions
  'lib/setup.php',     // Theme setup
  'lib/titles.php',    // Page titles
  'lib/wrapper.php',   // Theme wrapper class
  'lib/customizer.php' // Theme customizer
];

foreach ($sage_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);

/*** Remove Query String from Static Resources ***/
function remove_cssjs_ver( $src ) {
 if( strpos( $src, '?ver=' ) )
 $src = remove_query_arg( 'ver', $src );
 return $src;
}
add_filter( 'style_loader_src', 'remove_cssjs_ver', 10, 2 );
add_filter( 'script_loader_src', 'remove_cssjs_ver', 10, 2 );

function defer_js_async($tag){

## 1: list of scripts to defer.
$scripts_to_defer = array('jquery-migrate.min.js','jquery.fancybox.js','main.js','wp-embed.min.js');
## 2: list of scripts to async.
$scripts_to_async = array();
 
#defer scripts
foreach($scripts_to_defer as $defer_script){
  if(true == strpos($tag, $defer_script ) )
  return str_replace( ' src', ' defer="defer" src', $tag ); 
}
#async scripts
foreach($scripts_to_async as $async_script){
  if(true == strpos($tag, $async_script ) )
  return str_replace( ' src', ' async="async" src', $tag ); 
}
return $tag;
}
add_filter( 'script_loader_tag', 'defer_js_async', 10 );