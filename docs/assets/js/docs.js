$(document).foundation();

// Adds a copy button to all code examples in the docs.

!function() {

ZeroClipboard.config({
  swfPath: 'https://cdn.jsdelivr.net/zeroclipboard/2.2.0/ZeroClipboard.swf'
});
  
if (!ZeroClipboard.isFlashUnusable()) {
  var $buttonTemplate = $('<button class="docs-code-copy">Copy</button>');

  // Look for code samples and set up a copy button on each
  $('[data-docs-code]').each(function() {
    var $button = $buttonTemplate.clone();
    var text = $(this).find('code').text()
      .replace('&lt;', '<')
      .replace('&gt;', '>');

    $(this).prepend($button);

    var clipboard = new ZeroClipboard($button);
    clipboard.on('copy', function(event) {
      clipboard.setData('text/plain', text);
    });

    // Change the text of the copy button when it's clicked on
    $button.click(function() {
      $(this).text('Copied!');
      window.setTimeout(function() {
        $button.text('Copy');
      }, 3000);
    });
  });
}

}();

!function() {

var source = {
  limit: 10,
  source: function(query, sync, async) {
    query = query.toLowerCase();

    $.getJSON('./data/search.json', function(data, status) {
      async(data.filter(function(elem, i, arr) {
        var name = elem.name.toLowerCase();
        var terms = [name, name.replace('-', '')].concat(elem.tags || []);
        for (var i in terms) if (terms[i].indexOf(query) > -1) return true;
        return false;
      }));
    });
  },
  display: function(item) {
    return item.name;
  },
  templates: {
    notFound: function(query) {
      return '<div class="tt-empty">No results for "' + query.query + '".</div>';
    },
    suggestion: function(item) {
      return '<div><span class="name">' + item.name + '<span class="meta">' + item.type + '</span></span> <span class="desc">' + item.description + '</span></div>';
    }
  }
}

// Search
$('[data-docs-search]')
  .typeahead({ highlight: false }, source)
  .on('typeahead:select', function(e, sel) {
    window.location.href = sel.link;
  });

// Auto-highlight unless it's a phone
if (!navigator.userAgent.match(/(iP(hone|ad|od)|Android)/)) {
  $('[data-docs-search]').focus();
}

}();

!function() {

var $h2s = $('.docs-component h2');
var $toc = $('[data-docs-toc]');

$h2s.each(function() {
  if ($(this).parents('.docs-code-live').length) return;

  var text = $(this).text();
  var anchor = $(this).children('a').attr('href');
  
  $toc.append('<li><a href="'+anchor+'">'+text+'</a></li>');
});

if ($toc.length) {
  new Foundation.Magellan($toc, {});
}

}();

