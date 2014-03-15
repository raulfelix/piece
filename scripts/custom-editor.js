jQuery(document).ready(function($) {
  
  var eventForm = $('#event-form');

  $('#event-insert').on('click', function(ev) {
    var y = $('#year', eventForm).val();
    var e = $('#event', eventForm).val();
    wp.media.editor.insert(
      '<div class="event"><div>' + y + '</div><div>' + e + '</div></div>');
    $('#year', eventForm).val('');
    $('#event', eventForm).val('');
  });

  $('#class-time-insert').on('click', function(ev) {
    var day = $('#day').val();
    var period = $('#period').val();
    var time = $('#time').val();
    wp.media.editor.insert(
        '<div class="entry"><span>' + day + '</span><span>'+ period +'</span><span>'+ time +'</span></div>');
    $('#day').val('');
    $('#period').val('');
    $('#time').val('');
  });

});