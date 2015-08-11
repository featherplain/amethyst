// magnific popup
$(function () {
  $('.modal__btn').magnificPopup({
    type: 'inline',
    preloader: false,
    focus: '#username',
    modal: true,
  });
  $(document).on('click', '.modal__btn--dismiss', function (e) {
    e.preventDefault();
    $.magnificPopup.close();
  });
});
// add action highlight.js
hljs.initHighlightingOnLoad();
// initialization of highlight.js
$(document).ready(function() {
  $('pre').each(function(i, block) {
    hljs.highlightBlock(block);
  });
});
    