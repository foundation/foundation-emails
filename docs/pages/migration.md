---
title: Foundation for Emails 2 Migration Guide
description: This guide describes the changes required to migrate a Foundation for Emails template from version 1 (formerly Ink) to Foundation for Emails 2.
tags:
  - upgrade
---

## What’s new?

- **Streamlined and updated responsive grid:** We’ve simplified the markup in the new version so it’s faster and easier to code. The new responsive grid in Emails 2 requires fewer tags and classes. It’s also now responsive on Android Native!
- **Inky templating language:** With Inky you can write less code and get more done. The Inky language gets you out of tables and into a simpler, more web-like, HTML.
- **Built with Sass:** Now faster than ever, you can easily make sweeping visual changes to your email that reflect your brand styles - all within one settings file.
- **ZURB Stack:** All kinds of task automation - [Panini](https://get.foundation/sites/docs/panini.html), our Handlebars templates, compiling Sass, BrowserSync, image compression, and auto inlining are built in to speed up your workflow.

---

## Overview

First off, you'll want to choose a version to get started with.
<br>[CSS version](css-guide.html) or the [Sass version with Inky](sass-guide.html)

When migrating, the following items can be translated easily from 1 to 2:
- Boilerplate
- Visibility
- Typography
- Text helper classes
- Container
- Panel
- Media Queries

Other areas may require more changes to work correctly including:
- Grid
- Sub-grid (now part of Grid)
- Button class

What’s new that you might want to use:
- Menu - Horizontal
- Menu - Vertical

---

## HTML

With Foundation for Emails 2, confusing and tedious tables are a thing of the past. The new Inky markup will save you time and energy coding your emails. It looks like:

```html
<container>
  <row>
    <column small="12" large="4">
      Content
    </column>
    <column small="12" large="8">
      Content
    </column>
  </row>
</container>
```

You can use it to create the grid structure, buttons, and other components. We’ll go into this in detail in the components section. We'll explain more in the <a href="#grid">Grid section</a>.

---

## CSS & Sass

Foundation for Emails 2 is available in a Sass version which let’s you quickly change common CSS values with some simple variables within the settings.

These are some CSS classes that are no longer needed for proper spacing:
- `.wrapper`
- `.wrapper-last`
- `.text-pad`
- `.text-pad-left`
- `.text-pad-right`

Some helper classes have changed:

`.center` was used in version 1 to center text.

Version 2 now has more alignment classes:
- `.text-center`: centers text
- `.text-left`: aligns text to the left
- `.text-right`: aligns text to the right
- `.small-text-center`: centers text on the small breakpoint
- `.small-text-left`: left aligns text on the small breakpoint
- `.small-text-right`: right aligns text on the small breakpoint
- `float-center`: centers an image (see the [alignment docs](alignment.html) for best practices.)

---

## Ink 1.0 Components

### Grid

#### Old Markup

In the Ink 1.0, we needed extra tags to support a wrapper element. This used to control the gutter and margins of a column.

```html
<table class="container">
  <tr>
    <td>

      <table class="row">
        <tr>
          <td class="wrapper last">

            <table class="twelve columns">
              <tr>
                <td class="text-pad">

                </td>
                <td class="expander"></td>
              </tr>
            </table>

          </td>
        </tr>
      </table>

    </td>
  </tr>
</table>
```

#### New Markup

In Foundation for Emails 2, we’ve eliminated another tag in an effort to simplify your markup. Gutters are now directly applied to the column element itself. We still need to identify the last column with a `.last` class, and now the first column element with the `.first` class. If you have columns in the middle of first and last, they don't need a `.first` or `.last` class.

Also, we stitched `<td>`'s to `<th>`'s because that allows Android 4 native to be responsive - win!

```html
<table class="container">
  <tr>
    <td>
      <table class="row">
        <tr>
          <th class="first last small-12 large-12 columns">

          </th>
        </tr>
      </table>
    <th class="expander"></th>
    </td>
  </tr>
</table>
```

#### New Markup (Inky HTML)

```html
<container>
  <row>
    <columns small="12" large="12">

    </columns>
  </row>
</container>
```

---

### Sub-grid

In an effort to unify the thinking across the Foundation family, we’ve removed the sub-columns and moved towards a fully functional small grid.

#### Old Markup

```html
<table class="container">
  <tr>
    <td class="wrapper last">

      <table class="twelve columns">
        <tr>
          <td class="six sub-columns">

          </td>
          <td class="six sub-columns last">

          </td>
          <td class="expander"></td>
        </tr>
      </table>

    </td>
  </tr>
</table>
```

#### New Markup (Plain HTML)

```html
<table class="container">
  <tr>
    <td>

      <table class="row">
        <tr>
          <th class="first large-6 small-6 columns">

          </th>

          <th class="last large-6 small-6 columns">

          </th>
          <th class="expander"></th>
        </tr>
      </table>

    </td>
  </tr>
</table>
```

#### New Markup (Inky HTML)

```html
<container>
  <row>
    <columns small="6">

    </columns>
    <columns small="6">

    </columns>
  </row>
</container>
```

---

### Block Grid

The block grid has a minor syntax change with identifying the number of elements that are displayed in the row. We’ve moved to the convention of `.up-x`, instead of `.x-up`.

#### Old Markup

```html
<table class="block-grid three-up">
  <tr>
    <td>
      Thing 1
    </td><td> <!-- Make sure the tags are directly next to each other -->
      Thing 2
    </td><td> <!-- Make sure the tags are directly next to each other -->
      Thing 3
    </td>
  </tr>
</table>
```

#### New Markup (Plain HTML)

```html
<table class="block-grid up-3">
  <tr>
    <th class="column first">
      Thing 1
    </th><th class="column"> <!-- Make sure the tags are directly next to each other -->
      Thing 2
    </th><th class="column last"> <!-- Make sure the tags are directly next to each other -->
      Thing 3
    </th>
  </tr>
</table>
```

#### New Markup (Inky HTML)

```html
<block-grid up="3">
  <column>Thing 1</column>
  <column>Thing 2</column>
  <column>Thing 3</column>
</block-grid>
```

---

### Offset Columns

Because we’ve eliminated the wrapper, offsets are now directly applied to the column itself.

#### Old Markup

```html
<table class="row">
  <tr>
    <td class="wrapper offset-by-four">

      <table class="eight columns">
        <tr>
          <td class="panel">

          </td>
          <td class="expander"></td>
        </tr>
      </table>
    </td>
  </tr>
</table>
```

#### New Markup (Plain HTML)

```html
<table class="row">
  <tr>
    <th class="small-4 small-offset-8 large-4 large-offset-8 columns">

    </th>
   </tr>
</table>
```

#### New Markup (Inky HTML)

```html
<row>
  <columns small="4" large="4" class="small-offset-8 large-offset-8">

  </columns>
</row>
```

Offsets now can be used on the small breakpoint or the large, or both. They will shift over a set of columns over from the left.

---

### Buttons

In the previous version of F4E the text inside of the button was the only clickable element. In F4E 2, we’ve taken a hybrid approach of using padding and borders to increase the clickable area. It requires one more table but the result is a much bigger touch target which is good for usability.

#### Old Markup

```html
<table class="button">
  <tr>
    <td>
      <a href="#">Button Label</a>
    </td>
  </tr>
</table>
```

#### New Markup (Plain HTML)

```html
<table class="button">
  <tr>
    <td>
      <table>
        <tr>
          <td>
            <a href="https://zurb.com">I am successful</a>
          </td>
        </tr>
      </table>
    </td>
  </tr>
</table>
```

#### New Markup (Inky HTML)

```html
<button href="https://zurb.com"></button>
```

Centering a button is easier now, just wrap the button with `<center>` tags.

---

### Panels

In an effort to unify the terminology across the Foundation family `panels` are now called `callouts`.

#### Old Markup

```html
<table class="twelve columns">
  <tr>
    <td class="panel">
      Panel content
    </td>
    <td class="expander"></td>
  </tr>
</table>
```

#### New Markup (Plain HTML)

```html
<table class="callout">
  <tr>
    <td class="callout-inner">

    </td>
    <td class="expander"></td>
  </tr>
</table>
```

#### New Markup (Inky HTML)

```html
<row>
  <columns small="6">
    <p>One Word</p>
  </columns>
  <columns small="6">
    <callout class="secondary">
      <p>I'm in a callout!</p>
    </callout>
  </columns>
</row>

<callout class="primary">
  <row>
    <columns small="12">
      <row>
        <columns small="6">
          <p>This whole row is in a callout!</p>
        </columns>
        <columns small="6">
          <p>This whole row is in a callout!</p>
        </columns>
      </row>
    </columns>
  </row>
</callout>
```

You can wrap a callout around a `<row>` or the content inside a `<column>`.

---

## New Components

### Menu

#### Old Markup (Plain HTML)

```html
<table class="container">
  <tr>
    <td>

      <table class="menu">
        <tr>
          <td>
            <table>
              <tr>
                <th class="menu-item">
                  <a href="https://google.com">Nav 1</a>
                </th>
                <th class="menu-item">
                  <a href="https://google.com">Nav 2</a>
                </th>
                <th class="menu-item">
                  <a href="https://google.com">Nav 3</a>
                </th>
              </tr>
            </table>
          </td>
        </tr>
      </table>

    </td>
  </tr>
</table>
```

#### New Markup (Inky HTML)

```html
<menu>
  <item href="one.html">Item One</item>
  <item href="one.html">Item Two</item>
  <item href="one.html">Item Three</item>
</menu>
```

The menu component can be used to create a simple set of links comonly used in headers, for social icons or in footers. Adding the `.vertical` class will change the orientation. You can even make it vertical on the small breakpoint only with `.small-vertical`.

### Spacer

#### New Markup (Inky HTML)

```html
<spacer size="100"></spacer>
```

The spacer component creates consistant vertical spacing between or inside of elements. The size `size="x"` attribute allows you to set the height in pixels of vertical spacing you need.

### Wrapper

#### New Markup (Inky HTML)

```html
<wrapper>
  content here
</wrapper>
```

The wrapper component allows you to wrap content to target CSS within it. You can add classes to it so you can easily create a full with background.

## Dependencies

The CSS version works exactly like the one we distributed with Ink 1.0. Check out our [getting started guide](css-guide.html) to learn more.

To use the Sass version with the Inky markup language you'll want to install the Foundation for Emails project template. We have another [getting started guide](sass-guide.html) just for the Sass version of Foundation.
