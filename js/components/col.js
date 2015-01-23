// Columns

// TODO: Make private function

var createCol = function(obj) {
  var output = '';

  $.each(obj, function(v,k) {
    var temp = ''
    var contents = $(this).html();
    var colClass = 'columns ' + $(this).attr('class');

    if (v !== obj.length - 1) {
      temp = '<td class="wrapper">' 
              +'<table class="' + colClass + '">'
              +'<tr><td>'
              + contents +'</tr></td></table></td>';
    } else {
      temp = '<td class="wrapper last">' 
              +'<table class="' + colClass + '">'
              +'<tr><td>'
              + contents +'</tr></td></table></td>';
    }   

    output += temp;
  });

  return output;
};
