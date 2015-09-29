// *************************************************
// Theme Customizer enhancements for a better user experience.
// Contains handlers to make Theme Customizer preview reload changes asynchronously.
// *************************************************
(function($) {
  $siteTitle = $('.site-title a');
  $siteDesc  = $('.site-description');
  $siteBrand = $('.site-title a, .site-description');
  $copyRight = $('#copy');
  $api       = wp.customize;
  // Site title and description.
  $api('blogname', function(value) {
    value.bind(function(to) {
      $siteTitle.text(to);
    });
  });
  $api('blogdescription', function(value) {
    value.bind(function(to) {
      $siteDesc.text(to);
    });
  });
  // Header text color.
  $api('header_textcolor', function(value) {
    value.bind(function(to) {
      if ('blank' === to) {
        $siteBrand.css({
          'clip': 'rect(1px, 1px, 1px, 1px)',
          'position': 'absolute'
        });
      } else {
        $siteBrand.css({
          'clip': 'auto',
          'color': to,
          'position': 'relative'
        });
      }
    });
  });
})(jQuery);
