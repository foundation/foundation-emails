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
- [Dependencies](https://github.com/zurb/foundation-emails/blob/master/migration.md#dependancies)

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
Work in progress - issue [188](https://github.com/zurb/foundation-emails/issues/188)
```

***
## NEW
***

### Menu

Version 2 (CSS version)

```
<table class="menu">
  <tr>
    <td><a href="one.html">Item One</a></td>
    <td><a href="one.html">Item Two</a></td>
    <td><a href="one.html">Item Three</a></td>
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

CSS: 
-Text Editor
Sass version:
- Text Editor
- Git
- Node

To use the Sass version with the Inky markup language you'll want to insall with the Foundation CLI. You'll find the [installation instructions here](http://foundation.zurb.com/sites/docs/installation.html#command-line-tool).
