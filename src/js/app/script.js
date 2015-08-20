(function($){
  $(document).ready(function(){

    // *************************************************
    // Initialize Foundation
    // *************************************************
    if(typeof $.prototype.foundation === 'function') {
      $(document).foundation();
    }
    // *************************************************
    // global menu for mobile
    //*************************************************
    var menu = {
      init: function() {
        var $toggleBtn   = $('.gNav__btn');
        var $toggledMenu = $('.gNav__list');

        $toggleBtn.on('click', function(e) {
          e.preventDefault();

          $toggleBtn.toggleClass('gNav__list--active');
          $toggledMenu.toggleClass('gNav__list--active');

        });
      }
    };
    menu.init();
  });
})(jQuery);




