---
title: Media Queries
description: Use media queries to design responsive HTML emails that work in any email client.
---

## Default Media Query

CSS media queries allow us to adjust the display and orientation of content at different screen sizes.

Foundation for Emails has one breakpoint:

- Small: 596 pixels or smaller.

Many components can be modified at different screen sizes using special breakpoint classes. The grid is the most obvious example. 

**CSS Version**
In the code below, the left-hand column is six columns wide on small screens, hence `.small-6`. On medium-sized screens, the class `.medium-4` overrides the small style, changing the column to be four wide.

**Inky Version**
In Inky, you can define the width by using the `small="x"` and `large="x"` attributes.

```
<row>
  <columns small="6" large="4"></columns>
  <columns small="6" large="8"></columns>
</row>
```

---

## Using the Media Query

The media query will wrap the styles you wish to affect. Because there is only one breakpoint to consider and it's a max-width, your mobile styles or overrides will go in a media query. If you're using the CSS version of Foundation, use this media query to imitate the core breakpoint:

```scss
/* Small only */
@media screen and (max-width: 596px) {}
```

The Sass version of Foundation uses a convenient variable to set the breakpoint width. Use this media query to imitate the core breakpoint:

```scss
/* Small only */
@media only screen and (max-width: #{$global-breakpoint}) {}
```

### Example usage

```scss
.newsletter-title {
  text-transform: uppercase;
  font-size: 9px;
  padding-left: 40px;
  font-weight: bold;

  @media only screen and (max-width: #{$global-breakpoint}) {
    padding-left: 0;
  }
}
```

```scss
@media only screen and (max-width: #{$global-breakpoint}) {
  p {
    font-size: 19px;
    font-weight: 600;
  }
}
```

---

## Changing the Breakpoint

Changing the breakpoint is easy in the Sass version. In the `_settings.scss` you can control the width of this breakpoint.

```scss
$global-breakpoint: $global-width + $global-gutter;
```

The `$global-breakpoint` is a combined width of the `$global-width` and the `$global gutter`. You could hard-code a pixel value here instead of the variables or change the `$global-width` (recommended) as it takes account for the gutter calculation.

```scss
$global-width: 580px;
```



