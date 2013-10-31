<h1 id="visibility-classes" class="light">Visibility Classes</h1>
<p class="lead">Selectively show content for different screen sizes.</p>
<hr />

<p>By adding a visibility class to an element, you can show or hide it based on screen size.  Visibility classes can be used on any element.</p>
<p>Note: If you're using a visibility class on an image, be sure to apply it to the parent element, not to the image itself.</p>
<h6>Using Visibility Classes</h6>
<?php code_example(
'<table class="row">
  <tr>
    <td class="wrapper last">

      <table class="twelve columns show-for-small">
        <tr>
          <td class="panel">

            .show-for-small
            
          </td>
          <td class="expander"></td>
        </tr>
      </table>

      <table class="twelve columns hide-for-small">
        <tr>
          <td class="panel">

            .hide-for-small

          </td>
          <td class="expander"></td>
        </tr>
      </table>

    </td>
  </tr>
</table>',
'html') ?>
<br>
<h6>Content Visibility</h6>
<iframe id="if-visibilityClasses" src="docs/examples/visibility-classes.html"></iframe>
<br>
<hr />
<h2 class="light">Breakdown</h2>
<p>Available visibility classes:</p>
<table>
  <tr>
    <td><code>.hide-for-small</code></td>
  </tr>
  <tr>
    <td><code>.show-for-small</code></td>
  </tr>
</table>