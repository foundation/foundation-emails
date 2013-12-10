<h1 id="buttons" data-magellan-destination="buttons" class="light">Buttons</h1>
<p class="lead">Dynamic and effective calls to action.</p>
<hr />
<h2 class="light">Structure</h2>
<p>To create buttons that look great in most clients, make a table of class <code>button</code> to wrap your <kbd>&lt;a&gt;</kbd> tag. Buttons expand to the full width of their container by default, so if you don't want them to expand all the way, consider placing them in a <a href="#sub-grid">sub-grid</a> or <a href="#block-grid">block-grid</a> element.</p>
<h6>A Basic Button</h6>
<?php code_example(
'<table class="button">
  <tr>
    <td>
      <a href="#">Button Label</a>
    </td>
  </tr>
</table>'
, 'html'); ?>
<br>
<hr />
<h2 class="light">Style Classes</h2>
<p>Several built in styling classes can be applied to the same element as the <code>button</code> class is applied to in order to adjust the button's appearance.</p>
<h4 class="normal">Size</h4>
<p>Size classes affect the button's vertical padding. The available size classes are:</p>
<table>
  <tr>
    <td><code>.button</code> (same as <code>.small-button</code>)</td>
  </tr>
  <tr>
    <td><code>.tiny-button</code></td>
  </tr>
  <tr>
    <td><code>.small-button</code></td>
  </tr>
  <tr>
    <td><code>.medium-button</code></td>
  </tr>
  <tr>
    <td><code>.large-button</code></td>
  </tr>
</table>
<h4 class="normal">Color</h4>
<p>Color classes denote the purpose of the button, and are used to change its background color. The available color classes are:</p>
<table>
  <tr>
    <td>none (same as <code>.primary</code>)</td>
  </tr>
  <tr>
    <td><code>.primary</code></td>
  </tr>
  <tr>
    <td><code>.secondary</code></td>
  </tr>
  <tr>
    <td><code>.alert</code></td>
  </tr>
  <tr>
    <td><code>.success</code></td>
  </tr>
</table>
<h4 class="normal">Border Radius</h4>
<p>Radius classes cause the corners of the buttons to be rounded in clients that support the <kbd>border-radius</kbd> property. The available radius classes are:</p>
<table>
  <tr>
    <td>none (no border-radius)</td>
  </tr>
  <tr>
    <td><code>.radius</code></td>
  </tr>
  <tr>
    <td><code>.round</code></td>
  </tr>
</table>
<hr />
<h2 class="light">Examples</h2>
<p>Buttons expand to the width of their parent container by default, so it's recommended that you contain them within a sub-grid or a relatively small number of columns on the main grid.</p>
<h6>Button Demo</h6>
<p>All the button modifiers demonstrated. The rows of buttons are contained to <code>.four.columns</code> or <code>.six.columns</code> sections of the grid for clarity.</p>
<iframe id="if-buttons" src="docs/examples/buttons.html"></iframe>
<br>
<hr />
<h2 class="light">Compatibility</h2>
<div class="compatibility-section">
  <div class="row">
    <div class="large-9 columns">
      <p>The buttons are compatible with most major clients.</p>
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
            <td><span class="check">&#10004;</span></td>
            <td></td>
          </tr>
          <tr>
            <td>Gmail (Mobile, iOS, Android)</td>
            <td><span class="check">&#10004;</span></td>
            <td></td>
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
