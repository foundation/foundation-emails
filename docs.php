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
      <li><a href="#full-width">Full-Width Headers &amp; Footers</a></li>
      <li><a href="#visibility-classes">Visibility Classes</a></li>
      <li><a href="#panels">Panels</a></li>
      <li><a href="#buttons">Buttons</a></li>
    </ul>
  </div>
  <div class="large-9 columns">
    <h1 id="start" class="light">Getting Started</h1>
    <p class="lead">Dive in to creating your responsive email.</p>
    <hr>
    <h2 class="light">The Boilerplate</h2>
    <p>
      Starting a new Ink project is fairly straightforward.  If you aren't using one of our <a href="templates.php">templates</a>, grab the boilerplate code from below to use as a starting point.  While you can reference <code>ink.css</code> using a link tag for testing purposes, be sure to remove the <kbd>&lt;link rel="stylesheet" href="ink.css" /&gt;</kbd> statement and paste your code into the style tag in the head before running your email through an inliner.
    </p>
    <script type="text/javascript" src="https://snipt.net/embed/ede5e79e642e6842d9727f711bfe61bf/"></script>
    <br>
    <p>
      If you're applying a background color to your entire email, be sure to attach it to the table with a class of <code>body</code>, not to the actual <code>body</code> tag, since some clients remove this be default.
    </p>
    <script type="text/javascript" src="https://snipt.net/embed/cb9276e922e8c38b108c4ec8ad420e7f/"></script>
    <br>
    
    <hr class="section">

    <h1 id="grid" class="light">Grid</h1>
    <p class="lead">Create powerful multi-device layouts quickly and easily.</p>

    <hr>
    <h2 class="light">Structure</h2>
    <h4 class="normal">Overview</h4>
    <p>While the markup requires a few additional classes to support some older mail clients, Ink's grid can be thought of in terms of three components: containers, rows and columns.</p>
    <h4 class="normal">Containers</h4>
    <p>These are examples of different ways to use the 4-column Ink Grid. Emails work properly by using table elements, a developer's and designer's worst enemy, but we've made it easy for you.  You can create beautiful layouts with ease, but only if you follow this structure.</p>
    <h4 class="normal">Rows</h4>
    <p>These are examples of different ways to use the 4-column Ink Grid. Emails work properly by using table elements, a developer's and designer's worst enemy, but we've made it easy for you.  You can create beautiful layouts with ease, but only if you follow this structure.</p>
    <h4 class="normal">Columns</h4>
    <p>These are examples of different ways to use the 4-column Ink Grid. Emails work properly by using table elements, a developer's and designer's worst enemy, but we've made it easy for you.  You can create beautiful layouts with ease, but only if you follow this structure.</p>
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
    <p>Maecenas faucibus mollis interdum. Sed posuere consectetur est at lobortis. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
    <script type="text/javascript" src="https://snipt.net/embed/a2927bac91526b5a558d3bfa73dcdd79/"></script>

    <hr class="section">

    <h1 id="sub-grid" class="light">Sub-Grid</h1>
    <p class="lead">Create powerful multi-device layouts quickly and easily.</p>
    <hr />
    <h2 class="light">Explanation</h2>
    <h4 class="normal">Using our predefined HTML classes</h4>
    <p>These are examples of different ways to use the 4-column Ink Grid. Emails work properly by using table elements, a developer's and designer's worst enemy, but we've made it easy for you.  You can create beautiful layouts with ease, but only if you follow this structure.</p>
    <script type="text/javascript" src="https://snipt.net/embed/a2927bac91526b5a558d3bfa73dcdd79/"></script>
    <br>
    <hr />
    <h2 class="light">Breakdown</h2>
    <p>Here's how these items are being used:</p>
    <table>
      <tr>
        <td><code>table.body</code></td>
        <td>Certain clients strip out the body tag, so we'll provide a workaround and add some CSS to override default styles</td>
      </tr>
      
      <tr>
        <td><code>td.center</code></td>
        <td>This piece centers the table</td>
      </tr>
      <tr>
        <td><code>td.container</code></td>
        <td>We'll wrap everything to 600px</td>
      </tr>
      <tr>
        <td><code>td.row</code></td>
        <td>We'll wrap everything to 600px</td>
      </tr>
      <tr>
        <td><code>td.wrapper.last</code></td>
        <td>Why you need this class. it may span two lines but that's cool because we've accommodated for that</td>
      </tr>
      <tr>
        <td><code>table.(one–four).columns</code></td>
        <td>How wide you want your content to be</td>
      </tr>
      <tr>
        <td><code>td.expander</code></td>
        <td>What expander does yay!</td>
      </tr>
    </table>
    <hr />
    <h2 class="light">Examples</h2>
    <p>Maecenas faucibus mollis interdum. Sed posuere consectetur est at lobortis. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
    <script type="text/javascript" src="https://snipt.net/embed/a2927bac91526b5a558d3bfa73dcdd79/"></script>
    
    <hr class="section">

    <h1 id="full-width" class="light">Full-Width Headers &amp; Footers</h1>
    <p class="lead">Create powerful multi-device layouts quickly and easily.</p>
    <hr />
    <h2 class="light">Explanation</h2>
    <h4 class="normal">Using our predefined HTML classes</h4>
    <p>These are examples of different ways to use the 4-column Ink Grid. Emails work properly by using table elements, a developer's and designer's worst enemy, but we've made it easy for you.  You can create beautiful layouts with ease, but only if you follow this structure.</p>
    <script type="text/javascript" src="https://snipt.net/embed/a2927bac91526b5a558d3bfa73dcdd79/"></script>
    <br>
    <hr />
    <h2 class="light">Breakdown</h2>
    <p>Here's how these items are being used:</p>
    <table>
      <tr>
        <td><code>table.body</code></td>
        <td>Certain clients strip out the body tag, so we'll provide a workaround and add some CSS to override default styles</td>
      </tr>
      
      <tr>
        <td><code>td.center</code></td>
        <td>This piece centers the table</td>
      </tr>
      <tr>
        <td><code>td.container</code></td>
        <td>We'll wrap everything to 600px</td>
      </tr>
      <tr>
        <td><code>td.row</code></td>
        <td>We'll wrap everything to 600px</td>
      </tr>
      <tr>
        <td><code>td.wrapper.last</code></td>
        <td>Why you need this class. it may span two lines but that's cool because we've accommodated for that</td>
      </tr>
      <tr>
        <td><code>table.(one–four).columns</code></td>
        <td>How wide you want your content to be</td>
      </tr>
      <tr>
        <td><code>td.expander</code></td>
        <td>What expander does yay!</td>
      </tr>
    </table>
    <hr />
    <h2 class="light">Examples</h2>
    <p>Maecenas faucibus mollis interdum. Sed posuere consectetur est at lobortis. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
    <script type="text/javascript" src="https://snipt.net/embed/a2927bac91526b5a558d3bfa73dcdd79/"></script>
    
    <hr class="section">

    <h1 id="visibility-classes" class="light">Visibility Classes</h1>
    <p class="lead">Create powerful multi-device layouts quickly and easily.</p>
    <hr />
    <h2 class="light">Explanation</h2>
    <h4 class="normal">Using our predefined HTML classes</h4>
    <p>These are examples of different ways to use the 4-column Ink Grid. Emails work properly by using table elements, a developer's and designer's worst enemy, but we've made it easy for you.  You can create beautiful layouts with ease, but only if you follow this structure.</p>
    <script type="text/javascript" src="https://snipt.net/embed/a2927bac91526b5a558d3bfa73dcdd79/"></script>
    <br>
    <hr />
    <h2 class="light">Breakdown</h2>
    <p>Here's how these items are being used:</p>
    <table>
      <tr>
        <td><code>table.body</code></td>
        <td>Certain clients strip out the body tag, so we'll provide a workaround and add some CSS to override default styles</td>
      </tr>
      
      <tr>
        <td><code>td.center</code></td>
        <td>This piece centers the table</td>
      </tr>
      <tr>
        <td><code>td.container</code></td>
        <td>We'll wrap everything to 600px</td>
      </tr>
      <tr>
        <td><code>td.row</code></td>
        <td>We'll wrap everything to 600px</td>
      </tr>
      <tr>
        <td><code>td.wrapper.last</code></td>
        <td>Why you need this class. it may span two lines but that's cool because we've accommodated for that</td>
      </tr>
      <tr>
        <td><code>table.(one–four).columns</code></td>
        <td>How wide you want your content to be</td>
      </tr>
      <tr>
        <td><code>td.expander</code></td>
        <td>What expander does yay!</td>
      </tr>
    </table>
    <hr />
    <h2 class="light">Examples</h2>
    <p>Maecenas faucibus mollis interdum. Sed posuere consectetur est at lobortis. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
    <script type="text/javascript" src="https://snipt.net/embed/a2927bac91526b5a558d3bfa73dcdd79/"></script>
    
    <hr class="section">

    <h1 id="panels" class="light">Panels</h1>
    <p class="lead">Create powerful multi-device layouts quickly and easily.</p>
    <hr />
    <h2 class="light">Explanation</h2>
    <h4 class="normal">Using our predefined HTML classes</h4>
    <p>These are examples of different ways to use the 4-column Ink Grid. Emails work properly by using table elements, a developer's and designer's worst enemy, but we've made it easy for you.  You can create beautiful layouts with ease, but only if you follow this structure.</p>
    <script type="text/javascript" src="https://snipt.net/embed/a2927bac91526b5a558d3bfa73dcdd79/"></script>
    <br>
    <hr />
    <h2 class="light">Breakdown</h2>
    <p>Here's how these items are being used:</p>
    <table>
      <tr>
        <td><code>table.body</code></td>
        <td>Certain clients strip out the body tag, so we'll provide a workaround and add some CSS to override default styles</td>
      </tr>
      
      <tr>
        <td><code>td.center</code></td>
        <td>This piece centers the table</td>
      </tr>
      <tr>
        <td><code>td.container</code></td>
        <td>We'll wrap everything to 600px</td>
      </tr>
      <tr>
        <td><code>td.row</code></td>
        <td>We'll wrap everything to 600px</td>
      </tr>
      <tr>
        <td><code>td.wrapper.last</code></td>
        <td>Why you need this class. it may span two lines but that's cool because we've accommodated for that</td>
      </tr>
      <tr>
        <td><code>table.(one–four).columns</code></td>
        <td>How wide you want your content to be</td>
      </tr>
      <tr>
        <td><code>td.expander</code></td>
        <td>What expander does yay!</td>
      </tr>
    </table>
    <hr />
    <h2 class="light">Examples</h2>
    <p>Maecenas faucibus mollis interdum. Sed posuere consectetur est at lobortis. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
    <script type="text/javascript" src="https://snipt.net/embed/a2927bac91526b5a558d3bfa73dcdd79/"></script>
    
    <hr class="section">

    <h1 id="buttons" class="light">Buttons</h1>
    <p class="lead">Create powerful multi-device layouts quickly and easily.</p>
    <hr />
    <h2 class="light">Explanation</h2>
    <h4 class="normal">Using our predefined HTML classes</h4>
    <p>These are examples of different ways to use the 4-column Ink Grid. Emails work properly by using table elements, a developer's and designer's worst enemy, but we've made it easy for you.  You can create beautiful layouts with ease, but only if you follow this structure.</p>
    <script type="text/javascript" src="https://snipt.net/embed/a2927bac91526b5a558d3bfa73dcdd79/"></script>
    <br>
    <hr />
    <h2 class="light">Breakdown</h2>
    <p>Here's how these items are being used:</p>
    <table>
      <tr>
        <td><code>table.body</code></td>
        <td>Certain clients strip out the body tag, so we'll provide a workaround and add some CSS to override default styles</td>
      </tr>
      
      <tr>
        <td><code>td.center</code></td>
        <td>This piece centers the table</td>
      </tr>
      <tr>
        <td><code>td.container</code></td>
        <td>We'll wrap everything to 600px</td>
      </tr>
      <tr>
        <td><code>td.row</code></td>
        <td>We'll wrap everything to 600px</td>
      </tr>
      <tr>
        <td><code>td.wrapper.last</code></td>
        <td>Why you need this class. it may span two lines but that's cool because we've accommodated for that</td>
      </tr>
      <tr>
        <td><code>table.(one–four).columns</code></td>
        <td>How wide you want your content to be</td>
      </tr>
      <tr>
        <td><code>td.expander</code></td>
        <td>What expander does yay!</td>
      </tr>
    </table>
    <hr />
    <h2 class="light">Examples</h2>
    <p>Maecenas faucibus mollis interdum. Sed posuere consectetur est at lobortis. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
    <script type="text/javascript" src="https://snipt.net/embed/a2927bac91526b5a558d3bfa73dcdd79/"></script>
    <br>
  </div>
</div>





<?php include 'includes/_subscribe.php' ?>	
<?php include 'includes/_footer.php' ?>