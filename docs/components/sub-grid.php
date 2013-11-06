<h1 id="sub-grid" data-magellan-destination="sub-grid" class="light">Sub-Grid</h1>
<p class="lead">A non-stacking grid for even more versatile layouts.</p>
<hr />

<h4 class="normal">Grids Within Grids</h4>
<p>While the Ink grid can't be nested like its <a href="http://foundation.zurb.com/docs/components/grid.html">Foundation counterpart</a>, Ink does provide a nestable sub-grid for when one grid just isn't enough.  By applying a <code>.sub-columns</code> class (as well as a numbered class, same as the primary grid) to a <kbd>&lt;td&gt;</kbd> tag underneath a <code>.columns</code> table, you can sub-divide the <code>.columns</code> table into sub-columns.</p>
<p>The last <code>.sub-columns</code> <kbd>&lt;td&gt;</kbd> in the <code>.columns</code> <kbd>&lt;table&gt;</kbd> should be given a class of <code>last</code> in order for the gutter padding to be properly maintained.</p>
<h6>Basic Sub-Grid Example</h6>
<?php code_example(
'<table class="row">
  <tr>
    <td class="wrapper">

      <table class="eight columns">
        <tr>
          <td class="eight sub-columns" style="background:green;">

            .eight.sub-columns

          </td>
          <td class="four sub-columns last" style="background:purple;">

            .four.sub-columns

          </td>
          <td class="expander"></td>
        </tr>
      </table>

    </td>
    <td class="wrapper last">

      <table class="four columns">
        <tr>
          <td style="background:pink;">

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
<!-- <hr />
<h2 class="light">Examples</h2>
<h4 class="normal">Non-Stacking Row</h4>
<p>Sometimes you may wish to display columns of content that you don't want to stack on small screens.  In this case, the easiest way is to place your content in a <code>.twelve.columns</code> container and use sub-columns to arrange your content.</p>
<script type="text/javascript" src="https://snipt.net/embed/fb54c056f05bf8be2994986c58c1ca30/"></script> -->