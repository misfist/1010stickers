// Show more photos on button click

$ = jQuery

$( document ).ready(function() {
  console.log( "ready!" );
  $('#loadMore').click(function() {
    $('li.hidden:lt(6)').show(1000).removeClass('hidden');
    if($('li.hidden').length == 0) { $('#loadMore').hide() }

  });
});


