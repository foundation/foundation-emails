---
title: Visibility Classes
descripiton: Visibility classes allow you to control what content appears on what kind of device.
---

Foundation for Emails has two breakpoints: *small*, which is any email client under 600 pixels wide, and *large*, any client over 600 pixels. This means small generally correlates to mobile clients, and large correlates to desktop clients.

You can use a visibility class to selectively show or hide content on mobile vs. desktop clients.

**To show content only on mobile clients,** add the class `.hide-for-large` to the element.

```inky
<callout class="hide-for-large">
  <p>This callout will only appear on small screens.</p>
</callout>
```

**To show content only on desktop clients,** add the class `.show-for-large` to the element.

```inky
<callout class="show-for-large">
  <p>This callout will only appear on large screens.</p>
</callout>
```
