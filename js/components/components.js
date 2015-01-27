var insertComponents = function(content) {
  var output     = '';
  var component  = $.parseHTML(content);
  var tag        = $(component).prop('tagName');
  var componentClass = '';

  if ($(component).attr('class')) {
    componentClass = $(component).attr('class');
  };

  if (tag === "PANEL") {
    output += '<td class="panel ' + componentClass +'">' + component[0].innerHTML + '</td>';
  }
  else if (tag === "BUTTON") {
    output += '<td><table class="button ' + componentClass +'"><tr><td>' + component[0].innerHTML + '</td></tr></table></td>'
  }
  else {
    output += '<td>' + content + '</td>';
  }

  return output;
};