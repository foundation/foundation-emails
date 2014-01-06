<h1 id="block-grid" class="light">Block-Grid</h1>
<p class="lead">An even-width element grid that doesn't use media queries.</p>
<hr />
<h2 class="light">Evenly Spaced Blocks</h2>
<p>For cases where neither the Ink grid nor the Ink sub-grid is appropriate, the block-grid can often be quite useful. Block-grid elements automatically align to the left and are pushed down to the next row individually as the viewport gets smaller...all without using media queries.</p>
<p>Block-grids consist of a table with class <code>block-grid</code> applied to it, along with a class in the pattern 'number-up' (ex. <code>.two-up</code>, <code>.three-up</code>, etc.) to describe how many even-sized elements should be placed per row. Extra care should be taken to ensure that there aren't any whitespace characters or newlines between the closing <code>&lt;td&gt;</code> of a block-grid element and the opening <code>&lt;td&gt;</code> of the preceding element, since some clients will render the whitespace as a gap between the elements.</p>
<h6>Basic Block-Grid Markup</h6>
<?php code_example(
'<table class="container">
  <tr>
    <td>

      <table class="block-grid two-up">
        <tr>
          <td>

            Column #1

          </td><td> <!-- Make sure the tags are directly next to each other -->

            Column #2

          </td>
        </tr>
      </table>

    </td>
  </tr>
</table>',
'html') ?>
<br>
<h6>Visual Example of Block-Grids</h6>
<iframe id="if-blockGrid" src="docs/examples/basic-block-grid.html"></iframe>
<br>
<hr />
<h2 class="light">Examples</h2>
<h4 id="gmail" class="normal">Multi-column Layouts in Gmail</h4>
<p>A major use case for block-grids, since they don't rely on media queries, is to create multi-column layouts for Gmail. The simplest way to accomplish this is to create a <code>.two-up</code> block-grid and use the block-grid elements as your column structures. As a progressive enhancement, adding a media query that expands the columns to 100% width under 600px would cause the columns to take up the whole screen on mobile clients that support media queries, while not breaking the reflow pattern for those that don't.</p>
<h6>Gmail Two Column Layout</h6>
<?php code_example(
'<table class="container">
  <tr>
    <td>

      <table class="block-grid two-up">
        <tr>
          <td>

            Main Content

          </td><td>

            Right Sidebar

          </td>
        </tr>
      </table>

    </td>
  </tr>
</table>',
'html') ?>
<br>
<h6>Block-Grid Column Progressive Enhancement (Optional)</h6>
<?php code_example(
'@media only screen and (max-width: 600px) {
  table[class="container"] .block-grid td {
    width: 100% !important;
  }
}',
'css') ?>
<br>
<!-- <h4 class="normal">Horizontal Navigation</h4>
<p></p> -->
<hr />
<h2 class="light">Compatibility</h2>
<div class="compatibility-section">
  <div class="row">
    <div class="large-9 columns">
      <p>The block-grid works as expected in most major email clients.</p>
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
            <td>Make sure that there isn't any whitespace between your <kbd>&lt;td&gt;</kbd> elements, otherwise Thunderbird will add a gap between your block-grid elements.</td>
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
