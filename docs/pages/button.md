---
title: Button
description: Dynamic and effective calls to actions.
sass: scss/components/_button.scss
---

To get buttons that look awesome in most clients we make a table with the class <code>.button</code> that wraps your
<code>&lt;a&gt;</code> tag. Buttons expand to the full width of their container by default. You can contain the buttons in sub-grid or block-grid elements.

Check out this basic button:
```inky
<center>
  <row>
    <columns>
      <button href="zurb.com">Button</button>
    </columns>
  </row>
</center>
```

You can quickly modify the size of our buttons by adding these classes:
```inky
<center>
  <row>
    <columns>
      <button href="zurb.com" class="tiny">Tiny Button</button>
    </columns>
  </row>
  <row>
    <columns>
      <button href="zurb.com" class="small">Small Button</button>
    </columns>
  </row>
  <row>
    <columns>
      <button href="zurb.com" class="large">Large Button</button>
    </columns>
  </row>
</center>
```

You can also change the color using our color classes here:
```inky
<center>
  <row>
    <columns>
      <button href="zurb.com" class="secondary">Secondary Button</button>
    </columns>
  </row>
  <row>
    <columns>
      <button href="zurb.com" class="success">Success Button</button>
    </columns>
  </row>
  <row>
    <columns>
      <button href="zurb.com" class="warning">Warning Button</button>
    </columns>
  </row>
  <row>
    <columns>
      <button href="zurb.com" class="alert">Alert Button</button>
    </columns>
  </row>
</center>
```
