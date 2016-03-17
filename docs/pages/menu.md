---
title: Menu
description: Use the menu component to create a horizontal or vertical list of links.
sass: scss/components/_menu.scss
---

## Basics

A menu is a `<table>` with a class of `.menu` and a `<tr>` inside of it. Each link in the menu is a `<td>` with an `<a>` inside of it.

In Inky HTML, use the tag `<menu>` to make a menu, and the tag `<item>` to make an item.

```inky_example
<menu>
  <item href="http://zurb.com">Item</item>
  <item href="http://zurb.com">Item</item>
  <item href="http://zurb.com">Item</item>
</menu>
```

---

## Simple Menu

Menu items have padding around them, which in some situations will misalign your link text with another element of your design. To strip the padding from menu items, add the class `.simple` to the menu. There will still be some horizontal space between them, to space them out.

```inky_example
<menu class="simple">
  <item href="http://zurb.com">Item</item>
  <item href="http://zurb.com">Item</item>
  <item href="http://zurb.com">Item</item>
</menu>
```

---

## Vertical Menu

Menus align horizontally by default. To switch to a vertical menu, add the class `.vertical` to the menu.

```inky_example
<menu class="vertical">
  <item href="http://zurb.com">Item</item>
  <item href="http://zurb.com">Item</item>
  <item href="http://zurb.com">Item</item>
</menu>
```
