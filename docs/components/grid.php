<h1 id="grid" data-magellan-destination="grid" class="light">Grid</h1>
<p class="lead">Create powerful multi-device layouts quickly and easily.</p>
<hr>
<h2 class="light">Structure</h2>
<p>Ink uses a 12-column grid with a 580px wrapper. On mobile devices (under 580px wide), columns become full width and stack vertically.</p>
<p>Ink's grid can be thought of in terms of three components:</p>
<h4 class="normal">Containers</h4>
<p>Ink containers wrap the content and maintain a fixed, 580px layout on large displays. Below 580px, containers take up 95% of the screen's width, ensuring that your content doesn't run right up against the edges of the user's screen.</p>
<h4 class="normal">Rows</h4>
<p>Rows are used to separate blocks of content vertically. In addition to the vertical separation, the <kbd>&lt;td&gt;</kbd> tags of <code>.row</code> tables use the wrapper class to maintain a gutter between columns. Note: the last <code>.wrapper</code> <kbd>&lt;td&gt;</kbd> in a row MUST have a class of <code>.last</code> applied to it, even if it's the only wrapper in the row (ex. for a row with a single, twelve-column wide content area).</p>
<h4 class="normal">Columns</h4>
<p>Columns denote the width of the content, as based on a 12-column system. The content inside them will expand to cover n-columns, assuming that the number of columns in one row adds up to 12.</p>
<h6>The Three Grid Components</h6>
<p>Basic example of the three main grid components.</p>
<?php code_example(
'<table class="container">
  <tr>
    <td>

      <table class="row">
        <tr>
          <td class="wrapper">

            <table class="eight columns">
              <tr>
                <td>

                  Eight Columns

                </td>
                <td class="expander"></td>
              </tr>
            </table>

          </td>
          <td class="wrapper last">

            <table class="four columns">
              <tr>
                <td>

                  Four Columns

                </td>
                <td class="expander"></td>
              </tr>
            </table>

          </td>
        </tr>
      </table>

    </td>
  </tr>
</table>'
, 'html'); ?>
<br>
<h6>Visual Explanation of Grid</h6>
<p>Diagram of how the basic grid is laid out. While Ink was used to create the example (and therefore it responds to the correct media queries), extra coloring and spacing was added for clarity.</p>
<iframe id="if-basicGrid" src="docs/examples/basic-grid.html"></iframe>
<br>
<hr>
<h2 class="light">Breakdown</h2>
<p>The main elements in the grid and how they're used:</p>
<table>
  <thead>
    <tr>
      <td>Element Type</td>
      <td>Class Name</td>
      <td>Description</td>
    </tr>
  </thead> 
  <tr>
    <td>table</td>
    <td>container</td>
    <td>Constrains the content to a 580px wrapper on large screens (95% on small screens) and centers it within the body.</td>
  </tr>
  <tr>
    <td>table</td>
    <td>row</td>
    <td>Separates each row of content.</td>
  </tr>
  <tr>
    <td>td</td>
    <td>wrapper</td>
    <td>Wraps each <code>.columns</code> table, in order to create a gutter between columns and force them to expand to full width on small screens.</td>
  </tr>
  <tr>
    <td>td</td>
    <td>last</td>
    <td>Class applied to the last <code>.wrapper</code> td in each row in order for the gutter to work properly. If you only have one (presumably full-width) <code>.columns</code> table (and therefore one <code>.wrapper</code> td) in a row, the <code>.wrapper</code> td still needs to have the last class applied to it.</td>
  </tr>
  <tr>
    <td>table</td>
    <td>{number}</td>
    <td>Can be any number between one and twelve (spelled out). Used to determine how wide your <code>.columns</code> tables are. The number of columns in each row should add up to 12, including <!-- <a href="#offsets"> -->offset columns<!-- </a> -->.</td>
  </tr>
  <tr>
    <td>table</td>
    <td>columns</td>
    <td>Table that displays as n-twelfths of the width of the 580px <code>.container</code> table on large screens, and expands to the full width of the <code>.container</code> table on small screens.</td>
  </tr>
  <tr>
    <td>td</td>
    <td>expander</td>
    <td>An empty (and invisible) element added after the content element in a <code>.columns</code> table. It forces the content <code>td</code> to expand to the full width of the screen on small devices, instead of just the width of the content within the <code>td</code>.</td>
  </tr>
</table>
<hr>

<h2 class="light">Examples</h2>
<h4 class="normal">Even Columns</h4>
<p>Ink's 12-column grid makes creating even column layouts a snap. Just use one <code>.twelve.columns</code>, two <code>.six.columns</code>, three <code>.four.columns</code> or four <code>.three.columns</code> classes to create your layout. Appearing as multiple, even columns on large screens, the layout will fold into a single column on small (mobile) screens.</p>
<h6>Code for Even Columns</h6>
<?php code_example(
'<table class="container">
  <tr>
    <td>

      <table class="row">
        <tr>
          <td class="wrapper last">

            <table class="twelve columns">
              <tr>
                <td class="panel">

                  twelve.columns
                
                </td>
                <td class="expander"></td>
              </tr>
            </table>

          </td>
        </tr>
      </table>

      <table class="row">
        <tr>
          <td class="wrapper">

            <table class="six columns">
              <tr>
                <td class="panel">

                  .six.columns
                
                </td>
                <td class="expander"></td>
              </tr>
            </table>

          </td>
          <td class="wrapper last">

            <table class="six columns">
              <tr>
                <td class="panel">

                  .six.columns

                </td>
                <td class="expander"></td>
              </tr>
            </table>

          </td>
        </tr>
      </table>

      ...

    </td>
  </tr>
</table>'
, 'html'); ?>
<br>
<h6>Even 1, 2, 3 and 4 Column Layouts</h6>
<iframe id="if-evenColumns" src="docs/examples/even-columns.html"></iframe>
<br>
<br>
<!-- <h4 class="normal">Rows Within Columns</h4>
<p>Unlike the <a href="http://foundation.zurb.com/docs/components/grid.html">Foundation grid</a>, Ink's grid cannot be nested. A layout simulating rows within columns is possible, however, by placing multiple <code>.columns</code> tables (with the same number of columns) within the same <code>.wrapper</code> td.</p> -->
<!-- <script type="text/javascript" src="https://snipt.net/embed/01eb0d482e77ef8e25e40e6d1dae49d1/"></script> -->
<h4 class="normal">Centered Content</h4>
<p>To center the content of a column, apply a class of <code>center</code> to the <kbd>&lt;td&gt;</kbd> that contains the content. If you want to center an image, you should also apply a class of <code>center</code> to the image itself. For maximum client support, we also recommend using the HTML <kbd>&lt;center&gt;</kbd> tag around the content you wish to center.</p>
<h6>The Center Class</h6>
<?php code_example(
'<table class="row">
  <tr>
    <td class="wrapper">

      <table class="six columns">
        <tr>
          <td class="center panel">
            <center>

              Centered content 

            </center>
          </td>
          <td class="expander"></td>
        </tr>
      </table>

    </td>
    <td class="wrapper last">

      <table class="six columns">
        <tr>
          <td class="center panel">
            <center>

              <!-- Centered image -->
              <img class="center" src="http://placehold.it/125x125&text=Centered%20Image">

            </center>
          </td>
          <td class="expander"></td>
        </tr>
      </table>

    </td>
  </tr>
</table>'
, 'html'); ?>
<br>
<h6>Centered Text and Images</h6>
<iframe id="if-centerClass" src="docs/examples/center-class.html"></iframe>
<br>
<br>
<h4 class="normal">Offset Columns</h4>
<p>In lieu of using empty columns to offset content, one can use the <code>.offset-by-{number of columns}</code> helper class (ex,<code>.offset-by-two</code>, <code>.offset-by-three</code>, etc).  By applying the class to the wrapper surrounding a column section, the content will be pushed to the left by the specified number of columns.  Remember to count any column offsets towards the total number of columns in a row when making sure that they add up to 12.</p>
<h6>Offset Columns Markup</h6>
<?php code_example(
'<table class="row">
  <tr>
    <td class="wrapper offset-by-four">
    
      <table class="eight columns">
        <tr>
          <td class="panel">

            Offset Content

          </td>
          <td class="expander"></td>
        </tr>
      </table>

    </td>
  </tr>
</table>'
, 'html'); ?>
<br>
<h6>Offset Example</h6>
<iframe id="if-offsetColumns" src="docs/examples/offset-columns.html"></iframe>
<br>
<br>
<h4 class="normal">Text Padding</h4>
<p>A fairly common use case for the container is to give your text a white background to separate it from a colored email body. To assist with this design pattern, we've included three helper classes with Ink: <code>.text-pad</code>, <code>.left-text-pad</code> and <code>.right-text-pad</code>.</p>
<p>The <code>.text-pad</code> class provides 10px of padding on either side of the content (while it's named <strong>text</strong>-pad, it works just as well on buttons or images), making sure it doesn't butt right up against the edge of your container. The <code>.text-pad</code> class should be applied to the <kbd>&lt;td&gt;</kbd> of a <code>.columns</code> <kbd>&lt;table&gt;</kbd>.</p>
<p>The <code>.left-text-pad</code> and <code>.right-text-pad</code> do the same thing as the <code>.text-pad</code> class, but are meant to be applied to content that doesn't extend across the entire row (in other words, content that isn't twelve columns wide). The directional text-padding classes only apply the padding to the side of the content near the edge of the container on large screens, but apply it to both sides on small screens, when the columns expand to fill the full width of the row.</p>
<h6>The Text-Pad Class</h6>
<?php code_example(
'<table class="row">
  <tr>
    <td class="wrapper">

      <table class="four columns">
        <tr>
          <td class="left-text-pad">

            Text

          </td>
          <td class="expander"></td>
        </tr>
      </table>

    </td>
    <td class="wrapper">

      <table class="four columns">
        <tr>
          <td>

            Text

          </td>
          <td class="expander"></td>
        </tr>
      </table>

    </td>
    <td class="wrapper last">

      <table class="four columns">
        <tr>
          <td class="right-text-pad">

            Text

          </td>
          <td class="expander"></td>
        </tr>
      </table>

    </td>
  </tr>
</table>'
, 'html'); ?>
<br>
<h6>Container Backgrounds</h6>
<p>Visual example of the body and the container having different colored backgrounds, the main use case for <code>.text-pad</code>.</p>
<iframe id="if-textPad" src="docs/examples/text-pad.html"></iframe>
<br>
<br>
<h4 class="normal">Full-Width Rows</h4>
<p>When working with designs that call for a container that's colored to stand out from the background (like the example above), it can often be helpful to have full-width rows that can be styled separately, especially for elements like headers or ad breaks. Since the rows of the Ink grid are usually restrained to the width of the container, this design pattern requires a slightly different syntax than normal.</p>
<p>To create a full-width row, just follow this process:</p>
<ol>
  <li>Create a standard &#8220;container > row > column&#8221; block.</li>
  <li>Swap the <code>.row</code> and <code>.container</code> classes, keeping the tables in the same place.</li>
  <li>Add center code to the outside (<code>.row</code>) table.</li>
</ol>
<p>The row should now extend to the edge of the viewport, while the content is still restricted to the width of the container, so both can be styled accordingly.</p>
<h6>Reverse Row Syntax</h6>
<?php code_example(
'<table class="row"> <!-- Styles go on the row -->
  <tr>
    <td class="center" align="center"> <!-- Center the container -->
      <center>

        <table class="container"> <!-- Container restricts the content width -->
          <tr>
            <td class="wrapper last"> <!-- Wrapper stays on the inner table -->

              <table class="twelve columns">
                <tr>
                  <td>

                    Content

                  </td>
                  <td class="expander"></td>
                </tr>
              </table>

            </td>
          </tr>
        </table>

      </center>
    </td>
  </tr>
</table>'
, 'html'); ?>
<br>
<h6>Full Width Row</h6>
<p>In the example below, the rows have a white background, while the body is light blue.</p>
<iframe id="if-fullWidth" src="docs/examples/full-width.html"></iframe>
<br>
<br>
<h4 class="normal">Expanders</h4>
<p>When the Ink grid is shown on a small screen, the <code>.columns</code> tables expand to the full width of the container and stack vertically. On some clients, however, the columns don't expand properly if the content isn't as wide as the screen. While this might not seem so bad, it can cause your layout to appear broken if you are using a background color on the <code>.columns</code> table or are centering the content.</p>
<p>To get around this, an empty <kbd>&lt;td&gt;</kbd> with a class of <code>expander</code> is used after the <kbd>&lt;td&gt;</kbd> containing the actual content in the <code>.columns</code> table. This extra <kbd>&lt;td&gt;</kbd> isn't displayed, but it forces the content <kbd>&lt;td&gt;</kbd> to expand to full width.</p>
<h6>Expander TDs</h6>
<?php code_example(
'<table class="columns">
  <tr>
    <td>
      <!-- Content not large enough to "prop" the container open all the way -->
    </td>

    <td class="expander"></td> <!-- Used to fix columns on small screens -->

  </tr>
</table>'
, 'html'); ?>
<br>
<hr />
<h2 class="light">Compatibility</h2>
<div class="compatibility-section">
  <div class="row">
    <div class="large-9 columns">
      <p>The grid works as expected in most major email clients, with some caveats in <strong>Gmail (Mobile, iOS, Android)</strong>.</p>
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
            <td><span class="x">&#10008;</span></td>
            <td>Since Gmail doesn't support media queries, users will be presented with the desktop view. If mobile Gmail is a large part of your audience, we'd suggest using a layout based on the <a href="#block-grid">block-grid</a>.</td>
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
            <td>Be sure to use <kbd>&lt;center&gt;</kbd> tags in addition to the <code>center</code> class in order to center content properly.</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>