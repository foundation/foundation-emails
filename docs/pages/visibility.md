---
title: Visibility Classes
description: Selectively show content for different screen sizes.
tags:
  - show
  - hide
---

Visibility classes allow you to control what content appears on what screen size.

Foundation for Emails has two breakpoints: *small*, which is any email client under 596 pixels wide, and *large*, any client over 596 pixels. This means small generally correlates to mobile clients, and large correlates to desktop clients.

Due to Outlook's lack of support for certain CSS properties, the Foundation for Emails visibility classes should be used in conjunction with conditional comments to ensure that the content is properly hidden (or shown) in Outlook 2007, 2010, 2013 and 2016. For instance, in order to hide an element in MS Outlook as well as in e-mail forwarded from MS Outlook, make sure to wrap that element with `<!--[if !mso]><!-->` and `<!--<![endif]-->` conditional formatting.

<div class="primary callout">
  <p>If you're using a visibility class on an image, be sure to apply it to the parent element, not to the image itself.</p>
</div>

**To show content only on mobile clients,** add the class `.hide-for-large` to a div wrapping the element that needs to be hidden.

**To show content only on desktop clients,** add the class `.show-for-large` to the element.

```inky_example
<!--[if !mso]><!-->
<div class="hide-for-large">
  <callout class="primary">
    <p>This callout will only appear on small screens.</p>
  </callout>
</div>
<!--<![endif]-->

<callout class="show-for-large alert">
  <p>This callout will only appear on large screens.</p>
</callout>
```
