---
title: Global Styles
description: Our global CSS includes helpful resets to ensure consistent styling across email clients.
sass: scss/_global.scss
---

## Font Sizing

The default font size is set to 100% of the browser style sheet, usually 16 pixels. This ensures compatibility with browser-based text zoom or user-set defaults. If you're using the Sass version of Foundation, edit the `$global-font-size` variable to change the base font size. This can be a percentage value, or a pixel value.

---

## Colors

All interactive elements in Foundation, such as links and buttons, use the same color. The default shade of blue you see all over Foundation comes from the `$primary-color` Sass variable.

Many components can also be colored with four other colors: secondary, alert, success, and warning. Use these colors to give more context to UI elements and actions.

<div class="row small-up-1 medium-up-3 large-up-5">
  <div class="column">
    <div class="docs-color-block">
      <div class="docs-color-block-primary" style="background-color: #2199e8"></div>
      <p>Primary</p>
    </div>
  </div>
  <div class="column">
    <div class="docs-color-block">
      <div class="docs-color-block-secondary"></div>
      <p>Secondary</p>
    </div>
  </div>
  <div class="column">
    <div class="docs-color-block">
      <div class="docs-color-block-success"></div>
      <p>Success</p>
    </div>
  </div>
  <div class="column">
    <div class="docs-color-block">
      <div class="docs-color-block-warning"></div>
      <p>Warning</p>
    </div>
  </div>
  <div class="column">
    <div class="docs-color-block">
      <div class="docs-color-block-alert"></div>
      <p>Alert</p>
    </div>
  </div>
  <div class="column">
    <div class="docs-color-block">
      <div class="docs-color-block-white"></div>
      <p>White</p>
    </div>
  </div>
  <div class="column">
    <div class="docs-color-block">
      <div class="docs-color-block-light-gray"></div>
      <p>Light Gray</p>
    </div>
  </div>
  <div class="column">
    <div class="docs-color-block">
      <div class="docs-color-block-medium-gray"></div>
      <p>Medium Gray</p>
    </div>
  </div>
  <div class="column">
    <div class="docs-color-block">
      <div class="docs-color-block-dark-gray"></div>
      <p>Dark Gray</p>
    </div>
  </div>
  <div class="column">
    <div class="docs-color-block">
      <div class="docs-color-block-black"></div>
      <p>Black</p>
    </div>
  </div>
</div>

---

### Color Classes

Some components, such as [buttons](button.html) and [callouts](callout.html), have *coloring classes*, which let you change the color of the element by adding the name of the color as a CSS class.

```inky_example
<button class="button" href="#">Primary Action</button>
<button class="secondary button" href="#">Secondary Action</button>
```

```inky_example
<callout class="success">
  <p>Created a new folder. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
</callout>
<callout class="alert">
  <p>Error fetching stick. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
</callout>
```

## Responsive Breakpoint

Unlike Foundation for Sites, the Foundation for Emails CSS is written *desktop-first*. This is because many older desktop email clients don't support media queries, or `<style>` tags.

**Your email layout shifts from desktop to mobile at 596 pixels.** This is the width of the container, plus the width of the gutters around the container. In the Sass version of Foundation, you can change the breakpoint by modifying these variables:

- `$global-width`: width of the container. It's 580px by default.
- `$global-gutter`: width of the grid gutter. It's padding to space columns away from each other or away from the edges of the container.
- `$global-breakpoint`: The breakpoint at which the layout shifts. It's the variable that adds `$global-width` and `$global-gutter` together.
