<?php include 'includes/_header.php' ?>
<?php include 'includes/_top-bar.php' ?>

<section class="top-area">
  <div class="row">
    <div class="large-12 columns">
      <h2>Documentation</h2>
    </div>
  </div>
</section>

<div class="row docs">
  <div class="large-3 columns">
    <ul class="doc-nav">
      <li><a href="#start">Getting Started</a></li>
      <li><a href="#grid">Grid</a></li>
      <li><a href="#sub-grid">Sub-Grid</a></li>
      <!-- <li><a href="#full-width">Full-Width Headers &amp; Footers</a></li> -->
      <li><a href="#visibility-classes">Visibility Classes</a></li>
      <li><a href="#panels">Panels</a></li>
      <li><a href="#buttons">Buttons</a></li>
    </ul>
  </div>
  <div class="large-9 columns">
    <h1 id="start" class="light">Getting Started</h1>
    <p class="lead">Dive into creating your responsive email.</p>
    <hr>
    <h2 class="light">The Boilerplate</h2>
    <p>
      Starting a new Ink project is fairly straightforward.  If you aren't using one of our <a href="templates.php">templates</a>, grab the boilerplate code from below to use as a starting point.  While you can reference <code>ink.css</code> using a link tag for testing purposes, be sure to remove the <kbd>&lt;link rel="stylesheet" href="ink.css" /&gt;</kbd> statement and paste your CSS into the style tag in the head before running your email through an inliner.
    </p>
    <script type="text/javascript" src="https://snipt.net/embed/ede5e79e642e6842d9727f711bfe61bf/"></script>
    <br>
    <p>
      If you're applying a background color to your entire email, be sure to attach it to the table with a class of <code>body</code>, not to the actual <kbd>&lt;body&gt;</kbd> tag, since some clients remove this be default.
    </p>
    <script type="text/javascript" src="https://snipt.net/embed/cb9276e922e8c38b108c4ec8ad420e7f/"></script>
    <br>
    
    <hr class="section">

    <h1 id="grid" class="light">Grid</h1>
    <p class="lead">Create powerful multi-device layouts quickly and easily.</p>

    <hr>
    <h2 class="light">Structure</h2>
    <h4 class="normal">Overview</h4>
    <p>Ink uses a 12-column grid with a 580px wrapper.  On mobile devices (under 580px wide), columns become full width and stack vertically.</p>
    <p>Ink's grid can be thought of in terms of three components:</p>
    <h4 class="normal">Containers</h4>
    <p>Ink containers wrap the content and contain it to a fixed, 580px layout on desktop clients and large tablets.  Below 580px, containers take up 95% of the screen's width.</p>
    <h4 class="normal">Rows</h4>
    <p>Rows are used to separate blocks of from each other vertically.  In addition, the <kbd>&lt;td&gt;</kbd> tags of <code>.row</code> tables use the wrapper class to maintain a gutter between columns.</p>
    <h4 class="normal">Columns</h4>
    <p>Columns denote the width of the content, as based on a 12-column system.  The content inside them will expand to cover n-columns, assuming that the number of columns in one row adds up to 12.</p>
    <script type="text/javascript" src="https://snipt.net/embed/1228ccdf52570df98c40fd5cdd66fce9/"></script>
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
        <td>Class applied to the last <code>.wrapper</code> td in each row in order for the gutter to work properly.  If you only have one (presumably full-width) <code>.columns</code> table (and therefore one <code>.wrapper</code> td) in a row, the <code>.wrapper</code> td still needs to have the last class applied to it.</td>
      </tr>
      <tr>
        <td>table</td>
        <td>{number}</td>
        <td>Can be any number between one and twelve (spelled out).  Used to determine how wide your <code>.columns</code> tables are.  The number of columns in each row should add up to 12, including <a href="#offsets">offset columns</a>.</td>
      </tr>
      <tr>
        <td>table</td>
        <td>columns</td>
        <td>Table that displays as n-twelfths of the width of the 580px <code>.container</code> table on large screens, and expands to the full with of the <code>.container</code> table on small screens.</td>
      </tr>
      <tr>
        <td>td</td>
        <td>expander</td>
        <td>An empty (and invisible) element added after the content element in a <code>.columns</code> table.  It forces the content <code>td</code> to expand to the full width of the screen on small devices, instead of just the width of the content within the <code>td</code>.</td>
      </tr>
    </table>
    <hr>
    
    <h2 class="light">Examples</h2>
    <h4 class="normal">Even Columns</h4>
    <p>Ink's tweve column grid maks creating even column layouts a snap.  Just use one <code>.twelve.columns</code>, two <code>.six.columns</code>, three <code>.four.columns</code> or four <code>.three.columns</code> classes to create your layout.  Appearing as single columns on large screens, the layout will fold into a single column on small (mobile) screens.</p>
    <script type="text/javascript" src="https://snipt.net/embed/28db973ea0117f4324cf5d74b0029f55/"></script>
    <br>
    <h4 class="normal">Rows Within Columns</h4>
    <p>Unlike the <a href="http://foundation.zurb.com/docs/components/grid.html">Foundation grid</a>, Ink's grid cannot be nested.  A layout simulating rows within columns is possible, however, by placing multiple <code>.columns</code> tables (with the same number of columns) within the same <code>.wrapper</code> td.</p>
    <script type="text/javascript" src="https://snipt.net/embed/01eb0d482e77ef8e25e40e6d1dae49d1/"></script>
    <br><h4 class="normal">Centered Content</h4>
    <p>To center the content of a column, apply a class of <code>center</code> to the <kbd>&lt;td&gt;</kbd> that contains the content.  If you want to center an image, you should also apply a class of <code>center</code> to the image itself.</p>
    <script type="text/javascript" src="https://snipt.net/embed/12bd7e7e0eaf1e43c2e79803bb5c84e6/"></script>
    <br>
    <h4 class="normal">When to Use Expanders</h4>
    <p>When the Ink grid is shown on a small screen, the <code>.columns</code> tables expand to the full with of the container and stack vertically.  On some clients, however, the columns don't expand properly if the content isn't as large as the screen.  While this might not seem so bad, it can cause your layout to appear broken if you are using a background color on the <code>.columns</code> table or are centering the content.</p>
    <p>To get around this, an empty <kbd>&lt;td&gt;</kbd> with a class of <code>expander</code> is used after the <kbd>&lt;td&gt;</kbd> containing the actual content in the <code>.columns</code> table.  This extra <kbd>&lt;td&gt;</kbd> isn't displayed, but it forces the content <kbd>&lt;td&gt;</kbd> to expand to full width.</p>
    
    <hr class="section">

    <h1 id="sub-grid" class="light">Sub-Grid</h1>
    <p class="lead">A non-stacking grid for even more versatile layouts.</p>
    <hr />
    <h2 class="light">Explanation</h2>
    <h4 class="normal">Grids Within Grids</h4>
    <p>While the Ink grid can't be infinitely nested like its <a href="http://foundation.zurb.com/docs/components/grid.html">Foundation counterpart</a>, Ink does provide a nestable sub-grid for when one grid just isn't enough.  By applying a <code>.sub-columns</code> class (as well as a numbered class, same as the primary grid) to a <kbd>&lt;td&gt;</kbd> tag underneath a <code>.columns</code> table, you can sub-divide the <code>.columns</code> table into sub-columns.</p>
    <p>The last <code>.sub-columns</code> <kbd>&lt;td&gt;</kbd> in the <code>.columns</code> <kbd>&lt;table&gt;</kbd> should be given a class of <code>last</code> in order for the gutter padding to be properly maintained.</p>
    <script type="text/javascript" src="https://snipt.net/embed/6a36cf3cecb431e26fc66e7b878822b5/"></script>
    <br>
    <h4 class="normal">Sub-Grid Rows</h4>
    <p>To create nested rows within a column, place multiple <code>.columns</code> tables (with the same number of columns) in the same <code>.wrapper</code> td.  These <code>.columns</code> tables can then be further divided into sub-columns by placing the a <code>.sub-columns</code> class on their child <kbd>&lt;td&gt;</kbd> elements.</p>
    <script type="text/javascript" src="https://snipt.net/embed/728696fb8f11a1f377f2ad3219e40d6e/"></script>
    <br>
    <hr />
    <h2 class="light">Examples</h2>
    <h4 class="normal">Non-Stacking Row</h4>
    <p>Sometimes you may wish to display columns of content that you don't want to stack on small screens.  In this case, the easiest way is to place your content in a <code>.twelve.columns</code> container and use sub-columns to arrange your content.</p>
    <script type="text/javascript" src="https://snipt.net/embed/fb54c056f05bf8be2994986c58c1ca30/"></script>

    <hr class="section">

    <!-- <h1 id="full-width" class="light">Full-Width Headers &amp; Footers</h1>
    <p class="lead">Off-container elements for expressive layouts.</p>
    <hr />
    <h2 class="light">Explanation</h2>
    <h4 class="normal">Using our predefined HTML classes</h4>
    <p>These are examples of different ways to use the 4-column Ink Grid. Emails work properly by using table elements, a developer's and designer's worst enemy, but we've made it easy for you.  You can create beautiful layouts with ease, but only if you follow this structure.</p>
    <script type="text/javascript" src="https://snipt.net/embed/a2927bac91526b5a558d3bfa73dcdd79/"></script>
    <br>
    <hr />
    <h2 class="light">Breakdown</h2>
    <p>Here's how these items are being used:</p>
    
    <hr />
    <h2 class="light">Examples</h2>
    <p>Maecenas faucibus mollis interdum. Sed posuere consectetur est at lobortis. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
    <script type="text/javascript" src="https://snipt.net/embed/a2927bac91526b5a558d3bfa73dcdd79/"></script>
    
    <hr class="section"> -->

    <h1 id="visibility-classes" class="light">Visibility Classes</h1>
    <p class="lead">Selectively show content for different screen sizes.</p>
    <hr />
    <h2 class="light">Explanation</h2>
    <p>By adding a visibility class to an element, you can show or hide it based on screen size.  Visibility classes can be used on any element.</p>
    <p>Note: If you're using a visibility class on an <code>&lt;img&gt;</code> tag, be sure to include it on the image's parent element as well, in order for it to work in all browsers.</p>
    <script type="text/javascript" src="https://snipt.net/embed/a2927bac91526b5a558d3bfa73dcdd79/"></script>
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
      <tr>
        <td><code>.hide-for-large</code> (same as <code>.show-for-small</code>)</td>
      </tr>
      <tr>
        <td><code>.show-for-large</code> (same as <code>.hide-for-small</code>)</td>
      </tr>
    </table>
    
    <hr class="section">

    <h1 id="panels" class="light">Panels</h1>
    <p class="lead">Quickly highlight important content.</p>
    <hr />
    <h2 class="light">Explanation</h2>
    <p>Add a class of <code>panel</code> to a <kbd>&lt;td&gt;</kbd> in order to give it a default border and background color.  Great for offsetting important content or sidebars.</p>
    <script type="text/javascript" src="https://snipt.net/embed/d6fe336d4fbc6804f6cbe7df87343283/"></script>
    
    <hr class="section">

    <h1 id="buttons" class="light">Buttons</h1>
    <p class="lead">Dynamic and effective calls to action.</p>
    <hr />
    <h2 class="light">Structure</h2>
    <h4 class="normal">Style One: The Preferred Method* <small>Does not work with <a href="#">Premailer</a>.</small></h4>
    <p>To create buttons that look great in most clients, give a class of <code>button</code> to an <kbd>&lt;a&gt;</kbd> tag, and use it to enclose a table with your content.  While this gives you a nice looking button with a full click-target, it doesn't work in all CSS inliners, since it's technically invalid for an inline element (the <kbd>&lt;a&gt;</kbd> tag) to wrap a table element (booooooooo!).</p>
    <script type="text/javascript" src="https://snipt.net/embed/6ba14740d872d10cd5da2e04c65350c6/"></script>
    <br>
    <h4 class="normal">Style Two: The Bulletproof Method* <small>Not yet implemented.</small></h4>
    <p>If you need to support a CSS inliner that chokes on our preferred buttons, then our bulletproof method is the way to go.  By creating a <kbd>&lt;table&gt;</kbd> of class <code>button</code> and putting your <kbd>&lt;a&gt;</kbd> inside that, you'll have a nice looking button that won't break <a href="#">Premailer</a>.  This method comes at a cost, however, as the click target only covers the button text, rather than the entire button.</p>
    <script type="text/javascript" src="https://snipt.net/embed/d73c0ffa28c3d602cef080776bec7095/"></script>
    <br>
    <hr />
    <h2 class="light">Style Classes</h2>
    <p>Several built in styling classes can be applied to the same element as the <code>button</code> class is applied to in order to adjust the button's appearance.</p>
    <h4 class="normal">Size</h4>
    <p>Size classes affect the button's vertical padding.  The available size classes are:</p>
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
    <p>Color classes denote the purpose of the button, and are used to change its background color.  The available color classes are:</p>
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
    <p>Radius classes cause the corners of the buttons to be rounded in clients that support the <kbd>border-radius</kbd> property.  The available radius classes are:</p>
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
    <script type="text/javascript" src="https://snipt.net/embed/4544d214e092be6a5c073504ad1d6443/"></script>
    <br>
  </div>
</div>





<?php include 'includes/_subscribe.php' ?>	
<?php include 'includes/_footer.php' ?>