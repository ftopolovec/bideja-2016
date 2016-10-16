/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can
 * always reference jQuery with $, even when in .noConflict() mode.
 * ======================================================================== */

(function($) {

  // Use this variable to set up the common and page specific functions. If you
  // rename this variable, you will also need to rename the namespace below.
  var Sage = {
    // All pages
    'common': {
      init: function() {
        // JavaScript to be fired on all pages
      },
      finalize: function() {
        // JavaScript to be fired on all pages, after page specific JS is fired
      }
    },
    // Home page
    'home': {
      init: function() {
        // JavaScript to be fired on the home page
      },
      finalize: function() {
        // JavaScript to be fired on the home page, after the init JS
      }
    },
    // About us page, note the change from about-us to about_us.
    'about_us': {
      init: function() {
        // JavaScript to be fired on the about us page
      }
    }
  };

  // The routing fires all common scripts, followed by the page specific scripts.
  // Add additional events for more control over timing e.g. a finalize event
  var UTIL = {
    fire: function(func, funcname, args) {
      var fire;
      var namespace = Sage;
      funcname = (funcname === undefined) ? 'init' : funcname;
      fire = func !== '';
      fire = fire && namespace[func];
      fire = fire && typeof namespace[func][funcname] === 'function';

      if (fire) {
        namespace[func][funcname](args);
      }
    },
    loadEvents: function() {
      // Fire common init JS
      UTIL.fire('common');

      // Fire page-specific init JS, and then finalize JS
      $.each(document.body.className.replace(/-/g, '_').split(/\s+/), function(i, classnm) {
        UTIL.fire(classnm);
        UTIL.fire(classnm, 'finalize');
      });

      // Fire common finalize JS
      UTIL.fire('common', 'finalize');
    }
  };

  // Load Events
  $(document).ready(UTIL.loadEvents);

})(jQuery); // Fully reference jQuery after this point.


/*************************************************************************************
** Side menu script
*************************************************************************************/
jQuery(document).ready(function() {   
    var sideslider = jQuery('[data-toggle=collapse-side]');
    var sel = sideslider.attr('data-target');
    var sel2 = sideslider.attr('data-target-2');
    sideslider.click(function(event){
        jQuery(sel).toggleClass('in');
        jQuery(sel2).toggleClass('out');
    });
});
/*************************************************************************************
** Show menu when scroll up
*************************************************************************************/
var didScroll;
var lastScrollTop = 0;
var delta = 5;
var navbarHeight = jQuery('header').outerHeight();

jQuery(window).scroll(function(event){
    didScroll = true;
});

setInterval(function() {
    if (didScroll) {
        hasScrolled();
        didScroll = false;
    }
}, 100);

function hasScrolled() {
    var st = jQuery(this).scrollTop();
    
    // Make sure they scroll more than delta
    if(Math.abs(lastScrollTop - st) <= delta)
        return;
    
    // If they scrolled down and are past the navbar, add class .nav-up.
    // This is necessary so you never see what is "behind" the navbar.
    if (st > lastScrollTop && st > (navbarHeight - 80)){
        // Scroll Down
        jQuery('header').removeClass('nav-down').addClass('nav-up');
        jQuery('.side-collapse').addClass('in');
        jQuery('.pull-right').removeClass('open');

    } else {
        // Scroll Up
        if(st + jQuery(window).height() < jQuery(document).height()) {
            jQuery('header').removeClass('nav-up').addClass('nav-down');
            if (st > navbarHeight) {
              jQuery('header').addClass('nav-reposition'); 
              jQuery('.side-collapse').css('top', '100px'); 
            }  
        } 
    }
   
    lastScrollTop = st;
}

jQuery(window).scroll(function() {
   if(jQuery(window).scrollTop() == 0) {
       jQuery('header').removeClass('nav-reposition');
       jQuery('.side-collapse').css('top', '140px');
   } 
});

jQuery(document).ready(function(){
  jQuery('.side-collapse').css('top', '140px');
});
/*************************************************************************************
** Side menu toggle icon
*************************************************************************************/
jQuery(document).ready(function(){
  jQuery('#nav-icon1,#nav-icon2,#nav-icon3,#nav-icon4').click(function(){
    jQuery(this).toggleClass('open');
  });
});

jQuery(document).ready(function() {
  jQuery("#owl-example").owlCarousel({
    singleItem:true 
  });
});

/*************************************************************************************
** O nama custom team cards
*************************************************************************************/
