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
  <p>Beware of the Kraken!</p>
</callout>
```

---

## Coloring Classes

The color of a callout can be changed by adding the class `.success`, `.warning`, or `.alert` to the element.

```inky
<callout class="success">
  <p>Successfully avoided Kraken.</p>
</callout>

<callout class="warning">
  <p>There may be Krakens around.</p>
</callout>

<callout class="alert">
  <p>Incoming Kraken!</p>
</callout>
```
