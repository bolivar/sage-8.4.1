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
        // mobile menu fire up
        $("#mobile-menu").mmenu({
           // options
        }, {
           // configuration
           offCanvas: {
              pageNodetype: "header"
           }
        });



        // this triggers the search box
        $(document).ready(function(){
           var submitIcon = $('.searchbox-icon');
           var inputBox = $('.searchbox-input');
           var searchBox = $('.searchbox');
           var isOpen = false;
           submitIcon.click(function(){
            if(isOpen == false){
             searchBox.addClass('searchbox-open');
             inputBox.focus();
             isOpen = true;
            } else {
             searchBox.removeClass('searchbox-open');
             inputBox.focusout();
             isOpen = false;
            }
           });
            submitIcon.mouseup(function(){
             return false;
            });
            searchBox.mouseup(function(){
             return false;
            });
           $(document).mouseup(function(){
            if(isOpen == true){
             $('.searchbox-icon').css('display','block');
             submitIcon.click();
           }
          });
          });
          function buttonUp(){
          var inputVal = $('.searchbox-input').val();
          inputVal = $.trim(inputVal).length;
          if( inputVal !== 0){
           $('.searchbox-icon').css('display','none');
          } else {
           $('.searchbox-input').val('');
           $('.searchbox-icon').css('display','block');
          }
          }

          //fixed menu js
          // Hide Header on on scroll down
          var didScroll;
          var lastScrollTop = 0;
          var delta = 5;
          var navbarHeight = $('.banner').outerHeight();

          $(window).scroll(function(event){
              didScroll = true;
          });

          setInterval(function() {
              if (didScroll) {
                  hasScrolled();
                  didScroll = false;
              }
          }, 250);

          function hasScrolled() {
              var st = $(this).scrollTop();

              // Make sure they scroll more than delta
              if(Math.abs(lastScrollTop - st) <= delta)
                  return;

              // If they scrolled down and are past the navbar, add class .nav-up.
              // This is necessary so you never see what is "behind" the navbar.
              if (st > lastScrollTop && st > navbarHeight){
                  // Scroll Down
                  $('.banner').removeClass('nav-down').addClass('nav-up');
              } else {
                  // Scroll Up
                  if(st + $(window).height() < $(document).height()) {
                      $('.banner').removeClass('nav-up').addClass('nav-down');
                  }
              }

              lastScrollTop = st;
          }

          // end fixed menu js

          // slick carousel js
          $('.center').slick({
            centerMode: true,
            centerPadding: '80px',
            slidesToShow: 3,
            autoplay: false,
            autoplaySpeed: 3000,
            arrows: true,
            responsive: [
              {
                breakpoint: 768,
                settings: {
                  arrows: false,
                  centerMode: true,
                  centerPadding: '40px',
                  slidesToShow: 2
                }
              },
              {
                breakpoint: 480,
                settings: {
                  arrows: false,
                  centerMode: true,
                  centerPadding: '40px',
                  slidesToShow: 1
                }
              }
            ]
          });

          // shop now slider on the article page
          $('.shop-now').slick({
            dots: false,
            autoplay: true,
            autoplaySpeed: 5000
          });

          //keep the share sideback on a fixed position
          $('.share-side').scrollToFixed({
            marginTop: 10
          });

          $(function () {
            $.scrollUp({
              scrollName: 'up', // Element ID
              topDistance: '300', // Distance from top before showing element (px)
              topSpeed: 300, // Speed back to top (ms)
              animation: 'fade', // Fade, slide, none
              animationInSpeed: 200, // Animation in speed (ms)
              animationOutSpeed: 200, // Animation out speed (ms)
              scrollText: 'Scroll to top', // Text for element
              activeOverlay: false, // Set CSS color to display scrollUp active point, e.g '#00FFFF'
            });
          });


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
