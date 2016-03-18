# Foundation for Emails 2 Migration Guide

- [What’s new?](https://github.com/zurb/foundation-emails/blob/master/migration.md#whats-new)
- [Overview](https://github.com/zurb/foundation-emails/blob/master/migration.md#overview)
- [HTML](https://github.com/zurb/foundation-emails/blob/master/migration.md#html)
- [CSS/Sass](https://github.com/zurb/foundation-emails/blob/master/migration.md#csssass)
- [Components](https://github.com/zurb/foundation-emails/blob/master/migration.md#components)
  - [Grid](https://github.com/zurb/foundation-emails/blob/master/migration.md#grid)
  - [Buttons](https://github.com/zurb/foundation-emails/blob/master/migration.md#buttons)
  - [Callout](https://github.com/zurb/foundation-emails/blob/master/migration.md#panels-are-now-callouts)
  - [Menu](https://github.com/zurb/foundation-emails/blob/master/migration.md#menu)
- [Dependencies](https://github.com/zurb/foundation-emails/blob/master/migration.md#dependencies)

#### This guide describes the changes required to migrate a Foundation for Emails template from version 1 (formerly Ink) to 2.

## What’s new?

- **Streamlined and updated responsive grid:** We’ve simplified the markup in the new version so it’s faster and easier to code. The new responsive grid in Emails 2 requires fewer tags and classes. It’s also now responsive on Android Native!
- **Inky templating language:** With Inky you can write less code and get more done. The Inky language gets you out of tables and into a simpler, more web-like, HTML.
- **Built with Sass:** Now faster than ever, you can easily make sweeping visual changes to your email that reflect your brand styles - all within one settings file.
- **ZURB Stack:** All kinds of task automation - [Panini](http://foundation.zurb.com/sites/docs/panini.html), our Handlebars templates, compiling Sass, BrowserSync, image compression, and auto inlining are built in to speed up your workflow. 

## Overview

When migrating, the following items can be translated easily from 1 to 2:
- Boilerplate
- Visibility
- Typography
- Text helper classes
- Button class
- Container
- Panel
- Media Queries

Other areas may require more changes to work correctly including:
- Grid
- Sub-grid (now part of Grid)

What’s new that you might want to use:
- Menu - Horizontal
- Menu - Vertical

## HTML

With Foundation for Emails 2, confusing and tedious tables are a thing of the past. The new Inky markup will save you time and energy coding your emails. It looks like:

```
<container>
  <row>
    <column small="12" large="4"></column>
    <column small="12" large="8"></column>
  </row>
</container>
```

You can use it to create the grid structure, buttons, and other components. We’ll go into this in detail in the components section. We'll explain more in the [Grid section](https://github.com/zurb/foundation-emails/blob/master/migration.md#grid).

## CSS/Sass

Foundation for Emails 2 is available in a Sass version which let’s you quickly change common CSS values with some simple variables within the settings. 

These are some CSS classes that are no longer needed for proper spacing:
- .wrapper
- .wrapper-last
- .text-pad
- .text-pad-left
- .text.pad-right

***
## Components
***

### Grid

Version 1
In the previous version, we needed extra tags to support a wrapper element. This used to control the gutter and margins of a column.

```
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

Version 2 (CSS version)
In F4E 2, we’ve eliminated another a tag in an effort to simplify your markup. Gutters are now directly applied to the column element itself. We still need to identify the last column with a last class, however we also need to identify the first column element with the first class.

```
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

Version 2 (Inky markup)

```
<container>
  <row>
    <columns small="12" large="12">
      
    </columns>
  </row>
</container>
```

### Sub-grid is now a small grid
In an effort to unify the thinking across the Foundation family, we’ve removed the sub-columns and moved towards a fully functional small grid.

Version 1

```
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

Version 2 (CSS version)

```
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

Version 2 (Inky markup)

```
<container>
  <row>
    <columns small="6">
        
    </columns>
    <columns small="6">
        
    </columns>
  </row>
</container>
```

### Block Grid
The block grid has a minor syntax change with identifying the number of elements that are displayed in the row. We’ve moved to the convention of `.up-x`, instead of `.ex-up`.


Version 1 

```
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

Version 2 (CSS version)

```
<table class="block-grid up-3">
  <tr>
    <td>Thing 1</td>
    <td>Thing 2</td>
    <td>Thing 3</td>
  </tr>
</table>
```

Version 2 (Inky markup)

```
<block-grid up="3">
  <td>Thing 1</td>
  <td>Thing 2</td>
  <td>Thing 3</td>
</block-grid>
```

### Offset Columns
Because we’ve eliminated the wrapper, offsets are now directly applied to the column itself.

Version 1 

```
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

Version 2 (CSS version)

```
<table class="row">
  <tr>
    <th class="small-4 small-offset-8 large-4 large-offset-8 columns">
  
    </th>
   </tr>
</table>
```

Version 2 (Inky markup)

```
<row>
  <columns small="4" large="4" class="small-offset-8 large-offset-8">
  
  </columns>
</row>
```

## Buttons
In the previous version of F4E the text inside of the button was the only clickable element. In F4E 2, we’ve taken the hybrid approach of using padding and borders to increase the clickable area

Version 1 

```
<table class="button">
  <tr>
    <td>
      <a href="#">Button Label</a>
    </td>
  </tr>
</table>
```

Version 2 (CSS version)

```
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

Version 2 (Inky markup)

```
<button href="http://zurb.com"></button>
```

The button markup has changed to make the touch targets better. Now the whole button is clickable. It requires more table markup but you should use Inky anyways which is much simpler.

## Panels are now Callouts
In an effort to unify the terminology across the Foundation family panels are now called callouts.

Version 1 

```
<table class="twelve columns">
  <tr>
    <td class="panel">
      Panel content
    </td>
    <td class="expander"></td>
  </tr>
</table>
```

Version 2 (CSS version)

```
<table class="small-12 columns">
  <tr>
    <td class="callout">
      
    </td>
    <td class="expander"></td>
  </tr>
</table>
```

Version 2 (Inky markup)

```
<row>
  <columns small="6">
    <p>One Word</p>
  </columns>
  <columns small="6">
    <callout class="secondary">
      <p>2sdafkhasdfkjhas dkfjh askdjfh askjdhf aksjdhf aksjdhf kajshdf</p>
    </callout>
  </columns>
</row>

<callout class="primary">
  <row>
    <columns small="12">

      <row>
        <columns small="6">
          <p>One Word</p>
        </columns>
        <columns small="6">
          <p>2sdafkhasdfkjhas dkfjh askdjfh askjdhf aksjdhf aksjdhf kajshdf</p>
        </columns>
      </row>

    </columns>
  </row>
</callout>
```

Callouts used to only be applicable to a `<td>`. In Foundation for Emails 2, you can wrap a callout around a `<row>` or the content inside a `<column>`.

***
## NEW
***

### Menu

Version 2 (CSS version)

```
<table class="container">
  <tr>
    <td>     

      <table class="menu">
        <tr>
          <td>
            <table>
              <tr>
                <th class="menu-item">
                  <a href="http://google.com">Nav 1</a>
                </th>
                <th class="menu-item">
                  <a href="http://google.com">Nav 2</a>
                </th>
                <th class="menu-item">
                  <a href="http://google.com">Nav 3</a>
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

Version 2 (Inky markup)

```
<menu>
  <item href="one.html">Item One</item>
  <item href="one.html">Item Two</item>
  <item href="one.html">Item Three</item>
</menu>
```

The menu component can be used to create a simple set of links comonly used in headers, for social icons or in footers. Adding the `.vertical` class will change the orientation.

## Dependencies

**CSS:**

- Text Editor

**Sass version:**

- Text Editor
- Git
- Node

To use the Sass version with the Inky markup language you'll want to insall the Foundation for Emails project template. You'll find the [installation instructions here](https://github.com/zurb/foundation-emails/tree/v2.0#getting-started).
