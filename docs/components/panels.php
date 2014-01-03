<h1 id="panels" data-magellan-destination="panels" class="light">Panels</h1>
<p class="lead">Quickly highlight important content.</p>
<hr />

<p>Add a class of <code>panel</code> to a <kbd>&lt;td&gt;</kbd> in a <code>.columns</code> table in order to give it a default border and background color. Great for offsetting important content or for quickly prototyping a layout.</p>
<h6>Panel Markup</h6>
<?php code_example(
'<table class="twelve columns">
  <tr>
    <td class="panel">

      Panel content

    </td>
    <td class="expander"></td>
  </tr>
</table>',
'html') ?>
<br>
<h6>Panel Example</h6>
<iframe id="if-panels" src="docs/examples/panels.html"></iframe>
<br>
<hr>
<h2 class="light">Examples</h2>
<h4 class="normal">Sidebar Panel</h4>
<p>A common patten is to have a panel section serve as a sidebar to offset it from the primary content.</p>
<h6>Sidebar Panel Markup</h6>
<?php code_example(
'<table class="row">
  <tr>
    <td class="wrapper">

      <table class="eight columns">
        <tr>
          <td>

            Main content

          </td>
          <td class="expander"></td>
        </tr>
      </table>

    </td>
    <td class="wrapper last">

      <table class="four columns">
        <tr>
          <td class="panel">

            Panel content

          </td>
          <td class="expander"></td>
        </tr>
      </table>

    </td>
  </tr>
</table>',
'html') ?>
<br>
<h6>Sidebar Panel</h6>
<iframe id="if-panelSidebar" src="docs/examples/panel-sidebar.html"></iframe>
<br>
<br>
<h4 class="normal">Panels With Sub-grids</h4>
<p>Nesting a sub-grid under a panel is non-intuitive, since the sub-grid columns would normally be applied to the <kbd>&lt;td&gt;</kbd> elements directly under the <code>.columns</code> table. To get around this, give the <kbd>&lt;td&gt;</kbd> a class of <code>.panel</code> and a class of <code>.sub-grid</code>. You can then put a <kbd>&lt;table&gt;</kbd> inside the <kbd>&lt;td&gt;</kbd> and create the sub-columns using the <kbd>&lt;td&gt;</kbd> elements of the inner table, as shown below.</p>
<h6>Panel Sub-Grid Markup</h6>
<?php code_example(
'<table class="twelve columns">
  <tr>
    <td class="panel sub-grid">

      <table>
        <tr>
          <td class="six sub-columns">
            
            Left Sub-Column

          </td>
          <td class="six sub-columns">
            
            Right Sub-Column

          </td>
        </tr>
      </table>

    </td>
    <td class="expander"></td>
  </tr>
</table>',
'html') ?>
<br>
<h6>Sub-Grid Panel</h6>
<iframe id="if-panelSubGrid" src="docs/examples/panel-sub-grid.html"></iframe>
<br>
<hr />
<h2 class="light">Compatibility</h2>
<div class="compatibility-section">
  <div class="row">
    <div class="large-9 columns">
      <p>Panels work as expected in most major email clients.</p>
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