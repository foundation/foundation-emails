---
title: The Grid
description: If you're familiar with the Foundation for Sites grid, you'll be right at home working with Foundation for Emails.
sass: scss/grid/_grid.scss
---

The grid has two core elements: the *row* and *column*. Rows define horizontal sections of content, and columns carve up the row into side-by-side sections.

## Container

All emails should have a container element. This gives the email a maximum width for email clients on larger screens. It also orients the email in the center.

A container is a full table, so it needs the tags `<table>`, `<tr>`, and finally `<td>`. The class `.container` goes on the `<table>`.

```inky_example
<container>All the rows go here</container>
```

---

## Rows

A row is a `<table>` with a `<tbody>` and `<tr>`. Inside of this `<tr>`, you'll place each individual column. The `<table>` also has the class `.row`.

In Inky HTML, use the `<row>` tag to create a row.

```inky_example
<container>
  <row>
    Columns go here
  </row>
</container>
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
      <th>This is a column. Columns contain your content.</th>
      <th class="expander"></th>
    </tr>
  </table>
</th>
```

In Inky HTML, use the `<columns>` class to create a column.

```inky_example
<columns>This is a column. Columns contain your content.</columns>
```

### Sizing

A column has a *size* between 1 and 12&mdash;this is how many columns wide the element is. Foundation uses a 12-column grid, so 6 columns is half the width of the whole row.

Set column sizes with the classes `.large-n` and `.small-n`, where `n` is how wide the column is. The `.small-` size is applied on mobile email clients, while the `.large-` size is applied on desktop email clients.

In Inky HTML, set the attribute `small` or `large` on the `<columns>` tag with the size you want. If you don't fill in `small`, it will use 12 by default. If you fill in `small` but not `large`, `large` will use the same value as `small`.

```html
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

### Expander

The `.expander` prevents a rendering bug in Outlook that sometimes keeps the columns from expanding to full width. Instead of ignoring the width attribute and politely taking up only as much space as the content dictates (default `<th>` behavior), the presence of the expander `<th>` causes the content `<th>` to become “greedy” and take up as much space as is given to it, up to the value specified in the width (which is 100%). They’re set to not display, but they kick the total width up over 100%, which forces their sibling `<th>` to expand fully.

---

## Collapsing

Collapsing a row removes the gutters from every column, which is the spacing between them. Add the class `.collapse` to a row to enable this.

```inky_example
<row class="collapse">
  <columns large="6"><img src="https://via.placeholder.com/300x150/777777/&text=These columns touch" alt=""></columns>
  <columns large="6"><img src="https://via.placeholder.com/300x150/999999/&text=These columns touch" alt=""></columns>
</row>
```

---

## Offsets

Offsets add spacing to the left of a column. Use this if all the columns in a row don't add up to 12, and you want to mess with the spacing between them.

Use the class `.large-offset-n` to create an offset, where `n` is the amount of columns to offset by. So, for example, `.large-offset-3` would offset the column by 25% of the width of the row. Think of it as pushing the columns over from the left.

```inky_example
<row>
  <columns large="3" class="large-offset-3"><img src="https://via.placeholder.com/150x150/999999/&text=offset column" alt=""></columns>
  <columns large="3"><img src="https://via.placeholder.com/150x150/999999" alt=""></columns>
</row>
```
