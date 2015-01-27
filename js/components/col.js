// Columns


var createCol = function(obj) {
  var output = '';
  var mQ     = {small: 0, large: 0};
  var colEven  = '';

  $.each(obj, function() {
    var col = $(this);

    // do the maths first
    $.each( mQ, function(i, val) {
      if (!col.attr(i)) {
        // count the number of columns that do not have a specified width
        mQ[i]++;

        // at the final iteration
        if (mQ[i] === obj.length) {
          // divide the default grid number by the number of colums with no width
          var evenSplit = Math.floor( 12 / (mQ[i]) );

          // append the missing class to the column class
          colEven += i + '-' + evenSplit + ' ';
        }
      };
    });
  });

  $.each(obj, function(v,k) {
    var temp     = ''
    var contents = $(this).html();
    var colClass = 'columns ' + $(this).attr('class');
    var colNum   = '';
    var col      = $(this);

    $.each( mQ, function(i, val) {
      if (col.attr(i)) {
        colNum += i + '-' + col.attr(i) + ' ';
      };
    });

    // check if this is the last element in the row
    // add previously calculated even class
    if (v !== obj.length - 1) {
      temp = '<td class="wrapper">' 
              +'<table class="' + colClass + ' ' + colNum + colEven +'">'
              +'<tr><td>'
              + contents +'</td><td class="expander"></td></tr></table></td>';
    } else {
      temp = '<td class="wrapper last">' 
              +'<table class="' + colClass + ' ' + colNum + colEven +'">'
              +'<tr><td>'
              + contents +'</td><td class="expander"></td></tr></table></td>';
    }   

    output += temp;
  });

  return output;
};
