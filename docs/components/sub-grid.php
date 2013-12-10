<h1 id="sub-grid" data-magellan-destination="sub-grid" class="light">Sub-Grid</h1>
<p class="lead">A non-stacking grid for even more versatile layouts.</p>
<hr />

<h4 class="normal">Grids Within Grids</h4>
<p>While the Ink grid can't be nested like its <a href="http://foundation.zurb.com/docs/components/grid.html">Foundation counterpart</a>, Ink does provide a nestable sub-grid for when one grid just isn't enough. By applying a <code>.sub-columns</code> class (as well as a numbered class, same as the primary grid) to a <kbd>&lt;td&gt;</kbd> tag underneath a <code>.columns</code> table, you can sub-divide the <code>.columns</code> table into sub-columns.</p>
<p>The last <code>.sub-columns</code> <kbd>&lt;td&gt;</kbd> in the <code>.columns</code> <kbd>&lt;table&gt;</kbd> should be given a class of <code>last</code> in order for the gutter padding to be properly maintained.</p>
<h6>Basic Sub-Grid Example</h6>
<?php code_example(
'<table class="row">
  <tr>
    <td class="wrapper">

      <table class="eight columns">
        <tr>
          <td class="eight sub-columns">

            .eight.sub-columns

          </td>
          <td class="four sub-columns last">

            .four.sub-columns

          </td>
          <td class="expander"></td>
        </tr>
      </table>

    </td>
    <td class="wrapper last">

      <table class="four columns">
        <tr>
          <td>

            .four columns

          </td>
          <td class="expander"></td>
        </tr>
      </table>

    </td>
  </tr>
</table>',
'html') ?>
<br>
<h6>Non-Collapsing Sub-Grid Columns</h6>
<iframe id="if-subGrid" src="docs/examples/basic-sub-grid.html"></iframe>
<br>
<hr />
<h2 class="light">Compatibility</h2>
<div class="compatibility-section">
  <div class="row">
    <div class="large-9 columns">
      <p>The sub-grid works as expected in most major email clients.</p>
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