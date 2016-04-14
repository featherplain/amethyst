(function($) {
  $(function(){
    // ------------------------------------------------------------
    // Initialize Foundation
    // ------------------------------------------------------------
    if(typeof $.prototype.foundation === 'function') {
      $(document).foundation();
    }
    // ------------------------------------------------------------
    // Global navigation
    // ------------------------------------------------------------
    var menu = {
      init: function() {
        // toggle global navigation
        var $toggleBtn   　　= $('#js-btn-nav');
        var $toggledMenu 　　= $('#js-menu');

        $toggleBtn.on('click', function() {
          console.log('click');

          $toggleBtn.toggleClass('menu--active');
          console.log('toggleClass');
          $toggledMenu.toggleClass('menu--active');
          console.log('toggleClass');

        });
      }
    };
    menu.init();
    // ------------------------------------------------------------
    // slider
    // require bxslider
    // https://github.com/stevenwanderski/bxslider-4
    // ------------------------------------------------------------
    var slider ={
      init: function() {
        $('.bxslider').bxSlider({
          mode: 'fade'
        });
      }
    };
    slider.init();
  });
})(jQuery);

