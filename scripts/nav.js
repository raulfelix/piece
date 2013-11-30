var Piece = (function() {
    
  var navToggle, body;

  function toggleNav() {

    body.toggleClass('active');
  }

  function init() {
    body = $('body');
    navToggle = $('#nav-toggle').click(toggleNav);
    console.log("click");
  }

  return {
    init: init
  };

})();

$(document).ready(function() {
  Piece.init();
});