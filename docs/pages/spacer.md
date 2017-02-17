---
title: Spacer
description: Vertical spacing in emails is inconsistent. The spacer component will help you create the space you need, the same on every device and client.
tags:
  - spacing
  - height
  - margin
  - padding
---

## Basics

Vertical spacing between email clients is not as simple as it sounds, in fact, it’s consistently inconsistent. Versions of Outlook don’t respect margin and padding the same and `<br>`’s are different all over the place. 

The spacer is used to create vertical spacing between elements. The size `size="x"` attribute allows you to set the height in pixels of vertical spacing you need.

When using [Inky](inky.html) HTML, the `<spacer>` tag will create this structure for you. You can use them between rows, containers or inside wrappers, rows, columns, and containers. In this example, this spacer will create 100px of vertical spacing:

```inky_example
<p>Stuff on top</p>
<spacer size="100"></spacer>
<p>Stuff on bottom</p>
```

The Inky `<spacer>` tag also allows you to specify contextual spacer sizes for small or large screens. In the example below, there will be 40px of vertical spacing on small screens, and 100px of spacing on large screens.


```inky_example
<p>Stuff above...</p>
<spacer size-sm="40" size-lg="100"></spacer>
<p>...stuff below.</p>
```

Specify both `size-sm` and `size-lg` or use just one of those attributes to render a spacer only on the corresponding size screen.
