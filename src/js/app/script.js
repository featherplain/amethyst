(function($){
  $(document).ready(function(){

    // *************************************************
    // Initialize Foundation
    // *************************************************
    if(typeof $.prototype.foundation === 'function') {
      $(document).foundation();
    }
    // *************************************************
    // global nav for mobile
    // *************************************************
    var navMobile = {
      init: function() {
        var $toggleBtn   = $('.global-nav__btn');
        var $toggledMenu = $('.global-nav__list');

        $toggleBtn.on('click', function(e) {
          e.preventDefault();

          $toggleBtn.toggleClass('global-nav__list--active');
          $toggledMenu.toggleClass('global-nav__list--active');

        });
      }
    };
    navMobile.init();
    // *************************************************
    // global nav for pc
    // *************************************************
    var navPc = {
      init: function() {
        var $menuItem = $('#menu').find('.menu-item-has-children');

        $menuItem.hover(function() {
          $('>.sub-menu', this).fadeIn('fast');
        },
        function() {
          $('>.sub-menu', this).fadeOut('fast');
        });
      }
    };
    navPc.init();
  });
})(jQuery);




