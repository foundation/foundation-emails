$(document).foundation();
$('.doc-nav a').click(function(e){
  e.preventDefault();
  var target = $(this).attr('href');
  var offset = $(target).offset().top;
  $('html, body').animate({
    scrollTop : offset
  }, Math.sqrt(offset)*15);
});
$('.inky').addClass('loaded');
$('.process-4-2').addClass('load');
$('.process-5-2').addClass('load');
$('.process-2').addClass('load');
$('.process-3').addClass('load');
$('.inky-small').addClass('load');
$('.inky-fish').addClass('load');
/* $('.bubble').addClass('float'); */
function shuffle(array) {
  var m = array.length, t, i;

  // While there remain elements to shuffle…
  while (m) {

    // Pick a remaining element…
    i = Math.floor(Math.random() * m--);

    // And swap it with the current element.
    t = array[m];
    array[m] = array[i];
    array[i] = t;
  }

  return array;
}

var bubbles = $('.bubble'),
    ranges = shuffle([0, 100, 200, 300, 400, 500, 600, 700, 800, 900]);

bubbles.each(function(){
  var offset = ranges.pop();
    setTimeout(function() {
      $(this)
        .css({
          'left': offset + Math.floor((Math.random()*100)+1),
          'top': Math.floor((Math.random()*500)+1)
        })
        .addClass('float');
    }.bind(this), Math.floor((Math.random()*10)+1)*500);
});

var original = '';

$('#appendQuery').on('click', function(){
  $('#linkAppend').toggleClass('inactive', !$(this).is(':checked'));
});

$(document).on('click', '#previewModal .close-btn', function(e) {
  e.preventDefault();
  $('#previewModal').delay(100).removeClass('active');
  $('html, body').css('max-height', 'none').css('overflow', 'scroll');
  $('#skateForm textarea').show();
});

$(document).on('click', '#showPreview', function(e) {
  e.preventDefault();
  $('html, body').animate({
    scrollTop : 0
  }, 700);
  $('#previewModal').delay(100).addClass('active');
  $('#skateForm textarea').hide();
  $('html, body').css('max-height', $(window).height()).css('overflow', 'hidden');
  $('iframe').height($(window).height() - 47)
});

$(document).on('click', '#inlinerReset', function(e) {
  e.preventDefault();
  $('.show-on-submit').fadeOut(700);
  $('.hide-on-submit').fadeIn(700);
  $('#emailSource').removeClass('result').val(original);
});

$('#skateForm').on('submit', function(e){
  e.preventDefault();
  original = $('#emailSource').val()
  var data = {
    source: original,
  };

  $('#emailSource').val('Loading...')
  $('html, body').animate({
    scrollTop : $('.top-headlines').offset().top
  }, 700);
  $('#emailSource').addClass('result');
  $('.hide-on-submit').fadeOut(700);
  
  if ($('#linkAppend').val() && $('#appendQuery').is(':checked')) {
    data.linkAppend = $('#linkAppend').val()
  }  

  $.post("skate-proxy.php", data, function(resp){
    $('.show-on-submit').fadeIn(700);
    $(document).foundation('reveal');
    $('#emailSource').val(resp.html);
    $('#previewModal iframe').contents().find('html').html(resp.html);
  }, "json");

  var email = $('#inlinerEmailSignup').val()
  if (email) {
    $('#emailBox input').attr("disabled", "disabled");
    var data = {
      email: email
    };
    $.post("newsletter.php", data, function(resp){$('#emailBox').html('<div data-alert class="alert-box">Congratulations, '+email+' is signed up for the list!<a href="#" class="close">&times;</a></div>');});
  }
});

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