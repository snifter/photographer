(function ($) {
  'use strict';
  
  $(function () {
    $('#menu-button').click(function (e) {
      e.preventDefault();
      $('.sidebar, .content-wrapper').toggleClass('open');
    });
  });
})(jQuery);