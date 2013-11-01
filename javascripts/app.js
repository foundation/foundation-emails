$(document).ready(function(){
  $('a.reveal-table').click(function(e){
    e.preventDefault();
    var options = $(this).parent('div').parent('div').parent('div');
    if(options.hasClass("active")) {
      return options.removeClass('active');
    }
    return options.addClass('active');
  });
});