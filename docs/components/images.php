<h1 id="images" class="light">Retina Images</h1>
<p class="lead">Accent your emails with rich, high resolution images.</p>
<hr />
<h2 class="light">Markup</h2>
<p>The days of having to choose between supporting Outlook or retina devices are over. To use high resolution images, put <code>height</code> and <code>width</code> HTML attributes on the <kbd>&lt;img&gt;</kbd> tag, corresponding to the scaled size of the image in a desktop view (the width of its <code>.columns</code> container). On small screen devices, Ink will cause the image to expand to its full width (or the width or its parent element, whichever is smaller).</p>
<h6>Image Markup</h6>
<?php code_example(
'<table class="three columns">
  <tr>
    <td>

      <img height="130" width="130" src="http://placehold.it/600x600&text=Retina">

    </td>
    <td class="expander"></td>
  </tr>
</table>',
'html') ?>
<br>
<hr />
<h2 class="light">Column Sizes</h2>
<p>Below is a chart of the sizes images should be to fully fit various sizes of grid columns on a desktop (larger than 600px) view. Height should be determined with respect to width and should also be explicitly declared on the <kbd>&lt;img&gt;</kbd> tag.</p>
<table>
  <thead>
    <td>Number of Columns</td>
    <td>Internal Width (in px)</td>
  </thead>
  <tr>
    <td>1</td>
    <td>30</td>
  </tr>
  <tr>
    <td>2</td>
    <td>80</td>
  </tr>
  <tr>
    <td>3</td>
    <td>130</td>
  </tr>
  <tr>
    <td>4</td>
    <td>180</td>
  </tr>
  <tr>
    <td>5</td>
    <td>230</td>
  </tr>
  <tr>
    <td>6</td>
    <td>280</td>
  </tr>
  <tr>
    <td>7</td>
    <td>330</td>
  </tr>
  <tr>
    <td>8</td>
    <td>380</td>
  </tr>
  <tr>
    <td>9</td>
    <td>430</td>
  </tr>
  <tr>
    <td>10</td>
    <td>480</td>
  </tr>
  <tr>
    <td>11</td>
    <td>530</td>
  </tr>
  <tr>
    <td>12</td>
    <td>580</td>
  </tr>
</table>
<hr />
<h2 class="light">Examples</h2>
<h4 class="normal">Newsletter Images</h4>
<p>A common pattern in email newsletters is to have an image on the left with description text next to it. We use this layout quite frequently on ZURB emails and thought that it looked awkward when the small image begins to float in the center of the screen on mobile devices. To compensate for this, we use a full-width image that's scaled down on the desktop view.</p>
<h6>Newsletter 3-9 Image</h6>
<?php code_example(
'<table class="row">
  <tr>
    <td class="wrapper">

      <table class="three columns">
        <tr>
          <td>

            <img height="130" width="130" src="http://placehold.it/600x600&text=Retina%20Image">

          </td>
          <td class="expander"></td>
        </tr>
      </table>

    </td>
    <td class="wrapper last">

      <table class="nine columns">
        <tr>
          <td>

            Text Content

          </td>
          <td class="expander"></td>
        </tr>
      </table>

    </td>
  </tr>
</table>',
'html') ?>
<br>
<h6>Retina Newsletter Image Demo</h6>
<iframe id="if-images" src="docs/examples/images.html"></iframe>
<br>
<hr />
<h2 class="light">Compatibility</h2>
<div class="compatibility-section">
  <div class="row">
    <div class="large-9 columns">
      <p>Retina images work as expected in most major email clients, with some caveats in <strong>Gmail (Mobile, iOS, Android)</strong>.</p>
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
            <td>Since the inline sizing will not be overwritten in mobile Gmail, retina images should not be used with <a href="#gmail">block-grid</a> based layouts (they're fine with the <a href="#grid">standard grid</a>.</td>
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