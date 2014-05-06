<h1 id="visibility-classes" data-magellan-destination="visibility-classes" class="light">Visibility Classes</h1>
<p class="lead">Selectively show content for different screen sizes.</p>
<hr />

<p>By adding a visibility class to an element, you can show or hide it based on screen size. Visibility classes can be used on any element. Due to Outlook's lack of support for certain CSS properties, the Ink visibiility classes should be used in conjunction with conditional comments to ensure that the content is properly hidden (or shown) in Outlook 2007/2010/2013.</p>
<p>Note: If you're using a visibility class on an image, be sure to apply it to the parent element, not to the image itself.</p>
<h6>Using Visibility Classes</h6>
<?php code_example(
'<table class="row">
  <tr>
    <td class="wrapper last">

      <!--[if !mso]><!-- -->
        <table class="twelve columns show-for-small">
          <tr>
            <td class="panel">

              .show-for-small
              
            </td>
            <td class="expander"></td>
          </tr>
        </table>
      <!--<![endif]-->

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
<br>
<hr />
<h2 class="light">Compatibility</h2>
<div class="compatibility-section">
  <div class="row">
    <div class="large-9 columns">
      <p>Visibility classes work as expected in most major email clients, but do not currently support <strong>Gmail</strong>.</p>
    </div>
    <div class="large-3 columns">
      <a href="#" class="reveal-table">Toggle Full Table</a>
    </div>
  </div>
  
  <div class="row">
    <div class="small-12 columns">
      <table>
        <thead>
          <tr>
            <th width="30%">Client</th>
            <th width="10%"><span>Supported</span></th>
            <th width="60%"><span>Notes</span></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Apple Mail (Desktop)</td>
            <td><span class="check">&#10004;</span></td>
            <td></td>
          </tr>
          <tr>
            <td>Apple Mail (iOS)</td>
            <td><span class="check">&#10004;</span></td>
            <td></td>
          </tr>
          <tr>
            <td>Outlook (2000, 2002, 2003)</td>
            <td><span class="check">&#10004;</span></td>
            <td></td>
          </tr>
          <tr>
            <td>Outlook (2007, 2010, 2013)</td>
            <td><span class="check">&#10004;</span></td>
            <td></td>
          </tr>
          <tr>
            <td>Outlook (2011)</td>
            <td><span class="check">&#10004;</span></td>
            <td></td>
          </tr>
          <tr>
            <td>Thunderbird</td>
            <td><span class="check">&#10004;</span></td>
            <td></td>
          </tr>
          <tr>
            <td>Android</td>
            <td><span class="check">&#10004;</span></td>
            <td></td>
          </tr>
          <tr>
            <td>Gmail (Desktop)</td>
            <td><span class="x">&#10008;</span></td>
            <td>Not yet implemented. Support will be added soon.</td>
          </tr>
          <tr>
            <td>Gmail (Mobile, iOS, Android)</td>
            <td><span class="x">&#10008;</span></td>
            <td>Not yet implemented. Support will be added soon.</td>
          </tr>
          <tr>
            <td>Outlook 2011 for Mac</td>
            <td><span class="check">&#10004;</span></td>
            <td></td>
          </tr>
          <tr>
            <td>AOL Mail</td>
            <td><span class="check">&#10004;</span></td>
            <td></td>
          </tr>
          <tr>
            <td>Hotmail</td>
            <td><span class="check">&#10004;</span></td>
            <td></td>
          </tr>
          <tr>
            <td>Outlook.com</td>
            <td><span class="check">&#10004;</span></td>
            <td></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>