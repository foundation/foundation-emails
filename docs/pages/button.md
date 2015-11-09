---
title: Button
description: Dynamic and effective calls to actions.
sass: ./scss/ink/components/_button.scss
---

To get buttons that look awesome in most clients we make a table with the class <code>.button</code> that wraps your 
<code>&lt;a&gt;</code> tag. Buttons expand to the full width of their container by default. You can contain the buttons in sub-grid or block-grid elements. 

Check out this basic button:
```inky
    <center>
      <row>
        <column>
        <table class="button">
          <tr>
            <td>
              <a href="#">Button!</a>
            </td>
          </tr>
        </table>
      </column>
    </row>
  </center>
```

You can quickly modify the size of our buttons by adding these classes:
```inky
    <center>
      <row>
        <column>
        <table class="button tiny">
          <tr>
            <td>
              <a href="#">Button!</a>
            </td>
          </tr>
        </table>
      </column>
    </row>
      <row>
        <column>
        <table class="button small">
          <tr>
            <td>
              <a href="#">Button!</a>
            </td>
          </tr>
        </table>
      </column>
    </row>
      <row>
        <column>
        <table class="button large">
          <tr>
            <td>
              <a href="#">Button!</a>
            </td>
          </tr>
        </table>
      </column>
    </row>
  </center>
```

You can also change the color using our color classes here:
```inky
    <center>
      <row>
        <column>
        <table class="button secondary">
          <tr>
            <td>
              <a href="#">Button!</a>
            </td>
          </tr>
        </table>
      </column>
    </row>
      <row>
        <column>
        <table class="button success">
          <tr>
            <td>
              <a href="#">Button!</a>
            </td>
          </tr>
        </table>
      </column>
    </row>
      <row>
        <column>
        <table class="button warning">
          <tr>
            <td>
              <a href="#">Button!</a>
            </td>
          </tr>
        </table>
      </column>
    </row>
  </center>
```
