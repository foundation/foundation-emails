---
title: Callout
description: Formerly panels, callouts can be used to create sidebar panels or call out important content in an email.
sass: scss/components/_callout.scss
tags:
  - panel
  - alert
---

## Basics

Callouts use a full table structure, with the class `.callout` applied to the innermost `<th>`.

When using [Inky](inky.html) HTML, the `<callout>` tag will create this structure for you.

```inky
<callout>
  <p>Beware of the Kraken! Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
</callout>
```

---

## Coloring Classes

The color of a callout can be changed by adding the class `.success`, `.warning`, or `.alert` to the element.

```inky
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
