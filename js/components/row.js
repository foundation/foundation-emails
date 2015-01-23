// Rows

$(document).on('ready', function() {
  $('row').each(function() {
    var contents = $(this).html();
    var html = $.parseHTML( contents );

    // find a better way to detect empty row
    // or will we ever have an empty row?
    if (html[0].nodeName !== '#text') {
      contents = createCol(html);
    }

    $(this).empty().html('<tr>' + contents + '</tr>');
    $(this).replaceWith(function() {
      return $('<table/>', {
        class: 'row',
        html: this.innerHTML
      });
    });

  }); 
});
