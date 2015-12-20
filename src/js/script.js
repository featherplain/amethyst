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


