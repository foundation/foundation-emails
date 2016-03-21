---
title: The Grid
description: If you're familiar with the Foundation for Sites grid, you'll be right at home working with Foundation for Emails.
sass: scss/grid/_grid.scss
---

The grid has two core elements: the *row* and *column*. Rows define horizontal sections of content, and columns carve up the row into side-by-side sections.

## Container

All emails should have a container element. This gives the email a maximum width for email clients on larger screens. It also orients the email in the center.

A container is a full table, so it needs the tags `<table>` `<tbody>`, `<tr>`, and finally `<td>`. The class `.container` goes on the `<table>`.

```inky_example
<container></container>
```

---

## Rows

A row is a `<table>` with a `<tbody>` and `<tr>`. Inside of this `<tr>`, you'll place each individual column. The `<table>` also has the class `.row`.

In Inky HTML, use the `<row>` tag to create a row.

```inky_example
<row></row>
```

---

## Columns

The structure of a column is a bit more involved. At the top level, a column is a `<th>` with the class `.columns`.

Inside of the `<th>` is another full table. The content of your column goes inside of a `<th>`. Right below that table header should be *another* `<th>` with a class of `.expander`. This empty element helps the column expand to be full-width on small screens.

Here's our full column syntax so far:

```html
<th class="columns first last">
  <table>
    <tr>
      <th>This is a column.</th>
      <th class="expander"></th>
    </tr>
  </table>
</th>
```

In Inky HTML, use the `<columns>` class to create a column.

```inky_example
<columns>This is a column.</columns>
```

### Sizing

A column has a *size* between 1 and 12&mdash;this is how many columns wide the element is. Foundation uses a 12-column grid, so 6 columns is half the width of the whole row.

Set column sizes with the classes `.large-n` and `.small-n`, where `n` is how wide the column is. The `.small-` size is applied on mobile email clients, while the `.large-` size is applied on desktop email clients.

In Inky HTML, set the attribute `small` or `large` on the `<columns>` tag with the size you want. If you don't fill in `small`, it will use 12 by default. If you fill in `small` but not `large`, `large` will use the same value as `small`.

```inky_example
<columns small="12" large="6"></columns>
```

### First and Last Classes

The `.first` class adds the appropriate amount of padding-left to space the content away from the container’s edge. The `.last` class is added to your last set of columns in a row to add padding-right to the column. If you have columns in between `.first` and `.last`, these classes are not needed on the middle columns.

The reason these classes exist is that CSS properties like `:last-child` don’t work in most email clients so a class is needed.

In Inky HTML, these classes are added for you.

```inky_example
<columns large="4">One</columns>
<columns large="4">Two</columns>
<columns large="4">Three</columns>
```

---

## Collapsing

Collapsing a row removes the gutters from every column, which is the spacing between them. Add the class `.collapse` to a row to enable this.

```inky_example
<row class="collapse">
  <columns large="6">These columns touch.</columns>
  <columns large="6">These columns touch.</columns>
</row>
```

---

## Offsets

Offsets add spacing to the left of a column. Use this if all the columns in a row don't add up to 12, and you want to mess with the spacing between them. Offsets are intended to be used with one set of columns in a row.

Use the class `.large-offset-n` to create an offset, where `n` is the amount of columns to offset by. So, for example, `.large-offset-3` would offset the column by 25% of the width of the row. Think of it as pushing the columns over from the left.

```inky_example
<row>
  <columns large="3" class="large-offset-3">One</columns>
  <columns large="3">Two</columns>
</row>
```
