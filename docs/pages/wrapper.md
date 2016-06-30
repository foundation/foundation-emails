---
title: Wrapper
description: Wrapper creates the necessary structure to wrap elements so that full width backgrounds can applied.
tags:
  - full width
  - fliud
  - header
  - footer
---

## Basics

When using [Inky](inky.html) HTML, the `<wrapper>` tag will create a `<table>`, `<tr>`, `<th>` structure needed to create consistant full width backgrounds. You can add classes to the wrapper to target CSS properties on it or target elements within it. The `.wrapper-inner` class is available to add padding to the wrapper.

```inky_example
<wrapper>
  content
</wrapper>
```

## Full (fluid) width header or footer

Creating a fluid header with the `<wrapper>` component is pretty straight forward. Wrapping a `<container>` will keep your content bound to the width of the container. Add a class to the `<wrapper class="">` to add a background color.

```inky_example
<style type="text/css">
  .wrapper.header {
    background: #8a8a8a !important;
  }

  .wrapper.header .columns {
    padding-bottom: 0 !important;
  }

  .header p {
    color: #fff !important;
    font-weight: bold;
    margin-bottom: 0 !important;
  }

  .wrapper.header .header-container {
    background: #8a8a8a !important;
  }
</style>

<wrapper class="header">
  <spacer size="16"></spacer>
  <center>
    <container class="header-container">
      <row class="collapse">
        <columns small="6" valign="middle">
          <img src="http://placehold.it/200x50/663399">
        </columns>
        <columns small="6" valign="middle">
          <p class="text-right">BASIC</p>
        </columns>
      </row>
    </container>
  </center>
  <spacer size="16"></spacer>
</wrapper>
```

Using this structure outside of the container will yeild a fluid width background that expands to the width of the email client's viewport.


