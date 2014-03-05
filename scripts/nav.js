var Piece = (function() {
    
  var navToggle, body;

  function onBackToTop() {
    jQuery('html, body').animate({
      scrollTop: 0
    }, 500);
  }

  function toggleNav() {
    body.toggleClass('active');
  }

  function init() {
    body = jQuery('body');
    navToggle = jQuery('#nav-toggle').click(toggleNav);
    jQuery('.up').click(onBackToTop);
  }

  return {
    init: init
  };

})();

jQuery(document).ready(function() {
  Piece.init();
});