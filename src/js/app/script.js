(function($) {
  $(document).ready(function() {
    // *************************************************
    // Initialize Foundation
    // *************************************************
    if(typeof $.prototype.foundation === 'function') {
      $(document).foundation();
    }
    // *************************************************
    // Global navigation
    // *************************************************
    var globalNav = {
      init: function() {
        // toggle global navigation
        var $toggleBtn   　　= $('.gnav__trigger');
        var $toggledMenu 　　= $('.gnav__list');

        $toggleBtn.on('click', function(e) {
          e.preventDefault();

          $toggleBtn.toggleClass('gnav__list--active');
          $toggledMenu.toggleClass('gnav__list--active');

        });
        // add button that display child menu items
        $('#gnav-list').find('.menu-item-has-children > a').after('<button class="gnav__arrowdown"></button>');

        // toggle submenu items.
        var $dropDownToggle = $('.gnav__arrowdown');

        $dropDownToggle.on('click', function(e) {
          $(this).siblings('.sub-menu').slideToggle();
        });
      }
    };
    globalNav.init();

  });
})(jQuery);
//*************************************************
// Theme Customizer enhancements for a better user experience.
// Contains handlers to make Theme Customizer preview reload changes asynchronously.
//*************************************************
(function($) {
  // Site title and description.
  wp.customize('blogname', function(value) {
    value.bind(function(to) {
      $('.site-title a').text(to);
    });
  });
  wp.customize('blogdescription', function(value) {
    value.bind(function(to) {
      $('.site-description').text(to);
    });
  });
  // Header text color.
  wp.customize('header_textcolor', function(value) {
    value.bind(function(to) {
      if ('blank' === to) {
        $('.site-title a, .site-description').css({
          'clip': 'rect(1px, 1px, 1px, 1px)',
          'position': 'absolute'
        });
      } else {
        $('.site-title a, .site-description').css({
          'clip': 'auto',
          'color': to,
          'position': 'relative'
        });
      }
    });
  });
})(jQuery);





