!function() {

var $currentText = $('[data-docs-code-current]');
var $toggleButtons = $('[data-docs-code-toggle]');

$toggleButtons.click(function(e) {
  e.preventDefault();
  $('body').toggleClass('is-inky-enabled');

  if ($('body').hasClass('is-inky-enabled')) {
    $currentText.text('Inky');
    $toggleButtons.text('Switch to HTML');
  }
  else {
    $currentText.text('HTML');
    $toggleButtons.text('Switch to Inky');
  }
});

}();
