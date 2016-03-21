---
title: Visibility Classes
descripiton: Selectively show content for different screen sizes.
---

Visibility classes allow you to control what content appears on what screen size.

Foundation for Emails has two breakpoints: *small*, which is any email client under 596 pixels wide, and *large*, any client over 596 pixels. This means small generally correlates to mobile clients, and large correlates to desktop clients.

Due to Outlook's lack of support for certain CSS properties, the Foundation for Emails visibiility classes should be used in conjunction with conditional comments to ensure that the content is properly hidden (or shown) in Outlook 2007/2010/2013.

*Note: If you're using a visibility class on an image, be sure to apply it to the parent element, not to the image itself.*

**To show content only on mobile clients,** add the class `.hide-for-large` to the element.

**To show content only on desktop clients,** add the class `.show-for-large` to the element.

```inky_example
<callout class="hide-for-large primary">
  <p>This callout will only appear on small screens.</p>
</callout>

<callout class="show-for-large alert">
  <p>This callout will only appear on large screens.</p>
</callout>
```
