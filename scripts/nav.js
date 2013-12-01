var Piece = (function() {
    
  var navToggle, body;

  function toggleNav() {

    body.toggleClass('active');
  }

  function init() {
    body = jQuery('body');
    navToggle = jQuery('#nav-toggle').click(toggleNav);
    console.log("click");
  }

  return {
    init: init
  };

})();

jQuery(document).ready(function() {
  Piece.init();
});