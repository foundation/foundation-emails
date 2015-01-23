// Table Main Body

$(document).on('ready', function() {

  $('container').each(function() {
    var contents = $(this).html();
    $(this).empty().html('<tbody><tr><td>' + contents + '</td></tr></tbody>');

    $(this).replaceWith(function() {
      return $('<table/>', {
        class: 'container',
        html: this.innerHTML
      });
    });

  }); 
});
