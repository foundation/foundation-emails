// Columns


var createCol = function(obj) {
  var output = '';

  $.each(obj, function(v,k) {
    var temp = ''
    var contents = $(this).html();
    var colClass = 'columns ' + $(this).attr('class');
    var colNum;
    if ($(this).attr('num')) {
      colNum = $(this).attr('num');
    }
    else {
      // divide row evenly into number of column elements
      // round down, just in case
      var map   = ["one", "two", "three", "four", "five", "six", "seven", "eight", "nine", "ten", "eleven", "twelve"];
      var index = Math.floor( 12 / (obj.length) );
      colNum = map[index - 1];
    }
    // check if this is the last element in the row
    if (v !== obj.length - 1) {
      temp = '<td class="wrapper">' 
              +'<table class="' + colClass + ' ' + colNum +'">'
              +'<tr><td>'
              + contents +'</td><td class="expander"></td></tr></table></td>';
    } else {
      temp = '<td class="wrapper last">' 
              +'<table class="' + colClass + ' ' + colNum +'">'
              +'<tr><td>'
              + contents +'</td><td class="expander"></td></tr></table></td>';
    }   

    output += temp;
  });

  return output;
};
