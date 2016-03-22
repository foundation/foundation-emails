---
title: Callout
description: Formerly panels, callouts can be used to create sidebar panels or call out important content in an email.
sass: scss/components/_callout.scss
tags:
  - panel
  - alert
---

## Basics

A Callout adds a border, background, and some padding. Callouts use a full table structure, with the class `.callout` on the outer `<table>` (for bottom margin) and the `.callout-inner` applied to the innermost `<th>`.

When using [Inky](inky.html) HTML, the `<callout>` tag will create this structure for you. You can wrap them around a row or inside a column.

```inky_example
<row>
  <columns small="6">
    <p>Not in a callout :(</p>
  </columns>
  <columns small="6">
    <callout class="secondary">
      <p>I'm in a callout!</p>
    </callout>
  </columns>
</row>

<callout class="primary">
  <row>
    <columns small="12">
      <p>This whole row is in a callout!</p>
    </columns>
  </row>
</callout>
```

---

## Coloring Classes

The color of a callout can be changed by adding the class `.primary`, `.success`, `.warning`, or `.alert` to the element. A callout without a color class will have a white background.

```inky_example
<callout>
  <p>Successfully avoided Kraken. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
</callout>
<callout class="primary">
  <p>Successfully avoided Kraken. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
</callout>

<callout class="success">
  <p>Successfully avoided Kraken. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
</callout>

<callout class="warning">
  <p>There may be Krakens around. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
</callout>

<callout class="alert">
  <p>Incoming Kraken! Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
</callout>
```
