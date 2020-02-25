---
title: Menu
description: Use the menu component to create a horizontal or vertical list of links.
sass: scss/components/_menu.scss
---

## Basics

A menu is a `<table>` with a class of `.menu` and a `<tr>` inside of it. Each link in the menu is a `<th class="menu-item">` with an `<a>` inside of it.

In Inky HTML, use the tag `<menu>` to make a menu, and the tag `<item>` to make an item.

```inky_example
<menu>
  <item href="https://zurb.com">Item</item>
  <item href="https://zurb.com">Item</item>
  <item href="https://zurb.com">Item</item>
</menu>
```

<div class="callout primary">
- It's important to add an `href` attribute to your `<item>`'s to ensure that Outlook.com will not display `[undefined]` in your rendered email.<br> 
- Office 365 and Outlook.com require a valid url in the href attribute or you can use the # placeholder.
</div>

---

## Vertical Menu

Menus align horizontally by default. To switch to a vertical menu, add the class `.vertical` to the menu.

```inky_example
<menu class="vertical">
  <item href="https://zurb.com">Item</item>
  <item href="https://zurb.com">Item</item>
  <item href="https://zurb.com">Item</item>
</menu>
```

---

## Vertical Menu on the Small Breakpoint

Menus align horizontally by default. To switch to a vertical menu on the small breakpoint only, add the class `.small-vertical` to the menu. This works well because the email clients that support media queries fall into the small breakpoint like iPhones and Android 4.4.

```inky_example
<menu class="small-vertical">
  <item href="https://zurb.com">Item</item>
  <item href="https://zurb.com">Item</item>
  <item href="https://zurb.com">Item</item>
</menu>
```