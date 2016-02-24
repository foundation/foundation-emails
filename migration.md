# Foundation for Emails 2 Migration Guide

- What’s new?
- Overview
- Dependencies
- HTML
- CSS/Sass
- Components
..- Existing Components
..- New Components

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

Dependencies

CSS: 
-Text Editor
Sass version:
- Text Editor
- Git
- Node

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

You can use it to create the grid structure, buttons, and other components. We’ll go into this in detail in the components section.

## CSS/Sass

Foundation for Emails 2 is available in a Sass version which let’s you quickly change common CSS values with some simple variables within the settings. 

These are some CSS classes that are no longer needed for proper spacing:
- .wrapper
- .wrapper-last
- .text-pad
- .text-pad-left
- .text.pad-right

## Components

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
