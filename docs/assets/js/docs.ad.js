$(function() {
  // TODO: Add alternate between advanced and intro
  var topic = $('h1.docs-page-title').text();
  var header = 'Master ' + topic;
  var body = 'Get up to speed FAST, learn straight from the experts who built Foundation for Emails.';
  var link = 'https://zurb.com/university/responsive-emails-foundation?utm_source=Foundation%20Docs&utm_medium=Docs&utm_content=Struggling&utm_campaign=Docs%20To%20Emails';
  var cta = 'Learn More';

  var html = '<div class="ad-unit"><h3 class="ad-unit-title">' + header + '</h3>' +
             '<p class="ad-unit-text">' + body + '</p>' +
             '<a class="button ad-unit-button" href="' + link+ '">' +
             cta + '</a></div>';
  $('#TOCAdUnit').html(html);

});
