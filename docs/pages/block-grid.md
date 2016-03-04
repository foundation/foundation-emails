---
title: Block Grid
description: Use the block grid to create a gallery of items.
sass: scss/grid/_block-grid.scss
---

## Overview

Block grids display a number of evenly-spaced items in a row, automatically stacking on smaller screens without using media queries. While the normal grid should be used for broader layout, the block grid is useful for creating galleries of content that span multiple rows.

The wrapper of a block grid is a `<table>` with the class `.block-grid`, and a `<tr>`. Each element is a `<td>`. The number of items per row is defined by a class on the `<table>` called `.up-[n]`, where `[n]` is the number of items to display per row. You can have up to 8 items per row.

In Inky HTML, use the `<block-grid>` tag with the attribute `up="n"`, where `n` is the number of items per row.

```inky
<block-grid up="3">
  <td>Item 1</td>
  <td>Item 2</td>
  <td>Item 3</td>
  <td>Item 4</td>
  <td>Item 5</td>
  <td>Item 6</td>
</block-grid>
```
