<h1 id="panels" class="light">Panels</h1>
<p class="lead">Quickly highlight important content.</p>
<hr />

<p>Add a class of <code>panel</code> to a <kbd>&lt;td&gt;</kbd> in a <code>.columns</code> table in order to give it a default border and background color.  Great for offsetting important content or for quickly prototyping a layout.</p>
<h6>Example Panel Markup</h6>
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
<iframe id="if-panels" src="docs/examples/panels.html"></iframe>
<br>